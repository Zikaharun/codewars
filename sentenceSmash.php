<?php
  
function smash(array $words): string {
  
  $string = '';
  
  $seperator = ' ';
  
  foreach($words as $index => $value) {
    $string .= $value;
    
    if($index < count($words) - 1) {
      $string .= $seperator;
    }
  }
  
  return $string; // Your code here
}

$array = ['hello', 'world'];
smash($array);
