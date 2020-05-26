<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      // we use echo to create HTMl (print)
      echo("<h1>Hello world</h1>");

      // variables always start with a $
      // needs to finish with a ;
      $name = "Mickey Mouse";
      // variables can be interted into a string, such as when we are echoing something
      echo("Hello $name");

      // if statements use () brackets for the condition and {} for the code to run
      if ($name == "Mickey Mouse") {
        echo("The name was Mickey Mouse");
      } else {
        echo("It isn't Mickey Mouse");
      }

      // do {} while () loop
      $counter = 1;
      do {
        echo("<p>$counter</p>");
        $counter += 1;
      } while ($counter <= 10);

     ?>
  </body>
</html>
