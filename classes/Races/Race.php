<?php

namespace Classes\Races;

abstract class Race
{
    private $name;
    private $healthMultiplier;
    private $damageMultiplier;
    function __construct(float $healthMultiplier,float $damageMultiplier,string $name)
    {
        $this->healthMultiplier = $healthMultiplier;
        $this->damageMultiplier = $damageMultiplier;
        $this->name = $name;
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
