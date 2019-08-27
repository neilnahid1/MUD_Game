<?php

namespace Classes\Units;

use Classes\Elements\Element;
use Classes\Races\Race;

class Hero extends Unit
{
    private $experience;
    private $maxExperience;
    public $elements;
    function __construct(Race $race, Element $element, string $name, int $level)
    {
        parent::__construct(200, 50, 1, $race, $element);
        $this->name = $name;
        $this->elements[$element->Name()] = $element; //adds the starting element to the array of elements;
        $this->experience = 0;
        $this->maxExperience = 100;
    }
    public function addExperience(int $exp)
    {
        $this->experience += $exp;
        while ($this->experience >= $this->maxExperience) {
            $this->levelUp();
        }
    }
    private function levelUp()
    {
        $this->level += 1;
        $this->experience -= $this->maxExperience;
    }
    public function switchToElement(string $element)
    {
        $this->element = $this->elements[$element];
    }
    public function toString()
    {
        $unitInfo = parent::toString();
        return $unitInfo . "Exp: $this->experience\n";
    }
}
