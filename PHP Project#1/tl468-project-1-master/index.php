<?php include('includes/init.php'); ?>
<!DOCTYPE html>
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
</style>

<head>
  <?php $GLOBALS = "Index" ?>
  <?php include("includes/header.php"); ?>
</head>


<body>
  <div class="wrapper">
    <div class="header">
      <nav>
        <div class="w3-panel w3-leftbar w3-sand  w3-serif">


          <!-- Source: https://www.ncsasports.org/naia-eligibility-center/transfer-rules -->
          <img src="images/collegetransfer.jpg" alt="cr. NCSA" style="width:100%"><br>
          Source: <cite><a href="https://www.ncsasports.org/naia-eligibility-center/transfer-rules">College Transfer</a></cite>


        </div>
        <?php include("includes/nav.php"); ?>


        <div class="w3-card">
          <div class="w3-cell-row">

            <div class="w3-container w3-white w3-cell">

              <br>
              <h2><b>Bulletin</b></h2>

              <p> - <b>[Today]</b> Cornell University Fall Transfer Deadline is approaching! March.15th! Seek help today!</p>
              <p> - <b>[5 days ago]</b> UNC Chapel Hill extened its transfer application deadline to Monday, Feburary 17th at 11.59 p.m. </p>
              <p> - <b>[15 days ago]</b> Cornell University sent out an anouncement about the new CoV. </p>
              <a href="bulletin.php"> READ MORE>></a>
              <br>

            </div>

            <div class="w3-container w3-white w3-cell">

              <br>
              <h2><b>Database</b></h2>

              <!-- Source: https://developers.google.com/custom-search/docs/tutorial/implementingsearchbox -->

              <br>
              Source: <cite><a href="https://developers.google.com/custom-search/docs/tutorial/implementingsearchbox">Google Search Box Instruction</a></cite>
              <?php # Using this piece of codes to establish a google searching bar inside HTML. Only aiming at adding more features to the College Database site, as shown in my Refined Site DesignJourney.
              ?>
              <p> Search by Colleges: </p>
              <script async src="https://cse.google.com/cse.js?cx=000888210889775888983:pqb3ch1ewhg"></script>
              <div class="gcse-searchbox-only" data-resultsUrl="https://googlecustomsearch.appspot.com/elementv2/two-page_results_elements_v2.html?query=test"></div>


              <br>
              <h2><b> Resources</b></h2>

              <p>Most recent: (02/11) Workshop 101: How to Start a Transfer Application</p>

              <a href="resources.php"> READ MORE>></a>
              <br>


              <h2><b> Assistance</b></h2>
              <p>Every year, Transferrable assisted about 30 students in their life-changing application. Real experienced.
                International Based.</p>
              <a href="assistance.php"> READ MORE>></a>
              <br>
            </div>

          </div>
          <br>
          <br>
          <br>
        </div>

</body>

</div>
<footer>

  <?php include('includes/footer.php'); ?>
  <?php $GLOBALS = " " ?>
</footer>

</html>
