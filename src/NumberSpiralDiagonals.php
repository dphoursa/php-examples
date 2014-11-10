<?php

class NumberSpiralDiagonals
{

    public function calculate($spiral_size)
    {
        $diagonals_sum = 1;
        $sum = 1;
        
        for ($i = 3; $i <= $spiral_size; $i += 2) {
            for ($j = 0; $j < 4; $j++) {
                $sum += ($i - 1);
                $diagonals_sum += $sum;
            }
        }

        return $diagonals_sum;
    }
}
