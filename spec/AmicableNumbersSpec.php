<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Amicable numbers
 * 
 * Problem 21
 * 
 * Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
 * If d(a) = b and d(b) = a, where a ­ b, then a and b are an amicable pair and each of a and b are called amicable numbers.
 * 
 * For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 and 110; therefore d(220) = 284. The proper divisors of 284 are 1, 2, 4, 71 and 142; so d(284) = 220.
 * 
 * Evaluate the sum of all the amicable numbers under 10000.
 * 
 */
class AmicableNumbersSpec extends ObjectBehavior
{
    function it_sums_up_all_proper_devisors_for_1() {
        $this->sumProperDivisors(1)->shouldEqual(0);
    }
    
    function it_sums_up_all_proper_devisors_for_2() {
        $this->sumProperDivisors(2)->shouldEqual(1);
    }
    
    function it_sums_up_all_proper_devisors_for_6() {
        $this->sumProperDivisors(6)->shouldEqual(6);
    }
    
    function it_sums_up_all_proper_devisors_for_220() {
        $this->sumProperDivisors(220)->shouldEqual(284);
    }
    
    function it_sums_up_all_proper_devisors_for_284() {
        $this->sumProperDivisors(284)->shouldEqual(220);
    }
    
    function it_sum_amicable_numbers_under_10000() {
        $this->sumAmicableNumbers(10000)->shouldReturn(31626);
    }
}
