<?php

public function sum_mix($a) {
  // here code
  $items = [];
  foreach ($a as $value) {
    $item = intval($value);
    $items[] = $item;
  }

  $sum = array_sum($items);
  return $sum; 
}

$items = array(1,2,3,'4','5');
sum_mix($items);
