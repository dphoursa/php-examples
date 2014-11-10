<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;


/**
 *
 * Self powers
 * 
 * Problem 48
 * 
 * The series, 1^1 + 2^2 + 3^3 + ... + 10^10 = 10405071317.
 * 
 * Find the last ten digits of the series, 1^1 + 2^2 + 3^3 + ... + 1000^1000.
 * 
 */
class SelfPowersSpec extends ObjectBehavior
{
    function it_returns_last_10_digits_for_sequence_of_10()
    {
        $this->calculate(10, 10)->shouldReturn("0405071317");
    }
    
    function it_returns_last_10_digits_for_sequence_of_1000()
    {
        $this->calculate(1000, 10)->shouldReturn("9110846700");
    }
}
