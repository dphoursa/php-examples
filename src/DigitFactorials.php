<?php

/**
 *
 * Digit factorials
 * 
 * Problem 34
 * 
 * 145 is a curious number, as 1! + 4! + 5! = 1 + 24 + 120 = 145.
 * 
 * Find the sum of all numbers which are equal to the sum of the factorial of their digits.
 * 
 * Note: as 1! = 1 and 2! = 2 are not sums they are not included.
 *
 */
class DigitFactorials
{
    /** @type array Initialise array of all factorials between 0 and 9 */
    private $possible_numers = [
            0 => 1,
            1 => 1,
            2 => 2,
            3 => 6,
            4 => 24,
            5 => 120,
            6 => 720,
            7 => 5040,
            8 => 40320,
            9 => 362880
        ];

    /**
     * Check if the number is Curious Number
     *
     * @param int $number number to check
     * @return boolean True if Curious number and False if not
     */
    public function isCuriousNumber($number)
    {
        $numbers = str_split($number);
        
        $sum = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            $sum += $this->possible_numers[$numbers[$i]];
        }
        
        return ($number == $sum);
    }

    /**
     * Sum all Curious numbers
     *
     * @return int Sum
     */
    public function getSumAllCuriousNumbers()
    {
        $sum = 0;
        
        //9999999 sum equals 2540160
        for ($i = 3; $i < 2540160; $i++) {
            if ($this->isCuriousNumber($i)) {
                $sum += $i;
            }
        }
        
        return $sum;
    }
}
