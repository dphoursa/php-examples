<?php

/**
*
* Amicable numbers
*
* Problem 21
*
* Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
* If d(a) = b and d(b) = a, where a ­ b, then a and b are an amicable pair and each of a and b are called amicable numbers.
*
* For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 and 110; therefore d(220) = 284. The proper divisors of 284 are 1, 2, 4, 71 and 142; so d(284) = 220.
*
* Evaluate the sum of all the amicable numbers under 10000.
*
*/
class AmicableNumbers
{
    
    /**
     * Sum all prime devisors of a number
     * 
     * @param int $num
     * @return int Sum of all prime devisors
     */
    public static function sumProperDivisors($num)
    {
        if ($num < 2) {
            return 0;
        }
        
        $output = 1;
        
        for ($i = 2; $i < sqrt($num); $i++) {
            if ($num % $i == 0) {
                $output += ($num / $i) + $i;
            }
        }
        
        if (sqrt($num) == round(sqrt($num))) {
            $output += sqrt($num);
        }
        
        return $output;
    }

    /**
     * Find the Sum of all amicable numbers
     * 
     * @param in @threshold Sum all the amicable numbers upto this threshold
     * @return int Sum of all amicable numbers
     */
    public function sumAmicableNumbers($threshold)
    {
        $output = 0;
        
        for ($i = 1; $i < $threshold; $i++) {
            $tmp = self::sumProperDivisors($i);
            
            if ($tmp != $i && $tmp < $threshold) {
                if (self::sumProperDivisors($tmp) == $i) {
                    $output += $i;
                }
            }
        }
        
        return $output;
    }
}
