<?php
require('./Element.php');
require('./Interface/ElementType.php');
class Fire extends Element implements ElementType
{
    function __construct()
    {
        parent::__construct("Fire");
    }

    public function applyElementalEffectsDamage(\double $damage, \Element $element)
    {
        switch ($element->name) {
            case "Fire":
                return 0;
                break;
            case "Water":
                return $damage / 2;
                break;
            case "Earth":
                return $damage * 2;
                break;
            default:
                return $damage;
        }
    }
}
