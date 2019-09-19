<?php

use PHPUnit\Framework\TestCase;

/**
 * @property Map $map the object of type map to be tested
 */
class MapTest extends TestCase{

    private $map;
    public function setUp():void{
        $this->map = new Classes\Rooms\Map(5,5,26);
    }


    public function testProperties(){
        $this->assertEquals($this->map->sizeX,5);
        $this->assertEquals($this->map->sizeY,5);
        $count = 0;
        foreach($this->map->rooms as $type){
            $count += count($type);
        }
        $this->assertLessThanOrEqual($count,25);
    }
}