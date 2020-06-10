<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="guessnumber.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="guess">
      <?php
        echo "Guess a number between 1 and 100";
        $number = "36";
       ?>

         <form action="guess.php" method="post">
           <input required type="number" name="number" value="Guess a number">
           <button type="Guess" name="button">Guess</button>
         </form>
         <?php
         // check if $_GET['reply'] is set
          if(isset($_GET['reply'])) {
            if($_GET['reply'] == "correct") {
              echo "<h1> You guessed the number! </h1>";
            }
            else if($_GET['reply'] == "toolow") {
              echo "<h1> Too high, guess again! </h1>";
          }
            else {
              echo "<h1 >Too low, guess again! </h1>";
          }
          }
         ?>
     </div>

  </body>
</html>
