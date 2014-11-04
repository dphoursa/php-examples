<?php

class LargeSum
{
    public function compute($numbers)
    {
        $sum = number_format(array_sum($numbers),0,'.','');
        return (int)(substr($sum, 0, 10));
    }
}
