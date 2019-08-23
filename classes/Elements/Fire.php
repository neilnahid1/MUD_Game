<?php

namespace Classes\Elements;
class Fire extends Element
{

    function __construct()
    {
        //Earth,Water,Fire,Wind,Corrupt
        parent::__construct(1.5, 0.25, 0.50, 1.0, 0.75, "Fire");
    }

    public function dialog()
    {
        return "Fiery inferno!";
    }
}
