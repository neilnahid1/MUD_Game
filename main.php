<?php
include_once "./autoload.php";
include_once "./Classes/Settings.php";

use Classes\Elements\Earth;
use Classes\Elements\Fire;
use Classes\Elements\Water;
use Classes\Elements\Wind;
use Classes\UnitBuilder as UnitBuilder;
use Classes\Units\Hero;
use Classes\Units\Unit;

main();
function main()
{
    //initialise the hero and a sample unit
    $hero = UnitBuilder::buildHero("Elf", "Physical", "Neil", 1);
    $unit = UnitBuilder::BuildUnit("Dwarf", "Earth", 1);

    //pre populate the elements acquired by the hero
    $hero->elements['Fire'] = new Fire();
    $hero->elements['Water'] = new Water();
    $hero->elements['Earth'] = new Earth();
    $hero->elements['Wind'] = new Wind();
    battle($hero, $unit);
    echo $hero->dialog();
    die;
}

function battle(Hero $player, Unit $enemy)
{
    echo "You've encounted a battle.\n";
    while (true) {
        battleOptions($player, $enemy);
        if ($enemy->Health() <= 0) {
            victorious($player, $enemy);
            break;
        }
        $enemy->attack($player);
        if ($player->Health() <= 0) {
            echo $enemy->Name() . " has emerged victorious";
            break;
        }
    }
}

//battle options dialog that the player can choose from.
function battleOptions(Hero $hero, Unit $enemy)
{
    echo "-------------------------------------\n";
    $hero->displayInfo();
    echo "VS.\n";
    $enemy->displayInfo();
    echo "-------------------------------------\n";
    $prompt = "What would you like to do?\n";
    $prompt .= "atk  - Attack the enemy\n";
    $prompt .= "swap - swaps between acquired elements\n";
    $prompt .= "select option: ";
    $input = readline($prompt);
    echo "-------------------------------------\n";
    switch ($input) {
        case "atk":
            system('clear');
            $hero->attack($enemy);
            break;
        case "swap":
            system('clear');
            swapElementDialog($hero, $enemy);
            break;
        default:
            readline("Invalid input, try again.");
            system('clear');
            battleOptions($hero, $enemy);
    }
}

//an extension options dialog from battle options
//this will show whenever the player decides to use "swap" command
function swapElementDialog(Hero $hero, Unit $enemy)
{
    $prompt = "Which element do you want to switch?\n";
    $prompt .= "fire  - Switch to Fire\n";
    $prompt .= "water - Switch to Water\n";
    $prompt .= "wind  - Switch to Wind\n";
    $prompt .= "earth - Switch to Earth\n";
    $prompt .= "back  - back to other options \n";
    $prompt .= "Choose an option: ";
    $input = readline($prompt);
    switch ($input) {
        case "fire":
            system('clear');
            $hero->switchToElement("Fire");
            break;
        case "water":
            system('clear');
            $hero->switchToElement("Water");
            break;
        case "wind":
            system('clear');
            $hero->switchToElement("Wind");
            break;
        case "earth":
            system('clear');
            $hero->switchToElement("Earth");
            break;
        default:
            system('clear');
            readline("Invalid input, try again.");
            system('clear');
            $hero->displayInfo();
            $enemy->displayInfo();
            swapElementDialog($hero, $enemy);
    }
    echo "You swapped to " . $hero->Element()->Name() . " Element.\n";
}

//dialog for when the player wins a battle
function victorious(Hero $hero, Unit $enemy)
{
    echo "You emerged victorious.\n";
}

//dialog for when the player loses a battle
function defeated(Hero $unit)
{
    echo "You died....";
    echo "Game Over";
    return;
}
