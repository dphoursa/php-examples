<?php

/**
 * 
 * Factorial digit sum
 *
 * Problem 20
 * 
 * n! means n x (n - 1) x ... x 3 x 2 x 1
 * 
 * For example, 10! = 10 x 9 x ... x 3 x 2 x 1 = 3628800,
 * and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
 * 
 * Find the sum of the digits in the number 100!
 * 
 */
class FactorialDigitSum
{
    /**
     * Calculate nth factorial
     *
     * @param int $number Number to find factorial for
     * @return int Factorial of a number
     */
    private function factorial($number)
    { 
        if ($number < 2) { 
            return 1; 
        } else { 
            return bcmul($number, $this->factorial($number-1)); 
        }
    }

    /**
     * Find the sum of the digits in the number n!
     *
     * @param int $number Number to find sum of digits in its factorial
     * @return int Sum of digits
     */
    public function compute($number)
    {
        $factorial = $this->factorial($number);
        return array_sum(str_split($factorial));
    }
}
