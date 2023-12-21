<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends  TestCase{

    private $calculator;

    public function testAdd(){
        $this->calculator = new Calculator;
        $result = $this->calculator->add(34,10);

        $this->assertEquals(44, $result);
    }

}