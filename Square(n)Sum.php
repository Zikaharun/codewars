<?php

function square_sum(array $numbers) : int {
  $items = [];
  
  foreach ($numbers as $number ) {
    $number *= $number;
    $items[] = $number; 
  }
  
  $square = array_sum($items);
  return $square; // Write your code here...
}

$square = [1,4,6,7,8];

square_sum($square);
