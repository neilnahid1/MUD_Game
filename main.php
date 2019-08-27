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
    $hero = UnitBuilder::buildHero("Elf", "Basic", "Neil", 1);
    $unit = UnitBuilder::BuildUnit("Dwarf", "Earth", 1);
    $hero->elements['Fire'] = new Fire();
    $hero->elements['Water'] = new Water();
    $hero->elements['Earth'] = new Earth();
    $hero->elements['Wind'] = new Wind();
    battle($hero, $unit);
}

function battle(Hero $player, Unit $enemy)
{
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
function battleOptions(Hero $hero, Unit $enemy)
{
    echo "-------------------------------------\n";
    echo $hero->toString();
    echo "VS.\n";
    echo $enemy->toString();
    $prompt = "What would you like to do?\n";
    $prompt .= "atk      - Attack the enemy\n";
    $prompt .= "swap   - swaps between acquired elements\n";
    $prompt .= "run      - Run away from battle\n";
    $prompt .= "select option: ";
    $input = readline($prompt);
    echo "-------------------------------------\n";
    switch ($input) {
        case "atk":
            $hero->attack($enemy);
            break;
        case "swap":
            swapElementDialog($hero, $enemy);
            break;
        default:
            readline("Invalid input, try again.");
            system('clear');
            battleOptions($hero, $enemy);
    }
}
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
            $hero->switchToElement("Fire");
            break;
        case "water":
            $hero->switchToElement("Water");
            break;
        case "wind":
            $hero->switchToElement("Wind");
            break;
        case "earth":
            $hero->switchToElement("Earth");
            break;
        default:
            readline("Invalid input, try again.");
            system('clear');
            echo $hero->toString();
            echo $enemy->toString();
            swapElementDialog($hero, $enemy);
    }
    echo "You swapped to " . $hero->Element()->Name() . " Element.";
}

function victorious(Hero $hero, Unit $enemy)
{
    echo "You emerged victorious.\n";
    echo "You earned " . $enemy->ExpDropAmount() . " experience\n";
    $hero->addExperience($enemy->ExpDropAmount());
}
function defeated(Hero $unit)
{
    echo "You died....";
    echo "Game Over";
    return;
}
