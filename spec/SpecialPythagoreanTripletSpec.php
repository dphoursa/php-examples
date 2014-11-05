<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Special Pythagorean triplet
 *
 * Problem 9
 *
 * Published on Friday, 25th January 2002, 06:00 pm; Solved by 176305
 *
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
 * a^2 + b^2 = c^2
 *
 * For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
 *
 * There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 * Find the product abc.
 *
 */
class SpecialPythagoreanTripletSpec extends ObjectBehavior
{
    function it_finds_product_of_pythagorean_triplet_for_sum_of_12()
    {
        $this->find(12)->shouldEqual(60);
    }
    
    function it_finds_product_of_pythagorean_triplet_for_sum_of_1000()
    {
        $this->find(1000)->shouldEqual(31875000);
    }
}
