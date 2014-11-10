<?php

class LexicographicPermutations
{
    public function findPermutation($numbers, $position)
    {
        if ($position == 1) {
            return $numbers;
        }
        
        for ($i = 1; $i < $position; $i++) {
            $numbers = $this->permutate($numbers);
        }

        return $numbers;
    }
    
    private function permutate($numbers)
    {
        //1. Find largest index i such that array[i - 1] < array[i].
        $i = count($numbers) - 1;
        while (isset($numbers[$i - 1]) && $numbers[$i - 1] >= $numbers[$i]) {
            $i--;
        }

        //2. Find largest index j such that j ³ i and array[j] > array[i - 1].
        $j = count($numbers) - 1;
        while ($numbers[$j] <= $numbers[$i - 1]) {
            $j--;
        }
        
        //3. Swap array[j] and array[i - 1].
        $tmp = $numbers[$i - 1];
        $numbers[$i - 1] = $numbers[$j];
        $numbers[$j] = $tmp;

        //4. Reverse the suffix starting at array[i].
        return array_merge(array_slice($numbers, 0, $i), array_reverse(array_slice($numbers, $i), 1));
    }
}