<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Largest palindrome product
 *
 * Problem 4
 *
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 x 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 * 
 */
class LargestPalindromeProductSpec extends ObjectBehavior
{
    function it_finds_largest_palindrome_for_2_3_digit_numbers()
    {
        $this->find()->shouldEqual(906609);
    }
}
