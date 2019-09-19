<?php

namespace Classes\Rooms;

class Coordinate
{
    public $X;
    public $Y;

    function __construct(int $X, int $Y)
    {
        $this->X = $X;
        $this->Y = $Y;
    }
    public function moveLeft()
    {
        $this->X -= 1;
    }
    public function moveUp()
    {
        $this->Y += 1;
    }
    public function moveRight()
    {
        $this->X += 1;
    }
    public function moveDown()
    {
        $this->Y -= 1;
    }
}
