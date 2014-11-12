<?php

class PrimePermutations
{

    public function find()
    {
        $primes = [];
        for ($i = 1001; $i < 9999; $i++) {
            if (NthPrime::is_prime($i)) {
                $digits = str_split($i);
                sort($digits);
                $key = implode("", $digits);
                if (!isset($primes[$key])) {
                    $primes[$key] = [];
                }
                $primes[$key][] = $i;
            }
        }
        
        $output = [];
        foreach ($primes as $key => $prime_set) {
            if (count($prime_set) > 2) {
                for ($i = 0; $i < count($prime_set) - 2; $i++) {
                    for ($j = $i + 1; $j < count($prime_set) - 1; $j++) {
                        for ($k = $j + 1; $k < count($prime_set); $k++) {
                            if ($prime_set[$k] - $prime_set[$j] == $prime_set[$j] - $prime_set[$i]) {
                                $output[] = (string)$prime_set[$i] . (string)$prime_set[$j] . (string)$prime_set[$k];
                            }
                        }
                    }
                }
            }
        }
        
        // we ignore the first index as we already know it exists and we know there is only one other
        return $output[1];
    }
}
