<?php

class ThousandDigitFibonacciNumber
{

    public function compute($digits)
    {
        $prev_val = 0;
        $term = 1;
        $fab = 1;

        while ($digits > strlen((string)$fab)) {
            $tmp = bcadd($prev_val, $fab);
            $prev_val = $fab;
            $fab = $tmp;
            $term++;
        }
        
        return $term;
    }
}
