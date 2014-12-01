<?php

/**
 *
 * Largest prime factor
 *
 * Problem 3
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 *
 */
class LargestPrimeFactor
{
    
    /**
     * Find largest prime factore of a number
     *
     * @param int $number Number to find a largest prime for
     * @return int Largest prime
     */
    public function compute($number)
    {
        $largest = 0;
        
        for ($i = 2; $number >= $i; $i++) {
            if ($number % $i == 0 && $largest < $i) {
                $largest = $i;
            }
            while ($number % $i == 0) {
                $number = $number / $i;
            }
        }
        
        return $largest;
    }
}
