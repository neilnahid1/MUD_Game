<?php

namespace Classes\Elements;

use Classes\Units\Unit;

abstract class Element
{
    protected $name;
    protected $physicalResistance;
    protected $earthResistance;
    protected $waterResistance;
    protected $fireResistance;
    protected $windResistance;
    protected $corruptionResistance;
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
        string $name,
        float $physicalResistance,
        float $earthResistance,
        float $waterResistance,
        float $fireResistance,
        float $windResistance,
        float $corruptionResistance
    ) {
        $this->physicalResistance   = $physicalResistance;
        $this->earthResistance      = $earthResistance;
        $this->waterResistance      = $waterResistance;
        $this->fireResistance       = $fireResistance;
        $this->windResistance       = $windResistance;
        $this->corruptionResistance = $corruptionResistance;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function Name(): string
    {
        return $this->name;
    }
    public abstract function applyElementResistance(Unit $attacker, Unit $defender): int;
    // switch ($defender->Element()->Name()) {
    //     case "Fire":
    //         return $attacker->Damage() * $attacker->Element()->fireDamageMultiplier;
    //     case "Water":
    //         return $attacker->Damage() * $attacker->Element()->waterDamageMultiplier;
    //     case "Corruption":
    //         return $attacker->Damage() * $attacker->Element()->corruptionDamageMultiplier;
    //     case "Wind":
    //         return $attacker->Damage() * $attacker->Element()->windDamageMultiplier;
    //     case "Earth":
    //         return $attacker->Damage() * $attacker->Element()->earthDamageMultiplier;
    //     case "Basic":
    //         return $attacker->Damage();
    //     default:
    //         echo "Invalid element|applyElementalDamage";
    //         die;
    public abstract function dialog(): string;
}
