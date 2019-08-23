<?php
include_once "./autoload.php";

use Classes\UnitBuilder as UnitBuilder;

start();
function start()
{
    $unit = UnitBuilder::BuildUnit("Elf", "Fire");
    $unit2 = UnitBuilder::BuildUnit("Dwarf", "Corruption");
    $unit2->attack($unit);
    echo $unit->toString();
    echo $unit2->toString();
}

function battle(Hero $player, Unit $enemy){
    $player->options();
    $enemy->attack();
}