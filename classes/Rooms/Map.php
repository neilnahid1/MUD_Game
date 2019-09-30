<?php

namespace Classes\Rooms;

/**
 * Map stores a 2d array of rooms that will be generated randomly during the start of the game.
 * @property int $sizeX the size of the map in width;
 * @property int $sizeY the size of the map in height;
 * @property Room $rooms a 2d array that holds the room objects
 */
class Map
{
    public $sizeX;
    public $sizeY;
    public $rooms;
    public $currentLocation;
    function __construct(int $sizeX, int $sizeY, int $numOfNormalRooms)
    {
        $this->sizeX = $sizeX;
        $this->sizeY = $sizeY;
        $this->populateMap($sizeX * $sizeY > $numOfNormalRooms ? $numOfNormalRooms : $sizeX * $sizeY);
        $this->currentLocation = new Coordinate(0,0);
    }
    /**
     * displays the information of the map
     * [ ] - means normal room
     * [B] - means boss room
     * [X] - untraversable rooms
     */
    public function show()
    {
        // for ($x = 0; $x < $this->sizeX; $x++) {
        //     echo "\n";
        //     for ($y = 0; $y < $this->sizeY; $y++) {
        //         if (isset($this->rooms[$x][$y])) {
        //             echo "[ ]";
        //         } else {
        //             echo "[X]";
        //         }
        //     }
        // }
        for($y = ($this->sizeY-1);$y>=0;$y--){
            echo "\n";
            for ($x = 0; $x < $this->sizeX; $x++) {
                if (isset($this->rooms[$x][$y])) {
                    if($this->rooms[$x][$y]->getCoordinate()==$this->currentLocation)
                    echo "[C]";
                    else
                    echo "[ ]";
                } else {
                    echo "[X]";
                }
            }
        }

    }
    /**
     * steps on a next coordinate within the limits of the map's x and y size
     */
    function nextStep(Coordinate $coord)
    {
        $validSteps = $this->filterPossibleSteps($coord);
        $randIndex = random_int(0, count($validSteps) - 1);
        switch ($validSteps[$randIndex]) {
            case "left":
                $coord->moveLeft();
                break;
            case "up":
                $coord->moveUp();
                break;
            case "down":
                $coord->moveDown();
                break;
            case "right":
                $coord->moveRight();
                break;
        }
    }
    /**
     * filters possible steps for the stepper
     * @param Coordinate $coord the coordinate to validate
     */
    function filterPossibleSteps(Coordinate $coord): array
    {
        //validate possible steps
        if ($coord->X > 0)
            $validSteps[] = 'left';
        if ($coord->X < $this->sizeX - 1)
            $validSteps[] = 'right';
        if ($coord->Y > 0)
            $validSteps[] = 'down';
        if ($coord->Y < $this->sizeY - 1)
            $validSteps[] = 'up';
        return $validSteps;
    }
    /**
     * populate 1 instance of normal room and store it to the $rooms variable
     * creates a normal room at the position of the given coordinates
     * @param Coordinate $coord the coordinate on which the room will be spawned
     */
    function createNormalRoom(Coordinate $coordinate)
    {
        $this->rooms[$coordinate->X][$coordinate->Y] = new Room($coordinate, true);
    }
    /**
     * populates the map with normal rooms
     * populate the map with the number of $normalRooms
     * @param int $normalRooms the number of normal rooms to populate
     * @param Coordiante $coor the coordinate that the room is located
     */
    function populateNormalRooms(int $normalRooms, Coordinate $coor)
    {
        while ($normalRooms > 0) {
            if (!isset($this->rooms[$coor->X][$coor->Y])) {
                $this->createNormalRoom($coor);
                $normalRooms--;
            }
            $this->nextStep($coor);
        }
    }
    /**
     * populates the map with the corresponding number of rooms and their types
     * @param int $normalRooms the number of normal rooms to spawn
     */
    function populateMap(int $normalRooms)
    {
        $startingCoordinate = new Coordinate(0, 0);
        $this->populateNormalRooms($normalRooms, $startingCoordinate);
        $this->setStartingLocation();
    }
    /**
     * sets the starting location of the player on the randomly-generated map.
     */
    function setStartingLocation(){
        foreach($this->rooms as $rows){
            foreach($rows as $room){
            }
        }
    }
}
