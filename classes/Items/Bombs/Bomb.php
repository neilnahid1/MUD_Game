<?php
namespace Classes\Items\Bombs;

use Classes\Units\Unit;

use function PHPSTORM_META\elementType;

abstract class Bomb extends Item{
    private $name;
    private $damage;
    private $elementType;

    function __construct(string $name, int $damage, Element $elementType){
        $this->name = $name;
        $this->damage = $damage;
        $this->elementType = $elementType;
    }

    abstract function applyBombDamage(Unit $enemy);
}