<?php

namespace Classes\Rooms;

class NormalRoom extends Room
{
    function __construct(array $adjascentRooms, string $descriptiom, bool $isUnlocked)
    {
        parent::__construct($adjascentRooms, $descriptiom, $isUnlocked);
    }
    function displayBattleCommands()
    {
        $prompt  = "1 - battle a Fire Orc\n";
        $prompt .= "2 - battle a Water Elf\n";
        $prompt .= "3 - battle a Fire Human\n";
    }
    function displayExplorationCommands()
    {

    }
}
