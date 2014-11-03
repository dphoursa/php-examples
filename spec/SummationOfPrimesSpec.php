<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Problem 10
 *
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 *
 * Find the sum of all the primes below two million.
 *
 */
class SummationOfPrimesSpec extends ObjectBehavior
{
    function it_finds_sum_of_primes_below_10()
    {
        $this->find(10)->shouldReturn(17);
    }
    
    function it_finds_sum_of_primes_below_2000000()
    {
        $this->find(2000000)->shouldReturn(142913828922);
    }
}
