<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Multiples of 3 and 5
 *
 * Problem 1
 *
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 * 
 */
class SumMultiplesSpec extends ObjectBehavior
{
    function it_returns_zero_for_input_1() {
        $this->sum(1)->shouldEqual(0);
    }
    
    function it_returns_3_for_input_4() {
        $this->sum(4)->shouldEqual(3);
    }
    
    function it_returns_8_for_input_6() {
        $this->sum(6)->shouldEqual(8);
    }
    
    function it_returns_14_for_input_7() {
        $this->sum(7)->shouldEqual(14);
    }
 
    function it_returns_23_for_input_10() {
        $this->sum(10)->shouldEqual(23);
    }

    function it_returns_233168_for_input_1000() {
        $this->sum(1000)->shouldEqual(233168);
    }

}
