<?php

class Dwarves extends Race
{
    function __construct()
    {
        parent::__construct(1.50, 0.50);
    }
    public function dialog()
    {
        return "We Dwarves are tankier but doesn't hit hard";
    }
}