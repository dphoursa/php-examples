<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Consecutive prime sum
 * 
 * Problem 50
 * 
 * The prime 41, can be written as the sum of six consecutive primes:
 * 41 = 2 + 3 + 5 + 7 + 11 + 13
 * 
 * This is the longest sum of consecutive primes that adds to a prime below one-hundred.
 * 
 * The longest sum of consecutive primes below one-thousand that adds to a prime, contains 21 terms, and is equal to 953.
 * 
 * Which prime, below one-million, can be written as the sum of the most consecutive primes?
 * 
 */
class ConsecutivePrimeSumSpec extends ObjectBehavior
{
    function it_computes_longest_prime_below_100_made_up_of_consecutive_primes()
    {
        $this->compute(100)->shouldReturn(41);
    }
    
    function it_computes_longest_prime_below_1000_made_up_of_consecutive_primes()
    {
        $this->compute(1000)->shouldReturn(953);
    }
    
    function it_computes_longest_prime_below_1000000_made_up_of_consecutive_primes()
    {
        $this->compute(1000000)->shouldReturn(997651);
    }
}
