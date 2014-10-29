<?php

class LargestPalindromeProduct
{
    
    public function find()
    {
        $output = 0;
        
        for ($i = 999; $i > 99; $i--) {
            for ($j = $i; $j > 99; $j--) {
                $tmp =  $i * $j;
                if (strrev((string)$tmp) == (string)$tmp && $output < $tmp) {
                    $output = $tmp;
                }
            }
        }
        
        return $output;
    }
}
