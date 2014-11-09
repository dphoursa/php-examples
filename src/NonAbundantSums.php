<?php

class NonAbundantSums
{

    public function compute()
    {
        $sum = 0;
        for ($i = 1; $i <= 28123; $i++) {
            $sum += $i;
        }
        
        $abundant_numbers = [];
        $seen_numbers = [];
        
        for ($i = 1; $i <= 28123; $i++) {
            if ($i < AmicableNumbers::sumProperDivisors($i)) {
                $abundant_numbers[] = $i;
                
                foreach ($abundant_numbers as $abundant_number) {
                    $tmp = $abundant_number + $i;
                    if ($tmp <= 28123 && !isset($seen_numbers[$tmp])) {
                        $sum -= $tmp;
                        $seen_numbers[$tmp] = 1;
                    }
                }
            }
        }
        
        return $sum;
    }
}
