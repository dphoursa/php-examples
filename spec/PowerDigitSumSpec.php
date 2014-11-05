<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Problem 16
 * 
 * 2^15 =  and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.
 * 
 * What is the sum of the digits of the number 2^1000?
 * 
 */
class PowerDigitSumSpec extends ObjectBehavior
{
    function it_returns_sum_of_all_digets_for_2_to_the_power_1()
    {
        $this->sum(1)->shouldEqual(2);
    }
    
    function it_returns_sum_of_all_digets_for_2_to_the_power_2()
    {
        $this->sum(2)->shouldEqual(4);
    }
    
    function it_returns_sum_of_all_digets_for_2_to_the_power_4()
    {
        $this->sum(4)->shouldEqual(7);
    }
    
    function it_returns_sum_of_all_digets_for_2_to_the_power_5()
    {
        $this->sum(5)->shouldEqual(5);
    }
    
    function it_returns_sum_of_all_digets_for_2_to_the_power_7()
    {
        $this->sum(7)->shouldEqual(11);
    }
    
    function it_returns_sum_of_all_digets_for_2_to_the_power_15()
    {
        $this->sum(15)->shouldEqual(26);
    }
    
    function it_returns_sum_of_all_digets_for_2_to_the_power_1000()
    {
        $this->sum(1000)->shouldEqual(1366);
    }
}
