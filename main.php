<?php
include_once "./autoload.php";
include_once "./Classes/Settings.php";

use Classes\Elements\Earth;
use Classes\Elements\Fire;
use Classes\Elements\Water;
use Classes\Elements\Wind;
use Classes\Managers\BattleManager as BattleManager;
use Classes\UnitBuilder as UnitBuilder;
use Classes\Units\Hero;
use Classes\Units\Unit;

main();
function main()
{
    //initialise the hero and a sample unit
    $hero = UnitBuilder::buildHero("Elf", "Physical", "Neil");
    $unit = UnitBuilder::BuildUnit("Dwarf", "Earth");
    
    //pre populate the elements acquired by the hero
    $hero->elements['Fire'] = new Fire();
    $hero->elements['Water'] = new Water();
    $hero->elements['Earth'] = new Earth();
    $hero->elements['Wind'] = new Wind();
    BattleManager::battle($hero,$unit);
    echo $hero->dialog();
    die;
}
