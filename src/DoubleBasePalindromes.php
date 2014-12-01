<?php

/**
 *
 * Double-base palindromes
 *
 * Problem 36
 * 
 * The decimal number, 585 (denary) = 1001001001 (binary), is palindromic in both bases.
 * 
 * Find the sum of all numbers, less than one million, which are palindromic in base 10 and base 2.
 * 
 * (Please note that the palindromic number, in either base, may not include leading zeros.)
 * 
 */
class DoubleBasePalindromes
{

    /**
     * Check if number is Palindromic in binary state
     *
     * @param int $number
     * @return boolean True if palindromic and false if not
     */
    public function isPalindromic($number)
    {
        $binary = decbin($number);
        return ($binary == strrev($binary) && $number == strrev($number));
    }

    /**
     * Add up all the palindromic numbers that are below the threshold
     *
     * @param int $threshold Numbers to check under this limit
     * @return int Sum
     */
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
