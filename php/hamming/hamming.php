<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    if (strlen($a) !== strlen($b)) {
      throw new \InvalidArgumentException("DNA strands must be of equal length.", 1);
    }
    //
    // YOUR CODE GOES HERE
    //
    if ($a === $b)
       return 0;

   $charArrayA = str_split($a);
   $charArrayB = str_split($b);
   $hammingDistance = 0;
   foreach ($charArrayA as $idx => $value) {
     if( $charArrayA[$idx] !== $charArrayB[$idx]) {
       $hammingDistance++;
     }
   }

   return $hammingDistance;
}
