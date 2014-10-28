<?php

namespace spec;

use \InvalidArgumentException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MissingNumberSpec extends ObjectBehavior
{
    function it_throws_exception_when_not_array_or_empty_array_given()
    {
        $this->shouldThrow(new InvalidArgumentException('Only non empty arrays allowed as input!'))->duringFind([]);
        $this->shouldThrow(new InvalidArgumentException('Only non empty arrays allowed as input!'))->duringFind(1);
    }
    
    function it_returns_2_when_given_array_with_value_1()
    {
        $this->find([1])->shouldEqual(2);
    }
    
    function it_returns_1_when_given_array_with_value_2()
    {
        $this->find([2])->shouldEqual(1);
    }

    function it_finds_missing_number_for_array_with_2_3()
    {
        $this->find([2,3])->shouldEqual(1);
    }
    
    function it_finds_missing_number_for_array_with_1_3()
    {
        $this->find([1,3])->shouldEqual(2);
    }
    
    function it_finds_missing_number_for_array_with_1_2()
    {
        $this->find([1,2])->shouldEqual(3);
    }
    
    function it_finds_missing_number()
    {
        $this->find([2,4,3,5])->shouldEqual(1);
    }
    
    // test with stream
    
}
