<?php

namespace Classes\Units;

use Classes\Elements\Element;
use Classes\Races\Race;

class Unit
{
    protected $name;
    private $baseHealth;
    private $damage;
    private $health;
    private $baseDamage;
    private $level;
    private $race;
    protected $element;
    private $experienceDrop;

    public function __construct(
        int $baseHealth,
        int $baseDamage,
        int $level,
        Race $race,
        Element $element
    ) {
        $this->name = $element->Name() . " " . $race->Name();
        $this->baseHealth = $baseHealth;
        $this->baseDamage = $baseDamage;
        $this->setLevel($level);
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
    public function ExpDropAmount(): int
    {
        return $this->experienceDrop;
    }
    # END OF GETTERS
    # START OF SETTERS
    private function setLevel(int $level)
    {
        $this->level = $level;
        $this->adjustDamageBasedOnLevel();
        $this->adjustHealthBasedOnLevel();
        $this->adjustExperienceDropAmount();
    }
    # END OF SETTERS
    public function toString()
    {
        $description = "Name: $this->name\n";
        $description .= "Health: $this->health\n";
        $description .= "Damage: $this->damage\n";
        $description .= "Level: $this->level\n";
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
     * adjusts the units damage based on level
     */
    private function adjustDamageBasedOnLevel()
    {
        $this->damage  = $this->baseDamage;
        $bonusDamage   = $this->baseDamage * DAMAGE_LEVELUP_MULTIPLIER; // bonus damage per level
        $this->damage  += $bonusDamage * $this->level;
    }

    /**
     * adjusts health based on level
     */
    private function adjustHealthBasedOnLevel()
    {
        $this->health = $this->baseHealth;
        $bonusHealth  = $this->baseHealth * DAMAGE_LEVELUP_MULTIPLIER; // bonus health per level
        $this->health += $bonusHealth * $this->level;
    }
    /**
     * adjusts the experience that the unit drops whenever it is killed. 
     * amount is based on level
     * 
     */
    function adjustExperienceDropAmount()
    {
        $this->experienceDrop = $this->level * XP_DROP_RATE;
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
