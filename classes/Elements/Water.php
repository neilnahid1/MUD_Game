<?php

namespace Classes\Elements;

/**
 * water is strong against fire weak against corruption
 */
class Water extends Element
{

    function __construct()
    {
        # 1.0 means 100% damage reduction
        # negative values amplifies damage
        parent::__construct(
            "Water", # name of the element
            0.0,     # neutral resistance percent
            0.0,     # earth resistance percent
            1.0,     # water resistance percent
            0.75,    # fire resistance percent
            -1.0,    # wind resistance percent
            -0.5     # corruption resistance percent
        );
    }
    /**
     * returns the appropriate damage based on defenders resistance to this element
     */
    public function applyElementResistance(\Classes\Units\Unit $attacker, \Classes\Units\Unit $defender): int
    {
        $damage = $attacker->Damage();
        return $damage - ($damage * $defender->Element()->waterResistance);
    }
    public function dialog(): string
    {
        return "You will be cleansed by the might of the waters!";
    }
}
