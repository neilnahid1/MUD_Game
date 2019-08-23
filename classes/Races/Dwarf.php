<?php

namespace Classes\Races;

class Dwarf extends Race
{
    function __construct()
    {
        parent::__construct(1.50, 0.50, "Dwarf");
    }
    public function dialog()
    {
        return "We Dwarves are tankier but doesn't hit hard";
    }
}
