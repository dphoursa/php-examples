<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Sum square difference
 *
 * Problem 6
 *
 * The sum of the squares of the first ten natural numbers is,
 * 1^2 + 2^2 + ... + 10^2 = 385
 * The square of the sum of the first ten natural numbers is,
 * (1 + 2 + ... + 10)^2 = 55^2 = 3025
 *
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 - 385 = 2640.
 * 
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */
class SumSquareDifferenceSpec extends ObjectBehavior
{
    function it_computes_sum_of_1_number()
    {
        $this->compute(1)->shouldEqual(0);
    }
    
    function it_computes_sum_of_2_numbers()
    {
        $this->compute(2)->shouldEqual(4);
    }
    
    function it_computes_sum_of_3_numbers()
    {
        $this->compute(3)->shouldEqual(22);
    }
    
    function it_computes_sum_of_5_numbers()
    {
        $this->compute(5)->shouldEqual(170);
    }
    
    function it_computes_sum_of_10_numbers()
    {
        $this->compute(10)->shouldEqual(2640);
    }
    
    function it_computes_sum_of_100_numbers()
    {
        $this->compute(100)->shouldEqual(25164150);
    }
}
