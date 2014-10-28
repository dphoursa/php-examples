<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PalindromeSpec extends ObjectBehavior
{
    function it_return_empty_string() {
        $this->find("")->shouldReturn("");
    }
    
    //from now on x, y, z represent any char in a string
    
    function it_return_x_for_input_x() {
        $this->find("a")->shouldReturn("a");
    }
    
    function it_return_xx_for_input_xx() {
        $this->find("aa")->shouldReturn("aa");
    }
    
    function it_return_xxx_for_input_xxx() {
        $this->find("aaa")->shouldReturn("aaa");
    }
    
    function it_return_xyx_for_input_xyx() {
        $this->find("aba")->shouldReturn("aba");
    }
    
    function it_return_xyyx_for_input_xyyx() {
        $this->find("abba")->shouldReturn("abba");
    }
    
    function it_return_x_for_input_xy() {
        $this->find("ab")->shouldReturn("a");
    }

    function it_return_xx_for_input_xxy() {
        $this->find("aab")->shouldReturn("aa");
    }
    
    function it_return_xx_for_input_yxx() {
        $this->find("baa")->shouldReturn("aa");
    }
    
    function it_return_xxx_for_input_xxxyy() {
        $this->find("aaabb")->shouldReturn("aaa");
    }
    
    function it_return_xxx_for_input_yyxxx() {
        $this->find("bbaaa")->shouldReturn("aaa");
    }
    
    function it_return_yxy_for_input_yyxyc() {
        $this->find("bbabc")->shouldReturn("bab");
    }
    
    function it_find_palindrome_at_the_start_of_the_string() {
        $this->find("aibohphobiaistheirrationalfearofpalindromes")->shouldReturn("aibohphobia");
    }
    
    function it_find_palindrome_at_the_end_of_the_string() {
        $this->find("irrationalfearofpalindromesiscalledaibohphobia")->shouldReturn("aibohphobia");
    }
    
    function it_find_palindrome_in_the_middle_of_the_string() {
        $this->find("personwhosufferesfromaibohphobiaisscaredofpalindromes")->shouldReturn("aibohphobia");
    }
}
