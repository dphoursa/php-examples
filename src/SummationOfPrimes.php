<?php

class SummationOfPrimes
{

    public function is_prime($number)
    {
        $limit = sqrt($number);
        for ($i = 2; $i <= $limit; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        
        return true;
    }
    
    public function find($limit)
    {
        $output = 0;
        for ($i = 2; $i < $limit; $i++) {
            if ($this->is_prime($i)) {
                $output += $i;
            }
        }
        
        return $output;
    }
}
