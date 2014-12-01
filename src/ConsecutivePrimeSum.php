<?php

/**
 *
 * Consecutive prime sum
 * 
 * Problem 50
 * 
 * The prime 41, can be written as the sum of six consecutive primes:
 * 41 = 2 + 3 + 5 + 7 + 11 + 13
 * 
 * This is the longest sum of consecutive primes that adds to a prime below one-hundred.
 * 
 * The longest sum of consecutive primes below one-thousand that adds to a prime, contains 21 terms, and is equal to 953.
 * 
 * Which prime, below one-million, can be written as the sum of the most consecutive primes?
 * 
 */
class ConsecutivePrimeSum
{
    
    /** @type array */
    private $storage;
    
    /**
     * Check if the number is prime, to speed things up we use pre generated array of primes that is stored in storage
     *
     * @param int $num Number to check
     * @return boolean True if prime, false if not prime
     */
    private function is_prime($num) {
        if (!isset($this->storage[$num])) {
                $this->storage[$num] = NthPrime::is_prime($num);
        }
            
        return $this->storage[$num];
    }

    /**
     * Calculate longest consecutive prime sum for primes below threshold
     *
     * @param int $threshold All numbers should be below this value
     * @return int Highest sum of longest consecutive prime
     */
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

