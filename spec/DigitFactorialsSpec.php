<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Digit factorials
 * 
 * Problem 34
 * 
 * 145 is a curious number, as 1! + 4! + 5! = 1 + 24 + 120 = 145.
 * 
 * Find the sum of all numbers which are equal to the sum of the factorial of their digits.
 * 
 * Note: as 1! = 1 and 2! = 2 are not sums they are not included.
 *
 */
class DigitFactorialsSpec extends ObjectBehavior
{
    function it_computes_that_145_is_curious_number()
    {
        $this->isCuriousNumber(145)->shouldReturn(true);
    }
    
    function it_computes_the_sum_of_all_curious_numbers()
    {
        $this->getSumAllCuriousNumbers()->shouldReturn(40730);
    }
}
