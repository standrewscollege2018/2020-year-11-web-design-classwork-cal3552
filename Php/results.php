<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="search.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
  // this page will run a query and display the result(s)

  // we inculde the dbconnect.php code
  include("dbconnect.php");

  // grab the search content from the POST array, put into variable
  $search = $_POST['search'];

  // there are 3 steps to running a select query from the databases
  // 1. Set up the query in a varibale
  $results_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%'";

  // 2. Go to the database and run the query
  // we use mysqli_query(). This takes two parameters : dbconnect and query
  $result_qry = mysqli_query($dbconnect, $results_sql);

  // 3. We organise our results into an associative array
  // basically, we can use the colum headings from the database table
  // we use the mysqli_fetch_assoc() function
  $result_aa = mysqli_fetch_assoc($result_qry);


  // display information
  $firstname = $result_aa['firstname'];
  $lastname = $result_aa['lastname'];

 ?>
   <div class="">
    <p> <?php echo "$firstname $lastname";
      ?></p>

   </div>
