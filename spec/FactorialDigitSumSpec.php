<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * 
 * Factorial digit sum
 *
 * Problem 20
 * 
 * n! means n x (n - 1) x ... x 3 x 2 x 1
 * 
 * For example, 10! = 10 x 9 x ... x 3 x 2 x 1 = 3628800,
 * and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
 * 
 * Find the sum of the digits in the number 100!
 * 
 */
class FactorialDigitSumSpec extends ObjectBehavior
{
    function it_computes_sum_of_digits_for_factorial_of_1()
    {
        $this->compute(1)->shouldReturn(1);
    }
    
    function it_computes_sum_of_digits_for_factorial_of_3()
    {
        $this->compute(3)->shouldReturn(6);
    }
    
    function it_computes_sum_of_digits_for_factorial_of_4()
    {
        $this->compute(4)->shouldReturn(6);
    }
    
    function it_computes_sum_of_digits_for_factorial_of_10()
    {
        $this->compute(10)->shouldReturn(27);
    }
    
    function it_computes_sum_of_digits_for_factorial_of_12()
    {
        $this->compute(12)->shouldReturn(27);
    }
    
    function it_computes_sum_of_digits_for_factorial_of_20()
    {
        $this->compute(20)->shouldReturn(54);
    }
    
    function it_computes_sum_of_digits_for_factorial_of_100()
    {
        $this->compute(100)->shouldReturn(648);
    }
}
