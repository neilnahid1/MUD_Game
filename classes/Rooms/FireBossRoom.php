<?php

namespace Classes\Rooms;

class ElementalRoom extends Room
{
    function __construct(array $adjascentRooms, string $description, bool $isUnlocked)
    {

        parent::__construct($adjascentRooms, $description, $isUnlocked);
    }
}
