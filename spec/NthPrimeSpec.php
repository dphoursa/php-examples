<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Problem 7
 *
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 * What is the 10001st prime number?
 *
 */
class NthPrimeSpec extends ObjectBehavior
{
    function it_finds_1st_prime()
    {
        $this->find(1)->shouldReturn(2);
    }
    
    function it_finds_2nd_prime()
    {
        $this->find(2)->shouldReturn(3);
    }
    
    function it_finds_3rd_prime()
    {
        $this->find(3)->shouldReturn(5);
    }
    
    function it_finds_4th_prime()
    {
        $this->find(4)->shouldReturn(7);
    }
    
    function it_finds_5th_prime()
    {
        $this->find(5)->shouldReturn(11);
    }
    
    function it_finds_6th_prime()
    {
        $this->find(6)->shouldReturn(13);
    }
    
    function it_finds_10001th_prime()
    {
        $this->find(10001)->shouldReturn(104743);
    }
}
