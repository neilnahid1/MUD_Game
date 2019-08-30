<?php

namespace Classes\Elements;

use Classes\Units\Unit;

/**
 * Corruption Element is strong against all elements and has no counter
 */
class Corruption extends Element
{
    function __construct()
    {
        # 1.0 means 100% damage reduction
        # negative values amplifies damage
        parent::__construct(
            "Corruption", # name of the element
            0.50, # physical resistance percent
            0.50, # earth resistance percent
            0.50, # water resistance percent
            0.50, # fire resistance percent
            0.50, # wind resistance percent
            1.0   # corruption resistance percent
        );
    }
    /**
     * returns the appropriate damage based on defenders resistance to this element
     */
    public function applyElementResistance(Unit $attacker, Unit $defender) : int
    {
        $damage = $attacker->Damage();
        return $damage - ($damage * $defender->Element()->corruptionResistance);
    }
    public function dialog(): string
    {
        return "I have the power of corruption!";
    }
}
