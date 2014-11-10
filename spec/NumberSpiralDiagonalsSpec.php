<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Number spiral diagonals
 *
 * Problem 28
 * 
 * Starting with the number 1 and moving to the right in a clockwise direction a 5 by 5 spiral is formed as follows:
 *
 * 21 22 23 24 25
 * 20  7  8  9 10
 * 19  6  1  2 11
 * 18  5  4  3 12
 * 17 16 15 14 13
 * 
 * It can be verified that the sum of the numbers on the diagonals is 101.
 * 
 * What is the sum of the numbers on the diagonals in a 1001 by 1001 spiral formed in the same way?
 *
 */
class NumberSpiralDiagonalsSpec extends ObjectBehavior
{
    function it_calculate_sum_for_1x1()
    {
        $this->calculate(1)->shouldReturn(1);
    }
    
    function it_calculate_sum_for_3x3()
    {
        $this->calculate(3)->shouldReturn(25);
    }
    
    function it_calculate_sum_for_5x5()
    {
        $this->calculate(5)->shouldReturn(101);
    }
    
    function it_calculate_sum_for_1001x1001()
    {
        $this->calculate(1001)->shouldReturn(669171001);
    }
}
