<?php

class LatticePaths
{
    
    private function factorial($number)
    { 
        if ($number < 2) { 
            return 1; 
        } else { 
            return bcmul($number, $this->factorial($number-1)); 
        } 
    }
    
    public function countRoutes($grid_size)
    {
        // (moves_right+moves_down)! / (moves_right! x moves_down!)
        return (int)($this->factorial(2 * $grid_size) / pow($this->factorial($grid_size),2));
        
    }
}
