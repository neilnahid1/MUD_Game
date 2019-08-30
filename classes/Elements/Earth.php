<?php

namespace Classes\Elements;

use Classes\Units\Unit;

/**
 * Earth Element is good against wind but weak against fire and corruption
 */
class Earth extends Element
{
    function __construct()
    {
        # 1.0 means 100% damage reduction
        # negative values amplifies damage
        parent::__construct(
            "Earth", # name of the element
            0.0,     # physical resistance percent
            1.0,     # earth resistance percent
            0.0,     # water resistance percent
            -1.0,    # fire resistance percent
            0.0,     # wind resistance percent
            -0.50    # corruption resistance percent
        );
    }
    /**
     * returns the appropriate damage based on defenders resistance to this element
     */
    public function applyElementResistance(Unit $attacker, Unit $defender) : int
    {
        $damage = $attacker->Damage();
        return $damage - ($damage * $defender->Element()->earthResistance);
    }
    public function dialog() : string
    {
        return "I have the nature by my side.";
    }
}
