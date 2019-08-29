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
        $damage =  $this->element->applyElementalDamage($this, $enemy);
        echo "It deals $damage.\n";
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
            echo $this->name . " is dead.";
    }
}
