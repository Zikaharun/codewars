<?php

function countPositivesSumNegatives($input) {
  $positiveNumbers = [];
  $negativeNumbers = [];
  
  foreach ($input as $number) {
    
    if ($number > 0) {
      $positiveNumbers[] = $number;
    } else {
      $negativeNumbers[] = $number;
    }
    
    $number = 0;
  }

countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]);
