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
    public function battleOptions(Unit $enemy)
    {
        echo "-------------------------------------\n";
        $this->displayInfo();
        echo "VS.\n";
        $enemy->displayInfo();
        echo "-------------------------------------\n";
        $prompt = "What would you like to do?\n";
        $prompt .= "atk  - Attack the enemy\n";
        $prompt .= "swap - swaps between acquired elements\n";
        $prompt .= "select option: ";
        $input = readline($prompt);
        echo "-------------------------------------\n";
        switch ($input) {
            case "atk":
                system('clear');
                $this->attack($enemy);
                break;
            case "swap":
                system('clear');
                $this->swapElementDialog($enemy);
                break;
            default:
                readline("Invalid input, try again.");
                system('clear');
                $this->battleOptions($enemy);
        }
    }

    /**
     * an extended options dialog from battle options
     * this will show whenever the player decides to use "swap" command
     */
    function swapElementDialog(Unit $enemy)
    {
        $prompt  = "Which element do you want to switch? \n";
        $prompt .= "fire  - Switch to Fire \n";
        $prompt .= "water - Switch to Water \n";
        $prompt .= "earth - Switch to Earth \n";
        $prompt .= "wind  - Switch to Wind\n";
        $prompt .= "-------------------------\n";
        $prompt .= "back - go back to other options\n";
        $prompt .= "Choose an option: ";
        $input = readline($prompt);
        switch ($input) {
            case "fire":
                system('clear');
                $this->switchToElement("Fire");
                break;
            case "water":
                system('clear');
                $this->switchToElement("Water");
                break;
            case "wind":
                system('clear');
                $this->switchToElement("Wind");
                break;
            case "earth":
                system('clear');
                $this->switchToElement("Earth");
                break;
            case "back":
                system('clear');
                $this->battleOptions($enemy);
                return;
            default:
                system('clear');
                readline("Invalid input, try again.");
                system('clear');
                $this->swapElementDialog($enemy);
                return;
        }
        echo "You swapped to " . $this->Element()->Name() . " Element.\n";
    }
}
