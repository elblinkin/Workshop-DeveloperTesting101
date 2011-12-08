<?php

require_once 'Calculator.php';

class DataDrivenTest extends PHPUnit_Framework_TestCase {

    private $calculator;
    
    function setUp() {
        parent::setUp();
        $this->calculator = new Calculator();
    }
    
    function testAdd_bad() {
        $values = array(-1, 0, 1);
        foreach ($values as $a) {
            foreach ($values as $b) {
                $this->assertEquals($a + $b, $this->calculator->add($a, $b));
            }
        }
    }
    
    function testAdd_notAsBad() {
        $tests = array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(0, -1, -1),
            array(1, 1, 2),
            array(-1, -1, -2),
            array(1, -1, 0),
        );
        foreach ($tests as $test) {
            $this->assertEquals(
                $test[2],
                $this->calculator->add($test[0], $test[1])
            );
        }
    }
    
    /**
     * @dataProvider provideAddTests
     */
    function testAdd_best($a, $b, $expected) {
        $this->assertEquals($expected, $this->calculator->add($a, $b));
    }
    
    function provideAddTests() {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(0, -1, -1),
            array(1, 1, 2),
            array(-1, -1, -2),
            array(1, -1, 0),
        );
    }
}