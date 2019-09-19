<?php

namespace Classes\Races;

class Elf extends Race
{
    function __construct()
    {
        parent::__construct(1.0, 1.50, "Elf");
    }

    function dialog()
    {
        return "We elves are fast and cunning.";
    }
}
