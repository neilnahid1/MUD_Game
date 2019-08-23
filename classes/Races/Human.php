<?php
namespace Classes\Races;

class Human extends Race
{
    function __construct()
    {
        parent::__construct(1.0, 1.0,"Human");
    }
    public function dialog()
    {
        return "Us humans are basic.";
    }
}
