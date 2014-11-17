<?php

class ConsecutivePrimeSum
{
    
    private $storage;
    
    private function is_prime($num) {
        if (!isset($this->storage[$num])) {
                $this->storage[$num] = NthPrime::is_prime($num);
        }
            
        return $this->storage[$num];
    }

    public function compute($threshold)
    {
        $this->storage = array_fill(2, $threshold - 3, 1);
        $primes = [];
        $count = count($this->storage);
        $i = 2;
        
        while ($i < $threshold) {
            $primes[] = $i;
            for ($j = 2; ($j * $i) < ($threshold); $j++) {
                $tmp = $j * $i;
                if (isset($this->storage[$tmp])) {
                    unset($this->storage[$tmp]);
                }
            }
            
            $i++;
            while ($i < $threshold && !isset($this->storage[$i])) {
                $i++;
            }
        }
        
        $sum = 0;
        $sequence = [];
        
        for ($i = 0; $i < count($primes) - 1; $i++) {
            $tmp_sum = 0;
            $tmp_sequence = [];
            for ($j = $i; $tmp_sum < $threshold; $j++) {
                $tmp_sum += $primes[$j];
                $tmp_sequence[] = $primes[$j];
            }
            
            while (count($tmp_sequence) && !isset($this->storage[$tmp_sum])) {
                $val = array_pop($tmp_sequence);
                $tmp_sum -= $val;
            }
                
            if (isset($this->storage[$tmp_sum]) && count($tmp_sequence) >= count($sequence)) {
                $sum = $tmp_sum;
                $sequence = $tmp_sequence;
            }
        }
        
        return $sum;
    }
}

