<?php

class DigitPowers
{
    public function calculate($power)
    {
        $storage = [
            0 => 0,
            1 => 1,
            2 => pow(2, $power),
            3 => pow(3, $power),
            4 => pow(4, $power),
            5 => pow(5, $power),
            6 => pow(6, $power),
            7 => pow(7, $power),
            8 => pow(8, $power),
            9 => pow(9, $power)
        ];
        
        $total_sum = 0;
        
        for ($i = 2; $i < 500000; $i++) {
            $sum = 0;
            $numbers = str_split($i);
            for ($j = 0; $j < count($numbers); $j++) {
                $digit = $numbers[$j];
                $sum += $storage[$digit];
            }
            if ($i == $sum) {
                $total_sum += $sum;
            }
        }
        
        return $total_sum;
    }
}
