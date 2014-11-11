<?php

class LexicographicPermutations
{
    /**
     * Returns array of numbers after specified number of permutations
     *
     * @param array $numbers Numbers to permutate
     * @param int $position Number of permutations to carry out on the array of numbers
     * @return array Returns an array of numbers after specified number of permutations
     * 
     */
    public function findPermutation($numbers, $position = 0)
    {
        if ($position == 1) {
            return $numbers;
        }
        
        for ($i = 1; $i < $position; $i++) {
            $numbers = $this->permutate($numbers);
        }

        return $numbers;
    }
    
    /**
     * Function returns a next permutation in a sequance of lexicographic permutations
     *
     * @param array $numbers Array of numbers to find the next permutation for
     * @return array|boolean Returns next permutation number array, or false if there are no higher permutations
     *
     */
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