<?php

class HighlyDivisibleTriangularNumber
{

    public function find($thresh_hold_divisors)
    {
        $last_number = 1;
        
        for ($count = 2; $this->count_devisors($last_number) <= $thresh_hold_divisors; $count++) {
            $last_number += $count;
        }
        
        return $last_number;
    }
    
    private function count_devisors($number) {
        if ( $number == 1) {
            return 1;
        }
        
        $devisors = 2;

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $devisors += 2;
            }
        }
        
        return $devisors;
    }
}
