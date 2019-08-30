<?php

use Classes\Units\Hero;
use Classes\Rooms\Room;

/**
 * The map is used to handle all player room navigation commands
 * @property Room[] $rooms array of all rooms in the map
 * @property Hero $player the player carrying the map
 * @property Room $currentRoom the room on which the player is currently in.
 */
abstract class RoomManager
{
    public $rooms; //array of rooms
    public $player;
    public $currentRoom;
    function __construct(array $rooms, Hero $player)
    {
        $this->rooms = $rooms;
        $this->currentRoom = $rooms['Starting Room'];
        $this->player = $player;
    }
    function displayRoomOptions(Room $room)
    {
        $prompt = "1 - go to another room.\n
        2 - explore room\n
        3 - battle enemies in the room.\n";
        $input = readline($prompt);
        system('clear');
        switch ($prompt) {
            case "1":
                $room->displayNavigateRoomCommands();
                break;
            case "2":
                $room->displayExplorationCommands();
                break;
            case "3":
                $room->displayBattleCommands();
                break;
            default:
                echo "invalid, try again [ENTER]\n";
                displayRoomOptions();
        }
    }
}
