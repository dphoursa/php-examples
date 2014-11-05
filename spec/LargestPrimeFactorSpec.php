<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Largest prime factor
 *
 * Problem 3
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 *
 */
class LargestPrimeFactorSpec extends ObjectBehavior
{
    function it_calc_one_has_no_primary()
    {
        $this->compute("1")->shouldReturn(0);
    }
    
    function it_computes_largest_prime_factors_of_2()
    {
        $this->compute(2)->shouldReturn(2);
    }

    function it_computes_largest_prime_factors_of_3()
    {
        $this->compute(3)->shouldReturn(3);
    }
   
    function it_computes_largest_prime_factors_of_4()
    {
        $this->compute(4)->shouldReturn(2);
    }

    function it_computes_largest_prime_factors_of_5()
    {
        $this->compute(5)->shouldReturn(5);
    }
    
    function it_computes_largest_prime_factors_of_6()
    {
        $this->compute(6)->shouldReturn(3);
    }
    
    function it_computes_largest_prime_factors_of_8()
    {
        $this->compute(8)->shouldReturn(2);
    }
    
    function it_computes_largest_prime_factors_of_9()
    {
        $this->compute(9)->shouldReturn(3);
    }
    
    function it_computes_largest_prime_factors_of_100()
    {
        $this->compute(100)->shouldReturn(5);
    }
    
    function it_computes_largest_prime_factors_of_13195()
    {
        $this->compute(13195)->shouldReturn(29);
    }
    
    function it_computes_largest_prime_factors_of_600851475143()
    {
        $this->compute(600851475143)->shouldReturn(6857);
    }
}
