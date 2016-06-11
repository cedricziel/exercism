<?php

function isPangram($str = '') {
  if (strlen($str) <= 26) {
    return false;
  }

  $charsFromString = str_split(strtolower($str));
  $charsInAlphabet = range('a', 'z');
  foreach ($charsInAlphabet as $key => $value) {
    if (!in_array($value, $charsFromString)){
      return false;
    }
  }

  return true;
}
