<?php

class LargestPrimeFactor
{
    public function compute($number)
    {
        $largest = 0;
        
        for ($i = 2; $number >= $i; $i++) {
            if ($number % $i == 0 && $largest < $i) {
                $largest = $i;
            }
            while ($number % $i == 0) {
                $number = $number / $i;
            }
        }
        
        return $largest;
    }
}
