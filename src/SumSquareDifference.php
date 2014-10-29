<?php

class SumSquareDifference
{

    public function compute($number)
    {
        //(N(N + 1))/2 = sum all of numbers between 1 and N
        $square_of_the_sum = pow(($number*($number+1))/2, 2);
        $sum_of_squares = 0;
        
        for ($i=1; $i<=$number; $i++) {
            $sum_of_squares += pow($i, 2);
        }
        
        return $square_of_the_sum - $sum_of_squares;
    }
}
