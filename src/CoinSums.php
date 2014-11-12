<?php

class CoinSums
{
    public function count()
    {
        $target = 200;
        $coinSizes = [1, 2, 5, 10, 20, 50, 100, 200];
        
        $ways = array_fill(1, 200, 0);
        $ways[0] = 1;
         
        for ($i = 0; $i < count($coinSizes); $i++) {
            for ($j = $coinSizes[$i]; $j <= $target; $j++) {
                $ways[$j] += $ways[$j - $coinSizes[$i]];
            }
        }
        
        return $ways[200];
    }
}
