<?php
require('./Element.php');
require('./Interface/ElementalEffects.php');
class Earth implements ElementalEffects
{
    public function applyElementalEffectsDamage(\double $damage, \Element $element)
    {
        switch ($element->name) {
            case "Water":
                return 0;
                break;
            case "Wind":
                return $damage / 2;
                break;
            case "Fire":
                return $damage * 2;
                break;
            default:
                return $damage;
        }
    }
}
