<?php

namespace Classes\Units;

use Classes\Elements\Element;
use Classes\Races\Race;

/**
 * @property int $experience current accumulated experience
 * @property int $maxExperience threshold for levelling up
 * @property Element[] associative array of elements that the hero have acquired.
 *
 */
class Hero extends Unit
{
    public $elements;
    public $inventory;
    function __construct(Race $race, Element $element, string $name)
    {
        parent::__construct(
            HERO_BASE_HEALTH, #base health
            HERO_BASE_DAMAGE, #base damage
            $race,            #race
            $element          #element
        );
        $this->name = $name;
        $this->elements[$element->Name()] = $element; //adds the starting element to the array of elements;
        $this->experience = 0;
        $this->maxExperience = 100;
    }
    /**
     * function for when the user switches to another element
     * 
     *  */
    public function switchToElement(string $element)
    {
        $this->element = $this->elements[$element];
    }

    /**
     * string representation of an object
     * 
     * */
    public function toString()
    {
        $unitInfo = parent::toString();
        return $unitInfo . "Exp: $this->experience\n";
    }
}
