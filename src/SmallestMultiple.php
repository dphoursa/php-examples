<?php

class SmallestMultiple
{
    public function find_prime_numbers($number)
    {
        $output = [];
        
        for ($i = 2; $number >= $i; $i++) {
            while ($number % $i == 0) {
                $number = $number / $i;
                $output[] = $i;
            }
        }
        
        return $output;
    }
    
    public function find($number)
    {
        $factor_count = array();
        
        for ($i = $number; $i > 1; $i--) {
            $primes = array_count_values($this->find_prime_numbers($i));
            foreach ($primes as $prime => $count) {
                if (!array_key_exists($prime, $factor_count) || $factor_count[$prime] < $count) {
                    $factor_count[$prime] = $count;
                }
            }
        }
        
        $output = 1;
        foreach ($factor_count as $prime => $count) {
            $output *= pow($prime, $count);
        }
        
        return $output;
    }
}
