<?php

namespace Classes\Elements;

/**
 * strong against water weak against earth
 */
class Wind extends Element
{
    function __construct()
    {
        # 1.0 means 100% damage reduction
        # negative values amplifies damage
        parent::__construct(
            "Wind",  # name of the element
            0.0,     # neutral resistance percent
            -1.0,    # earth resistance percent
            0.75,    # water resistance percent
            0.0,     # fire resistance percent
            1.0,     # wind resistance percent
            -0.50    # corruption resistance percent
        );
    }
    /**
     * returns the appropriate damage based on defenders resistance to this element
     */
    public function applyElementResistance(\Classes\Units\Unit $attacker, \Classes\Units\Unit $defender): int
    {
        $damage = $attacker->Damage();
        return $damage - ($damage * $defender->Element()->windResistance);
    }
    public function dialog(): string
    {
        return "Woosh woosh, I'm a wind. Woosh woosh.";
    }
}
