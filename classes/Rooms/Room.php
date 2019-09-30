<?php

namespace Classes\Rooms;

/**
 * @property Coordinate $coordinate
 */
class Room
{
    private $coordinate;
    private $containsEnemy;
    function __construct(Coordinate $coordinate, bool $containsEnemy)
    {
        $this->coordinate = new Coordinate($coordinate->X, $coordinate->Y);
        $this->containsEnemy = $containsEnemy;
    }
     //returns a string representation of the room.
    public function toString(): string
    {
        return "coordinates-> x:{$this->coordinate->X} y:{$this->coordinate->Y}";
    }
    public function getCoordinate(){
        return $this->coordinate;
    }
}
