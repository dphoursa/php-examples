<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_return_input_for_numbers_not_divisable_by_3_or_5()
    {
        $this->convert(1)->shouldEqual(1);
    }
    
    function it_returns_Fizz_when_input_is_divisable_by_3()
    {
        $this->convert(9)->shouldEqual("Fizz");
    }
    
    function it_returns_Buzz_when_input_is_divisable_by_5()
    {
        $this->convert(10)->shouldEqual("Buzz");
    }
    
    function it_returns_FizzBuzz_when_input_divisable_by_3_and_5()
    {
        $this->convert(30)->shouldEqual("FizzBuzz");
    }
}
