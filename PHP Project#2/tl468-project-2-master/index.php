<?php
include("includes/init.php");

// open connection to database
$db = open_sqlite_db("secure/catalog.sqlite");

// An array to deliver messages to the user.
$messages = array();

// self-made function 1
function creat_tab($amount)
{

  for ($i = 1; $i <= $amount; $i++) { ?>
    &nbsp;
  <?php }
}

// self-made function 2
function getEntries()
{
  $database = new SQLite3('secure/catalog.sqlite');
  $count = $database->querySingle("SELECT COUNT(*) as count FROM Kpop_Comback_Songs_List");
  echo $count;
}
// cited from Lab 6
function print_record($record)
{
  ?>
  <tr>

    <td> <strong>
        <h5><?php echo htmlspecialchars($record["Song_Name"]); ?>
      </strong></h5>
    </td>

    <td><?php echo htmlspecialchars($record["Singer_Name"]); ?></td>
    <td><?php echo htmlspecialchars($record["Singer_Type"]); ?></td>
    <td><?php echo htmlspecialchars($record["Release_Date"]); ?></td>
    <td><?php echo htmlspecialchars($record["Kpop_Comback_Songs_List"]); ?></td>
    <td>
      <?php
      $rank = intval($record["Ranking"]);
      if (is_int($rank) && $rank != 0) {
        echo $rank;
      } else {
        echo "Out of Chart";
      }
      ?>
    </td>
  </tr>
<?php
}

// Search Form

const SEARCH_FIELDS = [
  "all" => "Search Everything",
  "Song_Name" => "By Song_Name",
  "Singer_Name" => "By Singer_Name",
  "Singer_Type" => "By Singer_Type",
  "Ranking" => "By Ranking",
  //"ID" => "By ID",
  "Release_Date" => "By Release_Date"
];

//isset($_GET['category']
if (isset($_GET['search'])) {
  $do_search = true;
  $category = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_STRING);

  // check if the category exists in the SEARCH_FIELDS array
  if (in_array($category, array_keys(SEARCH_FIELDS))) {
    $search_field = $category;
  } else {
    array_push($messages, "Invalid category for search.");
    $do_search = false;
  }

  // Get the search terms
  $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
  $search = trim($search);
} else {
  // No search provided, so set the product to query to NULL
  $do_search = false;
  $category = NULL;
  $search = NULL;
}

// Insert Form
// Get the list of songs from the database.
$newSong = exec_sql_query($db, "SELECT DISTINCT Song_Name FROM Kpop_Comback_Songs_List", NULL)->fetchAll(PDO::FETCH_COLUMN);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //if (isset($_POST["submit_insert"])) {
  $valid_review = true;

  //$ID = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
  $Song_Name = filter_input(INPUT_POST, 'Song_Name', FILTER_SANITIZE_STRING);
  $Singer_Name = filter_input(INPUT_POST, 'Singer_Name', FILTER_SANITIZE_STRING);
  $Singer_Type = filter_input(INPUT_POST, 'Singer_Type', FILTER_SANITIZE_STRING);
  $Release_Date = filter_input(INPUT_POST, 'Release_Date', FILTER_SANITIZE_STRING);


  // song name required
  if (!in_array($Song_Name, $newSong)) {
    $valid_review = false;
  }

  if ($valid_review) {

    $params = array(
      ': id' => 10000 + rand(),
      ': Song_Name' => $Song_Name,
      ': Singer_Name' => $Singer_Name,
      ': Singer_Type' => $Singer_Type,
      ': Release_Date' => $Release_Date,
      ': Ranking' => -10000 - rand(),
    );

    $sql = "INSERT INTO Kpop_Comback_Songs_List(ID, Song_Name, Singer_Name, Singer_Type, ReleaseDate, Ranking)
    VALUES (:ID, :Song_Name, :Singer_Name, :Singer_Type, :ReleaseDate, :Ranking);";


    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      array_push($messages, "This new song has been recorded. Thank you!");
    } else {
      array_push($messages, "Failed to add this song:(.");
    }
  } else {
    array_push($messages, "Failed to add that song. Invalid info.");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include("includes/header.php"); ?>
</head>

<body>

  <div class="w3-panel">

    <div id="content-wrap">
      <h1>Have a loot at our new released songs!</h1>
      <p> 中文版: <?php creat_tab(30); ?> English Version:</p>
      <iframe width="280" height="157" src="https://www.youtube.com/embed/vK66x9HDLw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="280" height="157" src="https://www.youtube.com/embed/sDXLxfma5YQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <br>
      Source: <cite><a href="https://www.youtube.com/watch?v=vK66x9HDLw0&t=28s">KPOP New Releases Info Chinese</a></cite>
      <?php creat_tab(8); ?>
      Source: <cite><a href="https://www.youtube.com/watch?v=sDXLxfma5YQ">KPOP New Releases Info English</a></cite>
      <br>
      <br>

      <?php
      // Write out any messages to the user.
      foreach ($messages as $message) {
        echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
      }
      ?>


      <form id="searchForm" action="index.php" method="get" novalidate>
        <select name="category">
          <?php foreach (SEARCH_FIELDS as $field_name => $label) { ?>
            <option value="<?php echo $field_name; ?>"><?php echo $label; ?></option>
          <?php } ?>
        </select>
        <input type="text" name="search" required />
        <button type="submit">Search</button>
      </form>

      <?php
      if ($do_search) {
      ?>
        <h2>Search Results</h2>
        <?php
        if ($search_field == "all") {

          $cond_exprs = array();
          foreach (SEARCH_FIELDS as $field => $label) {
            // There is no 'all' field
            if ($field != 'all') {
              array_push($cond_exprs, "(" . $field . " LIKE '%' || :search || '%')");
            }
          }

          $sql = "SELECT * FROM Kpop_Comback_Songs_List WHERE " . implode($cond_exprs, " OR ");
          $params = array(
            ':search' => $search
          );
        } else {

          $sql = "SELECT * FROM Kpop_Comback_Songs_List WHERE $search_field LIKE '%' ||:search || '%';";
          $params = array(
            ':search' => $search
          );
        }
      } else {
        // No songs to query, so return everything!
        ?>
        <h2>All Songs</h2>
        <?php

        $sql = "SELECT * FROM Kpop_Comback_Songs_List";
        $params = array();
      }

      // Get the songs to display
      $result = exec_sql_query($db, $sql, $params);
      if ($result) {
        // The query was successful, let's get the records.
        $records = $result->fetchAll();

        if (count($records) > 0) {
          // We have records to display
        ?>
          <table>
            <tr>

              <th>Song_Name</th>
              <th>Singer_Name</th>
              <th>Singer_Type*</th>
              <th>Release_Date</th>
              <th>Ranking</th>
            </tr>

            <div class="w3-panel w3-pink">
              <?php
              foreach ($records as $record) {
                print_record($record);
              }
              ?>
            </div>
          </table>
      <?php

        } else {
          // No results found
          echo "<p>No matching songs found.</p>";
        }
      }
      ?>

      <h2>Can't Find a New Song in the <b><?php getEntries() ?></b> songs above? Add it here!</h2>


      <form id="newSong" action="index.php" method="post" novalidate>

        <div class="group_label_input">
          <label>Phone Number:</label>
          <input type="int" name="kpop-lover" />
        </div>

        <div class="group_label_input">
          <label for="Song_Name">Song Name::</label>
          <input type="text" id="Song_Name" name="Song_Name" />
        </div>

        <div class="group_label_input">
          <label for="Singer_Name">Singer Name::</label>
          <input type="text" id="Singer_Name" name="Singer_Name" />
        </div>


        <div class="group_label_input">
          <label for="Singer_Type">Singer Type::</label>
          <input type="text" id="Singer_Type" name="Singer_Type" />
        </div>


        <div class="group_label_input">
          <label for="Release_Date">Release Date::</label>
          <input type="text" id="Release_Date" name="Release_Date" />
        </div>

        <div class="group_label_input">
          <div class="submit_insert">
            <span>
              <!-- empty element; used to align submit button --></span>
            <button type="submit">Add Song~
            </button>
          </div>
        </div>


      </form>
    </div>
  </div>
</body>

<footer>
  <?php include("includes/footer.php"); ?>
</footer>

</html>
