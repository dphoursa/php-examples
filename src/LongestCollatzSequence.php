<?php

class LongestCollatzSequence
{

    public function findSequence($n)
    {
        $output = [$n];

        while ($n > 1) {
            $n = ($n % 2 == 0) ? $n / 2 : 3 * $n + 1;
            $output[] = $n;
        }

        return $output;
    }

    public function findLargestSequenceNumber($threshold)
    {
        $number = 0;
        $sequence_count = 0;
        $lowest_number = ($threshold / 3 * 2);
        
        for ($i = $threshold; $i > $lowest_number; --$i) {
            //ignore even
            if ($i % 2 == 0) {
                continue;
            }
            
            if (count($this->findSequence($i)) > $sequence_count) {
                $number = $i;
                $sequence_count = count($this->findSequence($i));
            }
        }
        
        return $number;
    }
}
