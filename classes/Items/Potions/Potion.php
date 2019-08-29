<?php
namespace Classes\Items\Potions;
abstract class Potion extends Item{
    function __construct($name)
    {
        parent::__construct($name);
    }
    abstract function applyPotionEffects(Unit $unit);
}