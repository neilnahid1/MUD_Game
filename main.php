<?php
include_once "./autoload.php";
include_once "./Classes/Settings.php";

use Classes\UnitBuilder as UnitBuilder;

main();
function main()
{
    $unit = UnitBuilder::BuildUnit("Human", "Basic");
    $unit2 = UnitBuilder::BuildUnit("Dwarf", "Fire");
    $unit2->attack($unit);
    echo $unit2->dialog();
}

function battle(Hero $player, Unit $enemy)
{
    $player->options();
    $enemy->attack();
}