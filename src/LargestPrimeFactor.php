<?php

class LargestPrimeFactor
{
    public function compute($number)
    {
        $largest = 0;
        
        for ($i = 2; $number >= $i; $i++) {
            while ($number % $i == 0) {
                $number = $number / $i;
                if ($largest < $i) {
                    $largest = $i;
                }
            }
        }
        
        return $largest;
    }
}
