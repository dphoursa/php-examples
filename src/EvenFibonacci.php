<?php

class EvenFibonacci
{

    public function sum($max)
    {
        $first_term = 1;
        $second_term = 2;
        $sum = 0;
        
        while ($second_term <= $max) {
            if ($second_term % 2 == 0) {
                $sum += $second_term;
            }
            
            $tmp = $first_term + $second_term;
            $first_term = $second_term;
            $second_term = $tmp;
        }
        
        return $sum;
    }
}
