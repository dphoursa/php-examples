<?php

class SmallestMultiple
{

    public function find($min, $max)
    {
        $output = $max;
        
        while (true) {
            for ($i = $max; $min <= $i; $i--) {
                if ($output % $i != 0) {
                    $output++;
                    break;
                }
            }

            if($i == 0) {
                break;
            }
        }
        
        return $output;
    }
}
