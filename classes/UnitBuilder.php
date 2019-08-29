<?php

namespace Classes;

use Classes\Elements\Basic;
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

    //function for creating a new unit object
    public static function BuildUnit(
        string $race,
        string $element
    ): Unit {
        $raceObject = self::getRaceInstance($race);
        $elementObject = self::getElementInstance($element);
        return new Unit(UNIT_BASE_HEALTH, UNIT_BASE_DAMAGE, $raceObject, $elementObject);
    }

    //function for creating a new hero object
    public static function buildHero(string $race, string $element,string $name): Hero {
        $raceObject = self::getRaceInstance($race);
        $elementObject = self::getElementInstance($element);
        return new Hero($raceObject, $elementObject, $name);
    }

    //returns an instance of race based on given parameters
    //the returned value will be used for creating new Unit/Hero object
    private static function getRaceInstance(string $race): Race
    {
        switch ($race) {
            case "Elf":
                return new Elf();
            case "Human":
                return new Human();
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
            case "Fire":
                return new Fire();
            case "Water":
                return new Water();
            case "Corruption":
                return new Corruption();
            case "Earth":
                return new Earth();
            case "Wind":
                return new Wind();
            case "Basic":
                return new Basic();
            default:
                echo "invalid element";
                die;
        }
    }
}
