<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Maximum path sum I & Maximum path sum II
 * 
 * Problem 18 and 67
 * 
 * By starting at the top of the triangle below and moving to adjacent numbers on the row below, the maximum total from top to bottom is 23.
 * 
 * 3
 * 7 4
 * 2 4 6
 * 8 5 9 3
 * 
 * That is, 3 + 7 + 4 + 9 = 23.
 * 
 * Find the maximum total from top to bottom in input file, a 15K text file containing a triangle with one-hundred rows.
 * 
 */
class MaximumPathSumISpec extends ObjectBehavior
{
    private $test_files = [
            "problem_18_input_1.txt",
            "problem_18_input_2.txt",
            "problem_67_input.txt"
        ];
    
    
    
    function it_returns_total_for_input_1()
    {
        $this->beConstructedWith(__DIR__."/".$this->test_files[0]);
        
        $this->getTotal()->shouldReturn(23);
    }
    
    function it_returns_total_for_input_2()
    {
        $this->beConstructedWith(__DIR__."/".$this->test_files[1]);
        
        $this->getTotal()->shouldReturn(1074);
    }
    
    function it_returns_total_for_input_3()
    {
        $this->beConstructedWith(__DIR__."/".$this->test_files[2]);
        
        $this->getTotal()->shouldReturn(7273);
    }
}
