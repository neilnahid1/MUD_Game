<?php

abstract class Room
{
    public $adjascentRooms;
    public $description;
    public $isUnlocked;

    function __construct(ArrayObject $adjascentRooms, string $description, bool $isUnlocked)
    {
        $this->adjascentRooms = $adjascentRooms;
        $this->description = $description;
        $this->isUnlocked = $isUnlocked;
    }

    /**
     * prints to the terminal command for traversable rooms
     */
    function printNavigateCommands()
    {
        if (!is_null($this->adjascentRooms['N']))
            echo "N - to go north of the room.";
        if (!is_null($this->adjascentRooms['W']))
            echo "W - to go west of the room.";
        if (!is_null($this->adjascentRooms['E']))
            echo "E - to go east of the room.";
        if (!is_null($this->adjascentRooms['S']))
            echo "S - to go south of the room.";
    }

    /**
     * prints to the terminal the commands for exploreObjects
     */
    abstract function printExploreObjectCommands();
    abstract function battleEnemyDialog();
}