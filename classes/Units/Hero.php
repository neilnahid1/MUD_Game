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
    private $experience;
    private $maxExperience;
    public $elements;
    function __construct(Race $race, Element $element, string $name, int $level)
    {
        parent::__construct(
            HERO_BASE_HEALTH, #base health
            HERO_BASE_DAMAGE, #base damage
            1,                #level
            $race,            #race
            $element          #element
        );
        $this->name = $name;
        $this->elements[$element->Name()] = $element; //adds the starting element to the array of elements;
        $this->experience = 0;
        $this->maxExperience = 100;
    }


    /**
     * 
     * adds experience to the hero
     * 
     * this is used whenever the hero completes a challenge
     * 
     * challenges may come in a form of battle or solving a riddle
     */
    public function addExperience(int $exp)
    {
        $this->experience += $exp;
        while ($this->experience >= $this->maxExperience) {
            $this->levelUp();
        }
    }

    /**
     * 
     * used to increment the hero's level when experience >= maxExperience
     * 
     * */
    private function levelUp()
    {
        $this->level += 1;
        $this->experience -= $this->maxExperience;
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
