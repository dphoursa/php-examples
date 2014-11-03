<?php

class LargestProductInGrid
{
    const GRID_SIZE = 20;
    
    public function find($grid, $digits)
    {
        $output = 0;
        $this->guardAgainstInvalidGrid($grid);
        
        $this->findRight($grid, $digits, $output);
        $this->findDown($grid, $digits, $output);
        $this->findDownRight($grid, $digits, $output);
        $this->findDownLeft($grid, $digits, $output);
        
        return $output;
    
    }
    
    private function findRight($grid, $digits, &$output)
    {
        for ($i = 0; $i < self::GRID_SIZE; $i++) {
            for ($j = 0; $j < self::GRID_SIZE - $digits; $j++) {
                $tmp = $grid[$i][$j];
                for ($d = 1; $d < $digits; $d++) {
                    $tmp *= $grid[$i][$j + $d];
                }
    
                if ($output < $tmp) {
                    $output = $tmp;
                }
            }
        }
        
        return $output;
    }
    
    private function findDown($grid, $digits, &$output)
    {
        for ($i = 0; $i < self::GRID_SIZE - $digits; $i++) {
            for ($j = 0; $j < self::GRID_SIZE; $j++) {
                $tmp = $grid[$i][$j];
                for ($d = 1; $d < $digits; $d++) {
                    $tmp *= $grid[$i + $d][$j];
                }
    
                if ($output < $tmp) {
                    $output = $tmp;
                }
            }
        }
        
        return $output;
    }
    
    private function findDownRight($grid, $digits, &$output)
    {
        for ($i = 0; $i < self::GRID_SIZE - $digits; $i++) {
            for ($j = 0; $j < self::GRID_SIZE - $digits; $j++) {
                $tmp = $grid[$i][$j];
                for ($d = 1; $d < $digits; $d++) {
                    $tmp *= $grid[$i + $d][$j + $d];
                }
    
                if ($output < $tmp) {
                    $output = $tmp;
                }
            }
        }
        
        return $output;
    }
    
    private function findDownLeft($grid, $digits, &$output)
    {
        for ($i = 0; $i < self::GRID_SIZE - $digits; $i++) {
            for ($j = $digits-1; $j < self::GRID_SIZE; $j++) {
                $tmp = $grid[$i][$j];
                for ($d = 1; $d < $digits; $d++) {
                    $tmp *= $grid[$i + $d][$j - $d];
                }
    
                if ($output < $tmp) {
                    $output = $tmp;
                }
            }
        }
        
        return $output;
    }

    private function guardAgainstInvalidGrid($grid) {
        if (!is_array($grid) || count($grid) != self::GRID_SIZE) {
            throw new \InvalidArgumentException('Please supply 20 x 20 grid');
        }
        
        foreach ($grid as $row) {
            if (!is_array($row) || count($row) != self::GRID_SIZE) {
                throw new \InvalidArgumentException('Please supply 20 x 20 grid');
            }
        }
    }
}
