<?php

namespace Classes\Elements;

/**
 * Fire counters Earth but weak against water
 */
class Fire extends Element
{

    function __construct()
    {
        # 1.0 means 100% damage reduction
        # negative values amplifies damage
        parent::__construct(
            "Fire", # name of the element
            0.0,    # neutral resistance percent
            0.75,   # earth resistance percent
            -1.0,   # water resistance percent
            1.0,    # fire resistance percent
            0.0,    # wind resistance percent
            -0.50   # corruption resistance percent
        );
    }
    /**
     * returns the appropriate damage based on defenders resistance to this element
     */
    public function applyElementResistance(\Classes\Units\Unit $attacker, \Classes\Units\Unit $defender) : int
    {
        $damage = $attacker->Damage();
        return $damage - ($damage * $defender->Element()->fireResistance);
    }
    public function dialog() : string
    {
        return "Fiery inferno!";
    }
}
