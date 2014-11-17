<?php

class PandigitalPrime
{

    public function compute()
    {
        $number = 987654321;
        while (!NthPrime::is_prime($number)) {
            $numbers = str_split(strrev((string)$number));
            
            $numbers = $this->permutate($numbers);
            
            if($numbers == false) {
                $number = (int)strrev(substr($number, 0, -1));
                print $number . PHP_EOL;
                continue;
            }

            $number = (int)strrev(implode("", $numbers));
        }

        return $number;
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
