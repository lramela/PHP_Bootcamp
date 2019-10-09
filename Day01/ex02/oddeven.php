#!/usr/bin/php
<?php
 function oddeven($number)
 {
   $number = trim ($number);

    if($number % 2 == 0)
        echo "The number $number is even";
    else
         echo "The number $number is odd";
 }
  echo "Enter a number";
  $input = oddeven(fgets(STDIN));
?>