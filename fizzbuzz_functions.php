<?php
$number =
function fizzbuz($number){
  if (isset($number)) {
    $array = array_fill(1, $number, 'Fizz');
    foreach ($array as $key => $value) {
      $fizz = $key % 3;
      $buzz = $key % 5;

      if ($fizz == 0 && $buzz != 0) {
        echo "<p> Fizz(  $key  ):   $value  </p>" ;
      } elseif ( $buzz == 0 && $fizz != 0) {
        echo "<p> Buzz(  $key  ):   Buzz  </p>" ;
      } elseif ( $fizz == 0 && $buzz == 0) {
        echo "<p> Buzz(  $key  ):   FizzBuzz  </p>" ;
      } else {
        echo "<p> Number(  $key  ):   $key  </p>" ;
      }
    }
  } else {
    echo 'Write a Number: ';
  }
}
