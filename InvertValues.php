<?php

function invert(array $a): array {
  $items = [];
  foreach ($a as $number) {
    $number *= -1;
    $items[] = $number;
  }
  return $items;
}

$mix = [1,-2,3,-4,5,-7];
invert($mix);
