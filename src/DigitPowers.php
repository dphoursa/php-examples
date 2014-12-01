<?php

/**
 *
 * Digit fifth powers
 * 
 * Problem 30
 * 
 * Surprisingly there are only three numbers that can be written as the sum of fourth powers of their digits:
 * 
 *     1634 = 1^4 + 6^4 + 3^4 + 4^4
 *     8208 = 8^4 + 2^4 + 0^4 + 8^4
 *     9474 = 9^4 + 4^4 + 7^4 + 4^4
 * 
 * As 1 = 1^4 is not a sum it is not included.
 * 
 * The sum of these numbers is 1634 + 8208 + 9474 = 19316.
 * 
 * Find the sum of all the numbers that can be written as the sum of fifth powers of their digits.
 *
 */
class DigitPowers
{
    /**
     * Calculate the sum of all the numbers that can be written as the sum of nth powers of their digits
     *
     * @param int $power Represents nth power
     * @return int Sum
     */
    public function calculate($power)
    {
        // create array for all powers of individual digits, this will speed up the loop
        $storage = [
            0 => 0,
            1 => 1,
            2 => pow(2, $power),
            3 => pow(3, $power),
            4 => pow(4, $power),
            5 => pow(5, $power),
            6 => pow(6, $power),
            7 => pow(7, $power),
            8 => pow(8, $power),
            9 => pow(9, $power)
        ];
        
        $total_sum = 0;
        
        for ($i = 2; $i < 500000; $i++) {
            $sum = 0;
            $numbers = str_split($i);
            for ($j = 0; $j < count($numbers); $j++) {
                $digit = $numbers[$j];
                $sum += $storage[$digit];
            }
            if ($i == $sum) {
                $total_sum += $sum;
            }
        }
        
        return $total_sum;
    }
}
