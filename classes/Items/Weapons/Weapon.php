<?php

namespace Classes\Items\Weapons;
abstract class Weapon extends Item{
    public $damage;
    function __construct(string $name,int $damage)
    {
        parent::__construct($name);
        $this->damage = $damage;
    }

    abstract function applyWeaponBonusEffects();
}