<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Double-base palindromes
 *
 * Problem 36
 * 
 * The decimal number, 585 (denary) = 1001001001 (binary), is palindromic in both bases.
 * 
 * Find the sum of all numbers, less than one million, which are palindromic in base 10 and base 2.
 * 
 * (Please note that the palindromic number, in either base, may not include leading zeros.)
 * 
 */
class DoubleBasePalindromesSpec extends ObjectBehavior
{
    function it_checks_if_585_is_palindromic_in_both_bases()
    {
        $this->isPalindromic(585)->shouldReturn(true);
    }
    
    function it_returns_sum_of_all_numbers_below_1000000_that_are_palindromic_in_both_bases()
    {
        $this->sumAll(1000000)->shouldReturn(872187);
    }
}
