<?php

$fizzbuzz = new FizzBuzz();

for ($i = 1; $i<=100; $i++) {
    printf("%s",$fizzbuzz->convert($i));
}

class FizzBuzz
{
    public function convert($number)
    {
        if ($number % 15 == 0) {
            return "FizzBuzz";
        } elseif ($number % 3 == 0) {
            return "Fizz";
        } elseif ($number % 5 == 0) {
            return "Buzz";
        }
        
        return $number;
    }
}
