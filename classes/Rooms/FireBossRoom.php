<?php

class FireBossRoom extends Room
{
    function __construct(ArrayObject $adjascentRooms, string $description, bool $isUnlocked)
    {
        parent::__construct($adjascentRooms, $description, $isUnlocked);
    }
}