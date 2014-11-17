<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Pandigital prime
 *
 * Problem 41
 *
 * We shall say that an n-digit number is pandigital if it makes use of all the digits 1 to n exactly once.
 * For example, 2143 is a 4-digit pandigital and is also prime.
 *
 * What is the largest n-digit pandigital prime that exists?
 *
 */
class PandigitalPrimeSpec extends ObjectBehavior
{
    function it_returns_largest_pandigital_prime()
    {
        $this->compute()->shouldReturn(7652413);
    }
}
