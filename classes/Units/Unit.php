<?php

namespace Classes\Units;

use Classes\Elements\Element;
use Classes\Races\Race;

class Unit
{
    private $name;
    private $health;
    private $damage;
    private $level;
    private $race;
    private $element;
    public function __construct(int $health, int $damage, int $level, Race $race, Element $element)
    {
        $this->name = $element->Name() . " " . $race->Name();
        $this->health = $health * $race->HealthMultiplier() + ($level > 1 ? 25 * $level : 0); //if level is 1, add no bonus
        $this->damage = $damage * $race->DamageMultiplier() + ($level > 1 ? 2 * $level : 0); //if level is 1, add no bonus
        $this->level = $level;
        $this->race = $race;
        $this->element = $element;
    }

    function attack(Unit $enemy)
    {
        echo "$this->name hits " . $enemy->getName();
        echo "\n$this->name dealt $this->damage\n";
        $enemy->receiveDamage($this->damage);
    }
    function receiveDamage(int $damage)
    {
        $this->health -= $damage;
        if ($this->health <= 0)
            echo $this->name . " is dead.";
    }
    function getHealth()
    {
        return $this->health;
    }
    function getName()
    {
        return $this->name;
    }
    public function toString(){
        $description = "Name: $this->name\n";
        $description .= "Health: $this->health\n";
        $description .= "Damage: $this->damage\n";
        return $description;
    }
}
