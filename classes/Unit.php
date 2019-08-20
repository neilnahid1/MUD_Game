<?php

class Unit
{
    private $name;
    private $health;
    private $damage;
    private $level;
    function __construct(string $name, int $health, int $damage, int $level)
    {
        $this->name = $name;      //if level is 1, add no bonus
        $this->health = $health + ($level > 1 ? 25 * $level : 0);
        $this->damage = $damage + ($level > 1 ? 25 * $level : 0);
        $this->level = $level;
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
}
