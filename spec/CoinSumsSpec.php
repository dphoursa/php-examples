<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Coin sums
 * 
 * Problem 31
 * 
 * In England the currency is made up of pound, £, and pence, p, and there are eight coins in general circulation:
 * 
 *   1p, 2p, 5p, 10p, 20p, 50p, £1 (100p) and £2 (200p).
 * 
 * It is possible to make £2 in the following way:
 * 
 *     1 x £1 + 1 x 50p + 2 x 20p + 1 x 5p + 1 x 2p + 3 x 1p
 * 
 * How many different ways can £2 be made using any number of coins?
 * 
 */
class CoinSumsSpec extends ObjectBehavior
{
    function it_counts_different_ways_to_make_2_pounds()
    {
        $this->count(200)->shouldReturn(73682);
    }
}
