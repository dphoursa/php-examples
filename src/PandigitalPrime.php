<?php

class PandigitalPrime
{

    public function compute()
    {
        $number = 123456789;
        $prime = 0;
        while (true) {
            if(NthPrime::is_prime($number)) {
                $prime = $number;
            }
            $numbers = str_split((string)$number);
            
            $numbers = LexicographicPermutations::permutate($numbers);
            
            if($numbers == false) {
                if ($prime) {
                    break;
                }
                
                $number = (int)substr(strrev($number), 0, -1);
                continue;
            }

            $number = (int)implode("", $numbers);
        }

        return $prime;
    }
    
    private function permutate($numbers)
    {
        //1. Find the largest index k such that a[k] < a[k + 1]. If no such index exists, the permutation is the last permutation.
        $i = count($numbers) - 1;
        while (isset($numbers[$i - 1]) && $numbers[$i - 1] >= $numbers[$i]) {
            $i--;
        }
        
        if ($i == 0) {
            return false;
        }

        //2. Find the largest index l greater than k such that a[k] < a[l].
        $j = count($numbers) - 1;
        while ($numbers[$j] <= $numbers[$i - 1]) {
            $j--;
        }
        
        //3. Swap the value of a[k] with that of a[l].
        $tmp = $numbers[$i - 1];
        $numbers[$i - 1] = $numbers[$j];
        $numbers[$j] = $tmp;

        //4. Reverse the sequence from a[k + 1] up to and including the final element a[n].
        return array_merge(array_slice($numbers, 0, $i), array_reverse(array_slice($numbers, $i), 1));
    }
}
