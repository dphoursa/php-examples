<?php

class Permutations
{
     // function to generate and print all N! permutations of $str. (N = strlen($str)).
     public static function permute($str,$i,$n)
     {
          if ($i == $n) {
               print "$str" . PHP_EOL;
          } else {
               for ($j = $i; $j < $n; $j++) {
                    self::swap($str,$i,$j);
                    self::permute($str, $i+1, $n);
                    self::swap($str,$i,$j); // backtrack.
               }
          }
     }
     
     // function to swap the char at pos $i and $j of $str.
     private static function swap(&$str,$i,$j)
     {
          $temp = $str[$i];
          $str[$i] = $str[$j];
          $str[$j] = $temp;
     }  
}
     
$str = "ship";
Permutations::permute($str,0,strlen($str)); // call the function.
