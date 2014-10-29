<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LargestPalindromeProductSpec extends ObjectBehavior
{
    function it_finds_largest_palindrome_for_2_3_digit_numbers()
    {
        $this->find()->shouldEqual(906609);
    }
}
