<?php
class Elf extends Race
{
    function __construct()
    {
        parent::__construct(0.50, 1.50);
    }

    function dialog()
    {
        return "We elves are fast and cunning.";
    }
}
