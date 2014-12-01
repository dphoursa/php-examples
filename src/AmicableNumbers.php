<?php

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
