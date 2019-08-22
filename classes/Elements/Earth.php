<?php
require('./Element.php');
require('./Interface/Element.php');
class Earth implements Element
{
    public function applyElementalEffectsDamage(\double $damage, \Element $element)
    {
        switch ($element->name) {
            case "Earth":
                return 0;
                break;
            case "Fire":
                return $damage / 2;
                break;
            case "Wind":
                return $damage * 2;
                break;
            default:
                return $damage;
        }
    }
}
