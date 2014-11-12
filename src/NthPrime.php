<?php

class NthPrime
{

    public static function is_prime($number)
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
            if (self::is_prime($number)) {
                $prime_count++;
                $prime = $number;
            }
            
        }

        return $prime;
    }
}
