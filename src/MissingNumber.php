<?php

class MissingNumber
{
    public function find($numbers)
    {
        $this->guardAgainstInvalidInput($numbers);
        
        $count = 0;
        $total = 0;
        $expectedTotal = 0;
        
        foreach ($numbers as $number) {
            $count++;
            $total += $number;
            $expectedTotal += $count;
        }
        
        $expectedTotal += $count+1;
        
        return $expectedTotal - $total;
    }
    
    private function guardAgainstInvalidInput($numbers) {
        if (! (is_array($numbers) && count($numbers))) {
            throw new \InvalidArgumentException('Only non empty arrays allowed as input!');
        }
    }
}
