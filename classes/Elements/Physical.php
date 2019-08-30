<?php

namespace Classes\Elements;

/**
 * physical has normal resistance to earth,water,fire,wind but is weak against corruption
 */
class Physical extends Element
{
    function __construct()
    {
        # 1.0 means 100% damage reduction
        parent::__construct(
            "Physical", # name of the element
            0.0, # physical resistance percent
            0.0, # earth resistance percent
            0.0, # water resistance percent
            0.0, # fire resistance percent
            0.0, # wind resistance percent
            0.0,  # corruption resistance percent
        );
    }

    /**
     * dialog for units with this element
     */
    public function dialog() : string
    {
        return "Physical element.";
    }

    /**
     * returns the appropriate damage based on defenders resistance to this element
     */
    public function applyElementResistance(\Classes\Units\Unit $attacker, \Classes\Units\Unit $defender) : int
    {
        $damage = $attacker->Damage();
        return $damage - ($damage * $defender->Element()->physicalResistance);
    }
}
