<?php

namespace Elements;

class Wind extends Element
{
    function __construct()
    {
        //Earth,Water,Fire,Wind,Corrupt
        parent::__construct(0.25, 1.5, 1.0, 0.50, 0.75, "Wind");
    }

    public function dialog()
    {
        return "I control the storm.";
    }
}
