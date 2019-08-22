<?php

class Human extends Race
{
    function __construct()
    {
        parent::__construct(1.0, 1.0);
    }
    public function dialog()
    {
        return "Us humans are basic.";
    }
}
