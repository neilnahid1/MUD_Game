<?php

namespace Classes\Elements;

class Earth extends Element
{

    function __construct()
    {
        //Earth,Water,Fire,Wind,Corrupt
        parent::__construct(0.50, 1.0, 1.5, 1.0, 0.75, "Water");
    }
    public function dialog()
    {
        return "You will be cleansed by the might of the waters!";
    }
}
