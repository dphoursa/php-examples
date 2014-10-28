<?php

class Palindrome
{

    public function find($string)
    {
        $output = '';
        $strlen = strlen($string);
        
        /*
        //Solution 1
        for ($i = 0; $i < $strlen; $i++) {
            for ($j = $strlen-$i; $j >= 0; $j--) {
                $tmp = substr($string, $i, $j);
                if ($tmp == strrev($tmp) && strlen($output) < j) {
                    $output = $tmp;
                }
            }
        }
        */
        
        //Solution 2
        $palindrome = strrev($string);
        for ($i = 0; $i < $strlen; $i++) {
            for ($j = $strlen-$i; $j >= 0; $j--) {
                $tmp = substr($string, $i, $j);
                $tmp_rev = substr($palindrome, $strlen-($j+$i), $j);
                if ($tmp == $tmp_rev && strlen($output) < $j) {
                    $output = $tmp;
                }
            }
        }

        return $output;
    }
}
