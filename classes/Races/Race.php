<?php
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
    public function Name(){
        return $this->name;
    }
    abstract public function dialog();
}
