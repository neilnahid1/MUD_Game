<?php

namespace Classes\Elements;

class Basic extends Element
{
    function __construct()
    {
        parent::__construct(1.0,1.0,1.0,1.0,0.75, "Basic");
    }
    public function dialog()
    {
        return "Basic element.";
    }
}
