<?php

namespace Classes\Units;

use Classes\Elements\Element;
use Classes\Races\Race;

class Hero extends Unit
{
    private $experience;
    private $maxExperience;
    private $elements;
    function __construct(Race $race, Element $element)
    {
        parent::__construct(200, 50, 1, $race, $element);
        $this->elements[$element->Name()] = $element;
        $this->experience = 0;
        $this->maxExperience = 100;
    }
    function addExperience(int $exp)
    {
        $this->experience += $exp;
        while ($this->experience >= $this->maxExperience) {
            levelUp();
        }
    }
    function levelUp()
    {
        $this->level += 1;
        $this->experience -= $this->maxExperience;
    }
}
