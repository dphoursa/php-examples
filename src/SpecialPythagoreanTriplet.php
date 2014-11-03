<?php

class SpecialPythagoreanTriplet
{

    public function find($sum)
    {
        for ($a = 1; $a < $sum/3; $a++) {
            for ($b = $a+1; $b <= $sum/2; $b++) {
                $c = $sum - $b - $a;
                if (pow($a,2) + pow($b,2) == pow($c,2)) {
                    return (int)($a*$b*$c);
                }
            }
        }

        return 0;
    }
}
