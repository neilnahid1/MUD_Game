<?php

namespace Classes\Units;

use Classes\Elements\Element;
use Classes\Races\Race;

class Unit
{
    protected $name;
    private $damage;
    private $health;
    private $race;
    protected $element;

    public function __construct(
        int $health,
        int $damage,
        Race $race,
        Element $element
    ) {
        $this->name = $element->Name() . " " . $race->Name();
        $this->health = $health;
        $this->damage = $damage;
        $this->race = $race;
        $this->element = $element;
    }
    # GETTER METHODS
    public function Health()
    {
        return $this->health;
    }
    public function Name()
    {
        return $this->name;
    }
    public function Damage()
    {
        return $this->damage;
    }
    public function Element(): Element
    {
        return $this->element;
    }
    public function Race(): Race
    {
        return $this->race;
    }
    # END OF GETTERS
    # START OF SETTERS
    # END OF SETTERS
    public function toString()
    {
        $description = "Name: $this->name\n";
        $description .= "Health: $this->health\n";
        $description .= "Damage: $this->damage\n";
        return $description;
    }
    public function displayInfo()
    {
        echo "\033[0;36m Name: $this->name\n\033[0m";
        echo "\033[0;32m Health: $this->health\n\033[0m";
        echo "\033[0;31m Damage: $this->damage\n\033[0m";
        echo "\033[0;34m Element: {$this->element->Name()}\n\033[0m";
        echo "\033[1;33m Race: {$this->race->Name()}\n\033[0m";
    }
    /**
     * returns a string of dialog based on race and element
     * 
     */
    public function dialog()
    {
        return $this->race->dialog() . "\n" . $this->element->dialog();
    }
    /**
     * attacks and damages enemy
     * @param Unit $enemy the unit that will be attacked.
     */
    public function attack(Unit $enemy)
    {
        echo "$this->name hits " . $enemy->Name() . "\n";
        $damage =  $this->element->applyElementResistance($this, $enemy); // applies the element resistance
        echo "\033[0;31m It deals $damage.\n\033[0m";
        $enemy->receiveDamage($damage);
    }

    /**
     * receives damage whenever it is being attacked
     * @param int $damage the damage to be deducted from the health
     */
    function receiveDamage(int $damage)
    {
        $this->health -= $damage;
        if ($this->health <= 0)
            echo $this->name . " is dead.\n";
    }
}
