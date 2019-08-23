<?php

namespace Classes\Elements;

abstract class Element
{
    private $name;
    private $earthDamageMultiplier;
    private $waterDamageMultiplier;
    private $fireDamageMultiplier;
    private $windDamageMultiplier;
    private $corruptionDamageMultiplier;
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
    public abstract function dialog();
}