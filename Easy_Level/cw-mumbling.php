/*

This time no story, no theory. The examples below show you how to write function accum:

Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"

The parameter of accum is a string which includes only letters from a..z and A..Z.

*/

<?php

function accum($s)
{
  $output = '';
  for ($i = 0; $i < strlen($s); $i++) {
    $char = strtolower($s[$i]);
    $output .= ucfirst(str_repeat($char, $i + 1));
    if ($i < strlen($s) - 1) {
      $output .= '-';
    }
  }
  return $output;
}

echo accum("Avnoor");
