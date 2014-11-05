<?php

class MaximumPathSumI
{
    private $numbers;
    private $storage;
    
    public function __construct($input_file)
    {
        $file = fopen($input_file, "r");
        
        $this->storage = array();
        $this->numbers = array();
        
        while (($line = fgets($file)) !== false) {
            $this->numbers[] = explode(" ", $line);
            $this->storage[] = array();
        }

        fclose($file);
    }

    public function getTotal($row = 0, $index = 0)
    {
        $sum = 0;
        
        if (!isset($this->storage[$row][$index])) {
            if (count($this->numbers) > $row + 1) {
                $num1 = $this->getTotal($row + 1, $index);
                $num2 = $this->getTotal($row + 1, $index + 1);
                $sum = ($num1 < $num2) ? $num2 : $num1;
            }
            
            $this->storage[$row][$index] = $this->numbers[$row][$index] + $sum;
        }
        
        return $this->storage[$row][$index];
    }
}
