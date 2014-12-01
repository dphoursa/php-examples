<?php

/**
*
* Coin sums
*
* Problem 31
*
* In England the currency is made up of pound, £, and pence, p, and there are eight coins in general circulation:
*
* 1p, 2p, 5p, 10p, 20p, 50p, £1 (100p) and £2 (200p).
*
* It is possible to make £2 in the following way:
*
* 1 x £1 + 1 x 50p + 2 x 20p + 1 x 5p + 1 x 2p + 3 x 1p
*
* How many different ways can £2 be made using any number of coins?
*
*/
class CoinSums
{
    /**
     * Count number of ways one can represent 2 pounds
     * 
     * @return int Number of ways to represent 2 pounds 
     */
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
