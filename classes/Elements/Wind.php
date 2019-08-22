<?php
require('./Element.php');
require('./Interface/ElementalEffects.php');
class Wind implements ElementalEffects
{
    public function applyElementalEffectsDamage(\double $damage, \Element $element)
    {
        switch ($element->name) {
            case "Wind":
                return 0;
                break;
            case "Earth":
                return $damage / 2;
                break;
            case "Water":
                return $damage * 2;
                break;
            default:
                return $damage;
        }
    }
}
