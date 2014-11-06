<?php

class NamesScores
{
    private $alphabet = [
        "A" => 1,
        "B" => 2,
        "C" => 3,
        "D" => 4,
        "E" => 5,
        "F" => 6,
        "G" => 7,
        "H" => 8,
        "I" => 9,
        "J" => 10,
        "K" => 11,
        "L" => 12,
        "M" => 13,
        "N" => 14,
        "O" => 15,
        "P" => 16,
        "Q" => 17,
        "R" => 18,
        "S" => 19,
        "T" => 20,
        "U" => 21,
        "V" => 22,
        "W" => 23,
        "X" => 24,
        "Y" => 25,
        "Z" => 26,
    ];
    private $storage;
    
    public function __construct($input_file)
    {
        $this->storage = str_getcsv(file_get_contents($input_file));
        sort($this->storage);
    }
    
    private function getNameWorth($name)
    {
        $output = 0;
        for ($i = 0; $i < strlen($name); $i++) {
            $output += $this->alphabet[$name[$i]];
        }
        
        return $output;
    }
    
    public function computeScoreSum() {
        $output = 0;
        foreach ($this->storage as $key => $name) {
            $output += ($key + 1) * $this->getNameWorth($name); 
        }
        
        return $output;
    }
}
