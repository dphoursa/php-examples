<?php

$robot = new RobotWalks(25);
print $robot->getClosedPathsCount() . PHP_EOL;

$robot = new RobotWalks(70);
print $robot->getClosedPathsCount() . PHP_EOL;

/**
 *
 * Problem 208
 * 
 * A robot moves in a series of one-fifth circular arcs (72¡), with a free choice of a clockwise or an anticlockwise arc for each step, but no turning on the spot.
 * 
 * Ex: 25 arcs starting northward has 70932 possible closed paths
 * 
 * Given that the robot starts facing North, how many journeys of 70 arcs in length can it take that return it, after the final arc, to its starting position?
 * (Any arc may be traversed multiple times.)
 *
 */
class RobotWalks
{
    private $arcs;
    private $moves;
    private $salt;
    private $storage;
    
    public function __construct($arcs)
    {
        $this->arcs = $arcs;
        
        if ($arcs % 5 != 0) {
            throw new InvalidArgumentException('Please make sure that the number of arcs is divisable by 5');
        }
        
        //number of valid moves in every direction on the pentagon
        $this->moves = $arcs / 5;

        //next invalid move 
        $this->salt = $this->moves + 1;
        
        //max slots needed in storage
        $storage_size = $this->moves + $this->salt *
                            ($this->moves + $this->salt *
                                ($this->moves + $this->salt *
                                    ($this->moves + $this->salt * $this->moves)
                                )
                            )
                        ;
   
        //initiaise storage
        $this->storage = new SplFixedArray($storage_size);
    }
    
    public function getClosedPathsCount()
    {
        //To speed up the calculation we pick one direction at the start and the mirror it to take account of all the paths if we started with another direction
        return 2 * $this->move($this->moves-1, $this->moves, $this->moves, $this->moves, $this->moves);
    }
    
    private function move($p1, $p2, $p3, $p4, $p5)
    {
        //completed all the circles, path found
        if (($p1 + $p2 + $p3 + $p4 + $p5) == 0) {
            return 1;
        }

        $key = $p1 + $this->salt * ($p2 + $this->salt * ($p3 + $this->salt * ($p4 + $this->salt * $p5)));

        //initialise move
        if (!$this->storage[$key]) {       
            
            $this->storage[$key] = 0;
            
            //move left only if move is valid
            if ($p1 > 0) {
                $this->storage[$key] += $this->move($p2, $p3, $p4, $p5, $p1-1);
            }
            
            //move right only if move is valid
            if ($p5 > 0) {
                $this->storage[$key] += $this->move($p5-1, $p1, $p2, $p3, $p4);
            }
        }

        return $this->storage[$key];
     }
}

