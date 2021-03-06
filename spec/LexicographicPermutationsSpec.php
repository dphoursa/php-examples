<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 *
 * Lexicographic permutations
 * 
 * Problem 24
 * 
 * A permutation is an ordered arrangement of objects.
 * For example, 3124 is one possible permutation of the digits 1, 2, 3 and 4.
 * If all of the permutations are listed numerically or alphabetically, we call it lexicographic order.
 * The lexicographic permutations of 0, 1 and 2 are:
 * 
 * 012   021   102   120   201   210
 * 
 * What is the millionth lexicographic permutation of the digits 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?
 * 
 */
class LexicographicPermutationsSpec extends ObjectBehavior
{
    function it_returns_1st_permutation_of_012()
    {
        $this->findPermutation([0, 1, 2], 1)->shouldBe([0, 1, 2]);
    }
    
    function it_returns_2nd_permutation_of_012()
    {
        $this->findPermutation([0, 1, 2], 2)->shouldReturn([0, 2, 1]);
    }
    
    function it_returns_3rd_permutation_of_012()
    {
        $this->findPermutation([0, 1, 2], 3)->shouldReturn([1, 0 ,2]);
    }
    
    function it_returns_4th_permutation_of_012()
    {
        $this->findPermutation([0, 1, 2], 4)->shouldReturn([1, 2, 0]);
    }
    
    function it_returns_5th_permutation_of_012()
    {
        $this->findPermutation([0, 1, 2], 5)->shouldReturn([2, 0, 1]);
    }
    
    function it_returns_6th_permutation_of_012()
    {
        $this->findPermutation([0, 1, 2], 6)->shouldReturn([2, 1, 0]);
    }
    
    function it_returns_1000000th_permutation_of_0123456789()
    {
        $this->findPermutation([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], 1000000)->shouldReturn([2, 7, 8, 3, 9, 1, 5, 4, 6, 0]);
    }
}
