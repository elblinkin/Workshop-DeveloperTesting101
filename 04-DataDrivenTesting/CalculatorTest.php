<?php

require_once 'Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {

    private $calculator;
    
    function setUp() {
        parent::setUp();
        $this->calculator = new Calculator();
    }
    
    function testAdd_bothZero() {
        $this->assertEquals(0, $this->calculator->add(0, 0));
    }
    
    function testAdd_onePositive() {
        $this->assertEquals(1, $this->calculator->add(0, 1));
    }
    
    function testAdd_oneNegative() {
        $this->assertEquals(-1, $this->calculator->add(0, -1));
    }
    
    function testAdd_bothPositive() {
        $this->assertEquals(2, $this->calculator->add(1, 1));
    }
    
    function testAdd_bothNegative() {
        $this->assertEquals(-2, $this->calculator->add(-1, -1));
    }
    
    function testAdd_onePositiveOneNegative() {
        $this->assertEquals(0, $this->calculator->add(1, -1));
    }
}