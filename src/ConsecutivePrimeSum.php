<?php

class ConsecutivePrimeSum
{
    
    private $storage;
    
    private function is_prime($num) {
        if (!isset($storage[$num])) {
                $storage[$num] = NthPrime::is_prime($num);
        }
            
        return $storage[$num];
    }

    public function compute($threshold)
    {
        $storage = new SplFixedArray($threshold);
        $sequence = [];
        
        for ($i = $threshold - 1 ; $i > 1; $i--) {
            if (!isset($storage[$i])) {
                $storage[$i] = NthPrime::is_prime($i);
            }
        }
    }
    
}
