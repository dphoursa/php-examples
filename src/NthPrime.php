<?php

class NthPrime
{
    /**
     * If a number n is not a prime, it can be factored into two factors a and b:
     * n = a*b
     * If both a and b were greater than the square root of n, a*b would be greater than n. So at least one of those factors must be less or equal to the square root of n, and to check if n is prime, we only need to test for factors less than or equal to the square root.
     */
    public function is_prime($number)
    {
        for ($i = 2; sqrt($number) >= $i; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        
        return true;
    }
    
    public function find($n)
    {
        $prime_count = 0;
        $prime = 1;
        
        $number = 1;
        while ($prime_count < $n) {
            $number++;
            if ($this->is_prime($number)) {
                $prime_count++;
                $prime = $number;
            }
            
        }

        return $prime;
    }
}
