<?php

/**
 * MissingNumber class finds a missing number in a sequence of 1 to N
 * 
 * 
 * @package    php-examples
 * @author     dphoursa <d.phoursa@outlook.com>
 */
class MissingNumber
{
    /**
     * Find a missing number in a 1 to N sequence
     * 
     * @param array $numbers
     * @return int
     */
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
    
    /**
     * Check if numbers supplied are stored in an array 
     * 
     * @param array $numbers
     * @throws \InvalidArgumentException
     */
    private function guardAgainstInvalidInput($numbers) {
        if (! (is_array($numbers) && count($numbers))) {
            throw new \InvalidArgumentException('Only non empty arrays allowed as input!');
        }
    }
}
