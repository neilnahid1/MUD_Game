<?php

namespace Classes\Elements;

use Classes\Units\Unit;

abstract class Element
{
    private $name;
    public $earthDamageMultiplier;
    public $waterDamageMultiplier;
    public $fireDamageMultiplier;
    public $windDamageMultiplier;
    public $corruptionDamageMultiplier;
    function __construct($earthMult, $waterMult, $fireMult, $windMult, $corruptMult, $name)
    {
        $this->earthDamageMultiplier = $earthMult;
        $this->waterDamageMultiplier = $waterMult;
        $this->fireDamageMultiplier = $fireMult;
        $this->windDamageMultiplier = $windMult;
        $this->corruptionDamageMultiplier = $corruptMult;
        $this->name = $name;
    }
    public function Name()
    {
        return $this->name;
    }
    public function applyElementalDamage(Unit $attacker, Unit $defender)
    {
        switch ($defender->Element()->Name()) {
            case "Fire":
                return $attacker->Damage() * $attacker->Element()->fireDamageMultiplier;
            case "Water":
                return $attacker->Damage() * $attacker->Element()->waterDamageMultiplier;
            case "Corruption":
                return $attacker->Damage() * $attacker->Element()->corruptionDamageMultiplier;
            case "Wind":
                return $attacker->Damage() * $attacker->Element()->windDamageMultiplier;
            case "Earth":
                return $attacker->Damage() * $attacker->Element()->earthDamageMultiplier;
            case "Basic":
                return $attacker->Damage();
            default:
                echo "Invalid element|applyElementalDamage";
                die;
        }
    }
    public abstract function dialog();
}
