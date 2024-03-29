<?php

use PHPUnit\Framework\TestCase;
final class CoordinateTest extends TestCase{

    private $coordinate;
    public function setUp(): void{
        $this->coordinate = new Classes\Rooms\Coordinate(0,0);
    }
    public function testProperties(){
        $this->assertEquals($this->coordinate->X,0);
        $this->assertEquals($this->coordinate->Y,0);
    }
    /**
     * @depends testProperties
     */
    public function testMovement(){
        $this->coordinate->moveUp();
        $this->assertEquals($this->coordinate->Y,1);
        $this->coordinate->moveDown();
        $this->assertEquals($this->coordinate->Y,0);
        $this->coordinate->moveRight();
        $this->assertEquals($this->coordinate->X,1);
        $this->coordinate->moveLeft();
        $this->assertEquals($this->coordinate->X,0);
    }
}