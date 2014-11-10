<?php

class SelfPowers
{

    public function calculate($sequence_length, $number_of_digits)
    {
        $sum = 0;
        for ($i = 1; $i <= $sequence_length; $i++) {
            $sum = bcadd($sum, bcpow($i, $i));
        }

        return substr((string)$sum, -1 * $number_of_digits);
    }
}
