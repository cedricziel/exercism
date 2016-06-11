<?php

function raindrops(int $number) : string
{
  $factors = [];
  $primes = [1, 2, 3, 5, 7, 11, 13];

  foreach (array_reverse($primes) as $prime) {
    if (0 === ($number % $prime)) {
      $factors[] = $prime;
    }
  }

  $output = '';
  if (in_array(3, $factors)) {
    $output .= "Pling";
  }

  if (in_array(5, $factors)) {
    $output .= "Plang";
  }

  if (in_array(7, $factors)) {
    $output .= "Plong";
  }

  if ('' === $output) {
    $output .= (string)$number;
  }

  return $output;
}
