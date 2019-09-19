<?php

namespace Classes\Rooms;

class Coordinate
{
    public $xPos;
    public $yPos;

    function __construct(int $xPos, int $yPos)
    {
        $this->xPos = $xPos;
        $this->yPos = $yPos;
    }
    public function moveLeft()
    {
        $this->xPos -= 1;
    }
    public function moveUp()
    {
        $this->yPos += 1;
    }
    public function moveRight()
    {
        $this->xPos += 1;
    }
    public function moveDown()
    {
        $this->yPos -= 1;
    }
}
