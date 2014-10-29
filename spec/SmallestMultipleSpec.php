<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Problem 5
 *
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 *
 */
class SmallestMultipleSpec extends ObjectBehavior
{
    function it_computes_number_divisible_by_all_numbers_from_1_to_1()
    {
        $this->find(1)->shouldEqual(1);
    }
    
    function it_computes_number_divisible_by_all_numbers_from_1_to_2()
    {
        $this->find(2)->shouldEqual(2);
    }
    
    function it_computes_number_divisible_by_all_numbers_from_1_to_3()
    {
        $this->find(3)->shouldEqual(6);
    }
    
    function it_computes_number_divisible_by_all_numbers_from_1_to_4()
    {
        $this->find(4)->shouldEqual(12);
    }

    function it_computes_number_divisible_by_all_numbers_from_1_to_10()
    {
        $this->find(10)->shouldEqual(2520);
    }

    function it_computes_number_divisible_by_all_numbers_from_1_to_20()
    {
        $this->find(20)->shouldEqual(232792560);
    }
    
}
