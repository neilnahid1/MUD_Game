<?php

namespace Classes\Managers;

use Classes\Units\Hero;
use Classes\Units\Unit;


abstract class BattleManager
{
    public static function battle(Hero $hero, Unit $enemy)
    {
        echo "{$hero->Name()} have encountered an enemy.\n";
        while (true) {
            $hero->battleOptions($enemy);
            sleep(1);
            if ($enemy->Health() <= 0) {
                self::victorious($hero);
                break;
            }
            $enemy->attack($hero);
            sleep(1);
            if ($hero->Health() <= 0) {
                echo $enemy->Name() . " has emerged victorious";
                self::defeated($hero);
                break;
            }
        }
    }
    /**
     * dialog for when the player wins a battle
     *  */
    private static function victorious(Hero $hero)
    {
        echo "{$hero->Name()} emerged victorious.\n";
        sleep(1);
    }

    //dialog for when the player loses a battle
    private static function defeated(Hero $hero)
    {
        echo "You died....";
        echo "Game Over";
        sleep(1);
        return;
    }
}
