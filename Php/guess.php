<?php
  if (!isset($_POST['number'])) {
    header("Location: http://www.google.com");
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="guessnumber.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="correctornot">
      <?php
      $number = $_POST['number'];

      if ($number == "36") {
        header("Location: guessnumber.php?reply=correct");
      } else if ($number <35) {
        header("Location: guessnumber.php?reply=toolow");
      } else {
        header("Location: guessnumber.php?reply=toohigh");
      }

     ?>
    </div>


  </body>
</html>
