<?php



function toRna($dna = '') {

  $conversionMatrix = [
    'C' => 'G',
    'G' => 'C',
    'T' => 'A',
    'A' => 'U',
    'U' => 'A',
  ];

  $chars = str_split($dna);
  $rna = '';
  foreach ($chars as $key => $value) {
    if (array_key_exists($value, $conversionMatrix)) {
      $rna .= $conversionMatrix[$value];
    } else {
      $rna .= $value;
    }
  }

  return $rna;
}
