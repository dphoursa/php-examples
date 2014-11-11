<?php

class DoubleBasePalindromes
{

    public function isPalindromic($number)
    {
        $binary = decbin($number);
        return ($binary == strrev($binary) && $number == strrev($number));
    }

    public function sumAll($threshold)
    {
        $sum = 0;
        for ($i = 1; $i < $threshold; $i++) {
            if ($this->isPalindromic($i)) {
                $sum +=$i;
            }
        }
        
        return $sum;
    }
}
