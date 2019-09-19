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
    function __construct(int $sizeX, int $sizeY, int $numOfNormalRooms)
    {
        $this->sizeX = $sizeX;
        $this->sizeY = $sizeY;
        $this->populateMap($numOfNormalRooms);
    }
    public function show()
    {
        for ($x = 0; $x < $this->sizeX; $x++) {
            echo "\n";
            for ($y = 0; $y < $this->sizeY; $y++) {
                if (isset($this->rooms[$x][$y])) {
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
    function nextStep(Coordinate $currentCoordinate)
    {
        $validSteps = $this->filterPossibleSteps($currentCoordinate);
        $randomIndex = random_int(0, count($validSteps) - 1);
        switch ($validSteps[$randomIndex]) {
            case "left":
                $currentCoordinate->moveLeft();
                break;
            case "up":
                $currentCoordinate->moveUp();
                break;
            case "down":
                $currentCoordinate->moveDown();
                break;
            case "right":
                $currentCoordinate->moveRight();
                break;
        }
    }
    /**
     * filters possible steps for the stepper
     * @param Coordinate $currentCoordinate the coordinate to validate
     */
    function filterPossibleSteps(Coordinate $currentCoordinate): array
    {
        //validate possible steps
        if ($currentCoordinate->xPos > 0)
            $validSteps[] = 'left';
        if ($currentCoordinate->xPos < $this->sizeX)
            $validSteps[] = 'right';
        if ($currentCoordinate->yPos > 0)
            $validSteps[] = 'down';
        if ($currentCoordinate->yPos < $this->sizeY)
            $validSteps[] = 'up';
        return $validSteps;
    }
    /**
     * creates a normal room at the position of the given coordinates
     * @param Coordinate $coordinate the coordinate on which the room will be spawned
     */
    function createNormalRoom(Coordinate $coordinate)
    {
        $this->rooms[$coordinate->xPos][$coordinate->yPos] = new Room(new Coordinate($coordinate->xPos, $coordinate->yPos));
    }
    function populateNormalRooms(int $normalRoomsToSpawn, Coordinate $coor)
    {
        while ($normalRoomsToSpawn > 0) {
            $this->nextStep($coor);
            if (!isset($this->rooms[$coor->xPos][$coor->yPos])) {
                $this->createNormalRoom($coor);
                $normalRoomsToSpawn--;
            }
        }
    }
    function populateMap(int $normalRoomsToSpawn)
    {
        $startingCoordinate = new Coordinate(0, 0);
        $this->populateNormalRooms($normalRoomsToSpawn, $startingCoordinate);
    }
}
