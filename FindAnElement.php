<?php

function solusiton($a, $x) {
  $i = 0;
  while ($i < count($a)) {
    if($a[$i] === $x) {
      return true;
    }
    $i++;
  }
  return false;
}

solution(array('a','b','c','d'),'c');
