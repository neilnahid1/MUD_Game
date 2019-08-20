<?php

require "../mud/classes/Unit.php";

$player = new Unit("Neil", 1000, 25, 1);
while ($player->getHealth() > 0) {
    battle($player, new Unit("Ogre", 1000, 11, 1));
}
echo "game over. :(";
function battle(Unit $unit1, Unit $unit2)
{
    while(true){
        if($unit1->getHealth()>0)
        $unit1->attack($unit2);
        else
        break;
        if($unit2->getHealth()>0)
        $unit2->attack($unit1);
        else
        break;
    }
}
