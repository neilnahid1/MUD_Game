<?php

declare(strict_types=1);

use Classes\Elements\Wind;
use Classes\Races\Dwarf;
use Classes\Races\Race;
use Classes\Units\Unit;
use PHPUnit\Framework\TestCase;
/**
 * @property Unit $unit
 */
final class UnitTest extends TestCase{

    private $unit;
    public function setUp(): void
    {
        $health = 5;
        $damage = 5;
        $race = new Dwarf();
        $element = new Wind();
        $this->unit = new Unit($health,$damage,$race,$element);
    }

    public function testPropertyValues(): void{
        $this->assertNotNull($this->unit->Element());
        $this->assertNotNull($this->unit->Race());
        $this->assertNotNull($this->unit->Race());
        $this->assertEquals($this->unit->Name(),'Wind Dwarf');
        $this->assertEquals($this->unit->Element()->Name(), 'Wind');
        $this->assertEquals($this->unit->Damage(),5.0);
        $this->assertEquals($this->unit->Health(),7.5);
    }
    /**
     * @depends testPropertyValues
     */
    public function testDialog(){
        $this->assertNotNull($this->unit->dialog());
    }
}