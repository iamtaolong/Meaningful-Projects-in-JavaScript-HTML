<?php
include("includes/init.php");
$title = 'Interest palette';

// Default to form
$show_form = TRUE;

// Default to no feedback
$show_name_feedback = FALSE;
$show_stems_feedback = FALSE;

// Form default values
$first_name = '';
$last_name = '';
$app_year = 2020;
$app_season = '';
$major = '';
$credits = 0.0;
$GPA = 0.0;



// Was the form submitted? Was there a POST request?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // TODO: Assume the order is valid (uncomment line below).
  $is_order_valid = TRUE;


  // NAME
  $client_name = $_POST['name'];
  $client_name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
  $client_name = htmlspecialchars($client_name);
  if (empty($client_name)) {
    // No client name was given (it's empty).
    $show_confirmation = FALSE;
    echo "No Name Entry!";
    echo "<br>";
  }

  // EMAIL
  $client_email = $_POST['email'];
  $client_email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
  $client_email = htmlspecialchars($client_email);
  if (empty($client_email)) {
    // No client name was given (it's empty).
    $show_confirmation = FALSE;
    echo "No Email Entry!";
    echo "<br>";
  }

  $app_season = trim($_POST['app_season']);
  $app_season = htmlspecialchars($app_season);
  $app_season = filter_input(INPUT_POST, "app_season", FILTER_SANITIZE_STRING);
  if (empty($app_season)) {
    // No order name was given (it's empty).
    $is_order_valid = FALSE;
    $show_name_feedback = TRUE;
  }

  $major = trim($_POST['major']);
  $major = htmlspecialchars($major);
  $major = filter_input(INPUT_POST, "major", FILTER_SANITIZE_STRING);
  if (empty($major)) {
    // No order name was given (it's empty).
    $is_order_valid = FALSE;
    $show_name_feedback = TRUE;
  }

  // TODO: Check if name is not empty, if it is set the order invalid and show the name feedback.

  // Convert stems to integers so we can do math
  $app_year = $_POST['app_year'];
  $app_year = filter_input(INPUT_POST, 'app_year', FILTER_VALIDATE_INT);
  $app_year = htmlspecialchars($app_year);

  $credits = $_POST['credits'];
  $credits = filter_input(INPUT_POST, 'credits', FILTER_VALIDATE_FLOAT);
  $credits = htmlspecialchars($credits);
  if ($credits < 0) {
    $credits = NULL;
    echo "Invalid #credits. Automaticly set #credits as NULL";
    echo "<br>";
  }

  $GPA = $_POST['GPA'];
  $GPA = filter_input(INPUT_POST, 'GPA', FILTER_VALIDATE_FLOAT);
  $GPA = htmlspecialchars($GPA);
  if ($GPA < 0) {
    $GPA = NULL;
    echo "Invalid GPA. Automaticly set GPA as NULL";
    echo "<br>";
  }

  // If the order is valid (TRUE), then do not show form (FALSE).
  $show_form = !$is_order_valid;
  $show_name_feedback = TRUE;
  $show_stems_feedback = TRUE;
}
?>

<!DOCTYPE html>
<html lang="en">
<html>
<title>Transferrable</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" type="text/css" href="styles/site.css" media="all" />
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5 {
    font-family: "Raleway", "Trebuchet MS"
  }

  body {
    background-color: lightpink;
  }
</style>

<head>
  <?php include("includes/header.php"); ?>
  <?php $GLOBALS = "Interest" ?>
  <?php include("includes/nav.php"); ?>

</head>


<main>
  <div class="w3-panel w3-leftbar w3-sand  ">

    <h2 class="article-title">Interest Palette</h2>
    <p>Give us your info, We'll give you College info!</p>

    <?php
    if ($show_form) { ?>
      <!-- Order form -->
      <form id="interest" method="post" action="interest.php" novalidate>


        <div class="group_label_input">
          <label>Full Name:</label>
          <input type="text" name="name" />
        </div>

        <div class="group_label_input">
          <label>Email Address:</label>
          <input type="text" name="email" />
        </div>

        <div class="group_label_input">
          <label for="app_year"> Application Year(2020/2021/2022):</label>
          <input type="number" id="app_year" name="app_year" min="2021" value="<?php echo $app_year; ?>" />
        </div>


        <div class="group_label_input">
          <label for="app_season"> Application Season(Spring/Fall):</label>
          <input type="text" id="app_season" name="app_season" />
        </div>



        <div class="group_label_input">
          <label for="major">Major:</label>
          <input type="text" id="major" name="major" />
        </div>


        <div class="group_label_input">
          <label for="credits"># of College Credits have already earned:</label>
          <input type="number" id="credits" name="credits" min="0" value="<?php echo $credits; ?>" />
        </div>

        <div class="group_label_input">
          <label for="GPA">College GPA:</label>
          <input type="number" id="GPA" name="GPA" min="0" value="<?php echo $GPA; ?>" />
        </div>




        <div class="group_label_input">
          <span>
            <!-- empty element; used to align submit button --></span>
          <input type="submit" value="Start Matching～" />
        </div>

      </form>

      <?php } else {
      //<!-- Confirmation -->

      //  <!-- TODO: order confirmation -->
      if ($show_name_feedback = TRUE) { ?>
        <p class="form_feedback">

          Successfully submitted. Thank you for your submission.</p>

        <p class="form_feedback">
          Your profile are shown below. </p>

        <h2>Applicant Profile of <?php echo $client_name   ?>
        </h2>


        <ul>
          <li>Email address: <?php echo $client_email ?>
          <li>Application Year: <?php echo $app_year ?>
          <li>Application Season: <?php echo $app_season ?>
          <li>Major: <?php echo $major ?>
          <li>Credits: <?php echo $credits ?>
          <li>GPA: <?php echo $GPA ?>
        </ul>
        <h2> Interest Matching......</h2>
      <?php  }
      if ($GPA > 3.0) {
        echo " We found a great match for you due to your strong academic performance! Cornell University! We have already sent your email address to Cornell's mailling list!";
      } else if ($GPA > 2.0) {
        echo "We found you a good match! Great grades will provide you with a better education atmosphere. UNC Chapel Hill! We have already added you to UNC's mailling list!";
      } else if ($GPA > 1.0) {
        echo "We found a good match! NC State University! Life & Work Balance! We have already added you to NCSU's mailling list!";
      } else {
        echo "No match found. Please work hard! Fighting!";
      }

      ?>

      <p><a href="interest.php">New Profile</a></p>
    <?php  } ?>


</main>

</body>
<footer>
  <?php $GLOBALS = " " ?>
</footer>
