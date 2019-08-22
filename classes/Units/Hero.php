<?php

require "../classes/Elements/ElementType.php";

class Hero extends Unit{
    public $element;
    function __construct(Element $element)
    {
        $this->element = $element;
    }
}