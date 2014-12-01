<?php

/**
 *
 * Largest palindrome product
 *
 * Problem 4
 *
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 x 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 * 
 */
class LargestPalindromeProduct
{
    /**
     * Finds the largest palindrome made from the product of two 3-digit numbers
     *
     * @return int
     */
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
