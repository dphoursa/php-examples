<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsConverterSpec extends ObjectBehavior
{
    function it_calculates_the_roman_numeral_for_1()
    {
        $this->convert(1)->shouldReturn('I');
    }
    
    function it_calculates_the_roman_numeral_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }
    
    function it_calculates_the_roman_numeral_for_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }
    
    function it_calculates_the_roman_numeral_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }
    
    function it_calculates_the_roman_numeral_for_6()
    {
        $this->convert(6)->shouldReturn('VI');
    }
    
    function it_calculates_the_roman_numeral_for_9()
    {
        $this->convert(9)->shouldReturn('IX');
    }
    
    function it_calculates_the_roman_numeral_for_10()
    {
        $this->convert(10)->shouldReturn('X');
    }
    
    function it_calculates_the_roman_numeral_for_11()
    {
        $this->convert(11)->shouldReturn('XI');
    }
    
    function it_calculates_the_roman_numeral_for_14()
    {
        $this->convert(14)->shouldReturn('XIV');
    }
    
    function it_calculates_the_roman_numeral_for_20()
    {
        $this->convert(20)->shouldReturn('XX');
    }
    
    function it_calculates_the_roman_numeral_for_25()
    {
        $this->convert(25)->shouldReturn('XXV');
    }
    
    function it_calculates_the_roman_numeral_for_50()
    {
        $this->convert(50)->shouldReturn('L');
    }
    
    function it_calculates_the_roman_numeral_for_100()
    {
        $this->convert(100)->shouldReturn('C');
    }
    
    function it_calculates_the_roman_numeral_for_500()
    {
        $this->convert(500)->shouldReturn('D');
    }
    
    function it_calculates_the_roman_numeral_for_1900()
    {
        $this->convert(1900)->shouldReturn('MCM');
    }

}
