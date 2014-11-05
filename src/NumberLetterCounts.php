<?php

class NumberLetterCounts
{
    private $num_weight = [
        0 => 0,
        1 => 3,
        2 => 3,
        3 => 5,
        4 => 4,
        5 => 4,
        6 => 3,
        7 => 5,
        8 => 5,
        9 => 4,
        10 => 3,
        11 => 6,
        12 => 6,
        13 => 8,
        14 => 8,
        15 => 7,
        16 => 7,
        17 => 9,
        18 => 8,
        19 => 8,
        20 => 6,
        30 => 6,
        40 => 5,
        50 => 5,
        60 => 5,
        70 => 7,
        80 => 6,
        90 => 6,
    ];

    public function count($number)
    {
        $output = 0;
        
        if ($number > 999) {
            $tmp = $number % 1000;
            $output += $this->num_weight[($number - $tmp) / 1000] + 8;
            $number = $tmp;
            if ($number > 0) {
                $output += 3;
            }
        }
        
        if ($number > 99) {
            $tmp = $number % 100;
            $output += $this->num_weight[($number - $tmp) / 100] + 7;
            $number = $tmp;
            if ($number > 0) {
                $output += 3;
            }
        }
        
        if ($number > 19) {
            $tmp = $number % 10;
            $output += $this->num_weight[$number - $tmp];
            $number = $tmp;
        }

        return $output + $this->num_weight[$number];
    }

    public function sum($min, $max)
    {
        $sum = 0;
        for ($i = $min; $i <=$max; $i++) {
            $sum += $this->count($i);
        }
        
        return $sum;
    }
}
