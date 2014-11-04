<?php

$fizzbuzz = new FizzBuzz();

for ($i = 1; $i<=100; $i++) {
    printf("%s",$fizzbuzz->convert($i));
}

/**
* FizzBuzz class converts a given number into a string if criteria is met
*
*
* @package php-examples
* @author dphoursa <d.phoursa@outlook.com>
*/
class FizzBuzz
{
    /**
     * Change a number into a string if one of its divisors is 15 (5x3), 5 or 3
     * 
     * @param int $number
     * @return int|string
     */
    public function convert($number)
    {
        if ($number % 15 == 0) {
            return "FizzBuzz";
        } elseif ($number % 3 == 0) {
            return "Fizz";
        } elseif ($number % 5 == 0) {
            return "Buzz";
        }
        
        return $number;
    }
}
