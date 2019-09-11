<?php

namespace Classes;

use Classes\Elements\Physical;
use Classes\Elements\Corruption;
use Classes\Elements\Earth;
use Classes\Elements\Element;
use Classes\Elements\Fire;
use Classes\Elements\Water;
use Classes\Elements\Wind;
use Classes\Races\Dwarf;
use Classes\Races\Elf;
use Classes\Races\Human;
use Classes\Races\Race;
use Classes\Units\Hero;
use Classes\Units\Unit;

abstract class UnitBuilder
{

    /**
     * @param string $race choices: "Elf", "Human", "Dwarf"
     * @param string $element choices: "Fire","Earth","Wind","Earth"
     * @param string $name name of your character
     */
    public static function BuildUnit(string $race, string $element): Unit
    {
        $raceObject = self::getRaceInstance($race);
        $elementObject = self::getElementInstance($element);
        return new Unit(UNIT_BASE_HEALTH, UNIT_BASE_DAMAGE, $raceObject, $elementObject);
    }
    public static function BuildRandomUnit(): Unit
    {
        //generate a random race
        $raceObject = self::getRaceInstance((string) random_int(0, 2));
        $elementObject = self::getElementInstance((string) random_int(0, 6));
        return new Unit(UNIT_BASE_HEALTH, UNIT_BASE_DAMAGE, $raceObject, $elementObject);
    }
    /**
     * @param string $race choices: "Elf", "Human", "Dwarf"
     * @param string $element choices: "Fire","Earth","Wind","Earth"
     * @param string $name name of your character
     */
    public static function buildHero(string $race, string $element, string $name): Hero
    {
        $raceObject = self::getRaceInstance($race);
        $elementObject = self::getElementInstance($element);
        return new Hero($raceObject, $elementObject, $name);
    }

    //returns an instance of race based on given parameters
    //the returned value will be used for creating new Unit/Hero object
    private static function getRaceInstance(string $race): Race
    {
        switch ($race) {
            case "0":
            case "Elf":
                return new Elf();
            case "1":
            case "Human":
                return new Human();
            case "2":
            case "Dwarf":
                return new Dwarf();
            default:
                echo "invalid race";
                die;
        }
    }

    //returns an instance of element based on given element
    //the returned value will be used for creating new Unit/Hero object
    private static function getElementInstance(string $element): Element
    {
        switch ($element) {
            case "0":
            case "Fire":
                return new Fire();
            case "1":
            case "Water":
                return new Water();
            case "2":
            case "Corruption":
                return new Corruption();
            case "3":
            case "Earth":
                return new Earth();
            case "4":
            case "Wind":
                return new Wind();
            case "5":
            case "Physical":
                return new Physical();
            case "6":
            default:
                echo "invalid element";
                die;
        }
    }
}
