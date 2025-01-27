<?php

function countSheep($arr) {
  $items = [];
  foreach ($arr as $value) {
    if($value == true) {
      $items[] = $value;
    }
  }
  
  $item = count($items);
  return $item;
}

var_dump(countSheep([true, true, true, false, true, true, true, true, true, false, true, false, true, false, false, true, true, true, true, true, false, false, true, true]));
