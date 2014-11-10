<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Digit fifth powers
 * 
 * Problem 30
 * 
 * Surprisingly there are only three numbers that can be written as the sum of fourth powers of their digits:
 * 
 *     1634 = 1^4 + 6^4 + 3^4 + 4^4
 *     8208 = 8^4 + 2^4 + 0^4 + 8^4
 *     9474 = 9^4 + 4^4 + 7^4 + 4^4
 * 
 * As 1 = 1^4 is not a sum it is not included.
 * 
 * The sum of these numbers is 1634 + 8208 + 9474 = 19316.
 * 
 * Find the sum of all the numbers that can be written as the sum of fifth powers of their digits.
 *
 */
class DigitPowersSpec extends ObjectBehavior
{
    function it_calculates_sum_for_digit_powers_of_4()
    {
        $this->calculate(4)->shouldReturn(19316);
    }
    
    function it_calculates_sum_for_digit_powers_of_5()
    {
        $this->calculate(5)->shouldReturn(443839);
    }
}
