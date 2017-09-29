<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

include_once( 'fizzbuzz_functions.php' );

if (isset($_POST['number'])) {
  $number = $_POST['number'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <form action="FizzBuzz.php" method="POST">
      <input type="number" name="number" value="">
      <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($number)) {
      fizzbuz($number);
    }
    ?>


  </body>
</html>
