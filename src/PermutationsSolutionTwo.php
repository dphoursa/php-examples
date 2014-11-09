<?php

class Permutations
{
    public static function permutation($str, $prefix = "", $count = 0) {
	$n = strlen($str);
	if ($n == 0) {
	    print $prefix.PHP_EOL;
	} else {
	    for ($i = 0; $i < $n; $i++) {
		self::permutation(substr($str, 0, $i) . substr($str, $i+1, $n), $prefix.$str[$i], ++$count);
	    }
	}
    }
}

$str = "ship";
Permutations::permutation($str); 



