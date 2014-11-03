<?php

class LargestProductInSeries
{

    public function find($string, $digits)
    {
        $result = 0;
        $length = strlen($string);
        
        for ($i = 0; $i < $length-$digits; $i++) {
            $tmp = $string[$i];
            for ($j = 1; $j < $digits; $j++) {
                $tmp *= $string[$i+$j];
            }

            if ($result < $tmp) {
                $result = $tmp;
            }
        }
        
        return $result;
    }
}
