<?php

class PowerDigitSum
{

    public function sum($power)
    {
        $numbers = (string)(number_format(pow(2,$power), 0, ".", ""));
        $output = 0;
        
        for ($i = 0; $i < strlen($numbers); $i++) {
            $output += (int)$numbers[$i];
        }
        
        return $output;
    }
}
