<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Problem 15
 * 
 * Starting in the top left corner of a 2 x 2 grid, and only being able to move to the right and down, there are exactly 6 routes to the bottom right corner.
 * 
 * How many such routes are there through a 20 x 20 grid?
 * 
 */
class LatticePathsSpec extends ObjectBehavior
{
    function it_counts_possible_moves_on_1_x_1_grid()
    {
        $this->countRoutes(1)->shouldReturn(2);
    }
    
    function it_counts_possible_moves_on_2_x_2_grid()
    {
        $this->countRoutes(2)->shouldReturn(6);
    }
    
    function it_counts_possible_moves_on_3_x_3_grid()
    {
        $this->countRoutes(3)->shouldReturn(20);
    }
    
    function it_counts_possible_moves_on_20_x_20_grid()
    {
        $this->countRoutes(20)->shouldReturn(137846528820);
    }
}
