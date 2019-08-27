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

    /**
     * Constructor 
     * @param float $earthMult damage multiplier against Earth
     * 
     * @param float $waterMult damage multiplier against water elements
     * 
     * damagemultiplier against fire elements
     * @param float $fireMult
     * 
     * damage multiplier against wind elements
     * @param float $windMult
     * 
     * damage multiplier against corrupt elements
     * @param float $corruptMult
     * 
     */

    function __construct(
        float $earthMult,
        float $waterMult,
        float $fireMult,
        float $windMult,
        float $corruptMult,
        string $name
    ) {
        var_dump("sd");
        $this->earthDamageMultiplier      = $earthMult;
        $this->waterDamageMultiplier      = $waterMult;
        $this->fireDamageMultiplier       = $fireMult;
        $this->windDamageMultiplier       = $windMult;
        $this->corruptionDamageMultiplier = $corruptMult;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function Name(): string
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
