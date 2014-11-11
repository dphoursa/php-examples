<?php

class DigitFactorials
{
    private $possible_numers = [
            0 => 1,
            1 => 1,
            2 => 2,
            3 => 6,
            4 => 24,
            5 => 120,
            6 => 720,
            7 => 5040,
            8 => 40320,
            9 => 362880
        ];

    public function isCuriousNumber($number)
    {
        $numbers = str_split($number);
        
        $sum = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            $sum += $this->possible_numers[$numbers[$i]];
        }
        
        return ($number == $sum);
    }

    public function getSumAllCuriousNumbers()
    {
        $sum = 0;
        
        //9999999 sum equals 2540160
        for ($i = 3; $i < 2540160; $i++) {
            if ($this->isCuriousNumber($i)) {
                $sum += $i;
            }
        }
        
        return $sum;
    }
}
