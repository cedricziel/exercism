<?php

function isIsogram(string $word) : bool {
  $allowedCharacters = array_merge(range('a', 'z'), range('A', 'Z'));
  $runes = str_split($word);
  $tRunes = [];

  foreach($runes as $rune) {

    if (!in_array($rune, $allowedCharacters)) {
      continue;
    }

    $lowerTRunes = array_map(function($rune) {
        return strtolower($rune);
    }, $tRunes);
    $upperTRunes = array_map(function($rune) {
        return strtoupper($rune);
    }, $tRunes);
    
    if (in_array($rune, $upperTRunes) || in_array($rune, $lowerTRunes)) {
      return false;
    }

    $tRunes[] = $rune;
  }

  return true;
}
