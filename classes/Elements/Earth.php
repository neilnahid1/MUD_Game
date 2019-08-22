<?php
require('./Element.php');
require('./Interface/Element.php');
class Earth extends Element
{
    function __construct()
    {
        //Earth,Water,Fire,Wind,Corrupt
        parent::__construct(0.50, 1.0, 0.25, 1.5, 0.75, "Earth");
    }
    public function dialog()
    {
        return "I have the nature by my side.";
    }
}
