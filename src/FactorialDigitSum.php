<?php

class FactorialDigitSum
{
    private function factorial($number)
    { 
        if ($number < 2) { 
            return 1; 
        } else { 
            return bcmul($number, $this->factorial($number-1)); 
        }
    }

    public function compute($number)
    {
        $factorial = $this->factorial($number);
        return array_sum(str_split($factorial));
    }
}
