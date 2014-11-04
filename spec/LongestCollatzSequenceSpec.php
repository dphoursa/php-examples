<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Problem 14
 * 
 * The following iterative sequence is defined for the set of positive integers:
 * 
 * n -> n/2 (n is even)
 * n -> 3n + 1 (n is odd)
 * 
 * Using the rule above and starting with 13, we generate the following sequence:
 * 13 -> 40 -> 20 -> 10 -> 5 -> 16 -> 8 -> 4 -> 2 -> 1
 *
 * It can be seen that this sequence (starting at 13 and finishing at 1) contains 10 terms. Although it has not been proved yet (Collatz Problem), it is thought that all starting numbers finish at 1.
 * 
 * Which starting number, under one million, produces the longest chain?
 * 
 * NOTE: Once the chain starts the terms are allowed to go above one million.
 *
 */
class LongestCollatzSequenceSpec extends ObjectBehavior
{
    function it_finds_collatz_sequence_for_n_13()
    {
        $this->findSequence(13)->shouldEqual([13, 40, 20, 10, 5, 16, 8, 4, 2, 1]);
    }
    
    function it_finds_sequence_starting_number_under_1000000()
    {
        $this->findLargestSequenceNumber(1000000)->shouldEqual(837799);
    }
}
