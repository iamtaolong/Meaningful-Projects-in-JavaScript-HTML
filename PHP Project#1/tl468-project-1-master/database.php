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
  <?php include("includes/header.php"); ?>
  <?php $GLOBALS = "Database" ?>
  <?php include("includes/nav.php"); ?>
</head>

</div>
<title>College Database</title>
</head>

<body>
  <div class="w3-panel w3-leftbar w3-sand  w3-serif">

    <h2><b>College Database</b></h2>
    <h4> College Information Database. Consists of ranking, acceptance rate, application deadlines.</h4>
    <!-- Source: https://www.sanclementevb.com/college-info -->
    <img src="images/collegedatabase.jpg" alt="collegedata" class="w3-left w3-margin-right" style="width:300px">
    Source: <cite><a href="https://www.sanclementevb.com/college-info">College Info</a></cite>
    <hr>


    <!-- Source: https://developers.google.com/custom-search/docs/tutorial/implementingsearchbox -->

    <br>
    Source: <cite><a href="https://developers.google.com/custom-search/docs/tutorial/implementingsearchbox">Google Search Box Instruction</a></cite>
    <?php # Using this piece of codes to establish a google searching bar inside HTML. Only aiming at adding more features to the College Database site, as shown in my Refined Site DesignJourney.
    ?>
    <h5> Search by Colleges: </h5>
    <script async src="https://cse.google.com/cse.js?cx=000888210889775888983:pqb3ch1ewhg"></script>
    <div class="gcse-searchbox-only" data-resultsUrl="https://googlecustomsearch.appspot.com/elementv2/two-page_results_elements_v2.html?query=test"></div>

    <!-- same -->
    <h5> Search by Deadlines: </h5>
    <script async src="https://cse.google.com/cse.js?cx=000888210889775888983:pqb3ch1ewhg"></script>
    <div class="gcse-searchbox-only" data-resultsUrl="https://googlecustomsearch.appspot.com/elementv2/two-page_results_elements_v2.html?query=test"></div>

    <!-- same -->
    <h5> Search by Majors: </h5>
    <script async src="https://cse.google.com/cse.js?cx=000888210889775888983:pqb3ch1ewhg"></script>
    <div class="gcse-searchbox-only" data-resultsUrl="https://googlecustomsearch.appspot.com/elementv2/two-page_results_elements_v2.html?query=test"></div>


    <ul>
      <p>
        <li><a class="nav-link external" href="https://www.usnews.com/best-colleges">College Ranking</a></li>
      </p>
      <p>
        <li><a class="nav-link external" href="https://www.usnews.com/best-colleges/rankings/most-transfers">Transfer
            student number</a></li>
      </p>
      <p>
        <li><a class="nav-link external" href="https://www.collegetransitions.com/transfer-admission-rates">Transfer rate -
            General</a></li>
      </p>
      <p>
        <li><a class="nav-link external" href="http://transferweb.com/stats/transfer-acceptance-rates/#.XjsrxBP0nRY">Transfer rate - Top50</a></li>
      </p>
    </ul>

</body>


<footer>
  <?php include('includes/footer.php'); ?>
  <?php $GLOBALS = " " ?>

</footer>

</html>
