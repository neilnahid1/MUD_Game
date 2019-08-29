<?php

abstract class Item{

    protected $name;
    function __construct($name)
    {
        $this->name = $name;
    }
}