<?php

class DistinctPowers
{

    public function countDistinctTerms($min, $max)
    {
        $count = 0;
        $terms = [];
        
        for ($i = $min; $i <= $max; $i++) {
            for ($j = $min; $j <= $max; $j++) {
                $term = bcpow($i, $j);
                
                if (!isset($terms[$term])) {
                    $terms[$term] = 1;
                    $count++;
                }
            }
        }
        
        return $count;
    }
}
