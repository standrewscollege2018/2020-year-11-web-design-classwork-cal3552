<?php
  // checking to see if $_POST has content


  // isset() checks to see if what is in the brackets has been set
    if (!isset($_POST['firstname'])) {
      header("Location: http://www.google.com");
    }

  // to redirect a browser to another page, use header()





 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // get the information out of the $_POST $array
      $firstname = $_POST['firstname'];

      if ($firstname == "Maia") {
      //  code to run if condition is true
       echo "Congratulations! You guessed the name right!";
     }else if ($firstname == "") {
       echo "Please enter a first name!"
     } else {
         //code to run if condition is false
        echo "Sorry, that's wrong";
      }
     ?>
  </body>
</html>
