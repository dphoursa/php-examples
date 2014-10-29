<?php

class PrimeFactors
{
    public function generate($number)
    {
        $output = [];
        
        for ($i = 2; $number >= $i; $i++) {
            while ($number % $i == 0) {
                $number = $number / $i;
                $output[] = $i;
            }
        }
        
        return $output;
    }

}
