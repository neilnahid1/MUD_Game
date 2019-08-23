<?php

namespace Classes\Races;

abstract class Race
{
    private $name;
    private $healthMultiplier;
    private $damageMultiplier;
    function __construct($healthMultiplier, $damageMultiplier)
    {
        $this->healthMultiplier = $healthMultiplier;
        $this->damageMultiplier = $damageMultiplier;
    }
    public function Name()
    {
        return $this->name;
    }
    public function HealthMultiplier()
    {
        return $this->healthMultiplier;
    }
    public function DamageMultiplier()
    {
        return $this->damageMultiplier;
    }
    abstract public function dialog();
}
