<?
abstract class Element
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
}

class Fire extends Element implements ElementType
{
    function __construct($name)
    {
        parent::__construct($name);
    }
    public function applyElementalEffectsDamage(\double $damage, \Element $element)
    {
        if ($element->elementType == "Fire") { }
    }
}
interface ElementType
{
    public function applyElementalEffectsDamage(double $damage, Element $element);
    public function applyResistance(double $damage, Element $element);
}
