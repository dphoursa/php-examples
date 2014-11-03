<?php

class HighlyDivisibleTriangularNumber
{

    public function find($max_divisors)
    {
        $last_number = 0;
        
        for ($count = 0; $this->count_devisors($last_number) < $max_divisors; $count++) {
            $last_number += $count;
        }
        
        return $last_number;
    }
    
    private function count_devisors($number) {
        $devisors = 0;

        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                $devisors++;
            }
        }
        
        return $devisors;
    }
}
