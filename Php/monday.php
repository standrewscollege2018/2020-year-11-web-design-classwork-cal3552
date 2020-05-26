<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // echo writes content to the html
      // finish the line by putting ;
      echo "<h1>Hello world</h1>";

      // all variables start with a $
      $name = "";
      echo "Hello $name"; 
     ?>
     <form action="hello.php" method="post">
       <input type="text" name="firstname" placeholder="Enter your name">
       <button type="sumbit" name="button">Click me!</button>
     </form>
  </body>
</html>
