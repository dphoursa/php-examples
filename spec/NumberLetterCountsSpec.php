<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Number letter counts
 *
 * Problem 17
 * 
 * If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
 * 
 * If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
 * 
 * NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen) contains 20 letters.
 * The use of "and" when writing out numbers is in compliance with British usage.
 * 
 */
class NumberLetterCountsSpec extends ObjectBehavior
{
    function it_returns_letter_count_for_1()
    {
        $this->count(1)->shouldEqual(3);
    }
    
    function it_returns_letter_count_for_5()
    {
        $this->count(5)->shouldEqual(4);
    }
    
    function it_returns_letter_count_for_11()
    {
        $this->count(11)->shouldEqual(6);
    }
    
    function it_returns_letter_count_for_21()
    {
        $this->count(21)->shouldEqual(9);
    }
    
    function it_returns_letter_count_for_342()
    {
        $this->count(342)->shouldEqual(23);
    }
    
    function it_returns_letter_count_for_115()
    {
        $this->count(115)->shouldEqual(20);
    }
    
    function it_sums_all_letter_between_1_and_1000()
    {       
        $this->sum(1,1000)->shouldEqual(21124);
    }
}
