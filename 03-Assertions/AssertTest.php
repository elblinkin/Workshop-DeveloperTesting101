<?php

class AssertTest extends PHPUnit_Framework_TestCase {

    public function testAssertTrue_pass() {
        $this->assertTrue(true, "This is a passing test");
    }
    
    public function testAssertTrue_failsNoMessage() {
        $this->assertTrue(false);
    }
    
    public function testAssertTrue_failsWithMessage() {
        $this->assertTrue(false, "We are making this fail by giving a false to assertTrue()");
    }

    /*
    public function testAssertFalse_pass() {
        $this->assertFalse(false, "This is a passing test");
    }
    
    public function testAssertFalse_failsNoMessage() {
        $this->assertFalse(true);
    }
    
    public function testAssertFalse_failsWithMessage() {
        $this->assertFalse(true, "We are making this fail by giving a true to assertFalse()");
    }
    */
    
    public function testAssertEquals_pass() {
        $expected = 1;
        $actual = 1;
        $this->assertEquals($expected, $actual, "This is a passing test");
    }
    
    public function testAssertEquals_failsNoMessage() {
        $expected = 1;
        $expected = 2;
        $this->assertEquals($expected, $actual);
    }
    
    public function testAssertEquals_failsWithMessage() {
        $expected = 1;
        $actual = 2;
        $this->assertEquals($expected, $actual, "We are making this fail by asserting that 2 is 1");
    }
}