<?php

namespace Classes\Elements;

class Corruption extends Element
{
    function __construct()
    {
        parent::__construct(1.25, 1.25, 1.25, 1.25, 0.25, "Corruption");
    }
    public function dialog()
    {
        return "I have the power of corruption!";
    }
}
