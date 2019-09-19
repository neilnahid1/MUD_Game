<?php

namespace Classes\Races;

class Dwarf extends Race
{
    function __construct()
    {
        parent::__construct(1.50, 1.0, "Dwarf");
    }
    public function dialog()
    {
        return "We Dwarves are tankier but doesn't hit hard";
    }
}
