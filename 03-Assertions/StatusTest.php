<?php

class StatusTest extends PHPUnit_Framework_TestCase {

    public function testPass() {
        $this->assertTrue(true, "This is a passing test");
    }
    
    public function testFail() {
        $this->fail("This is a failing test");
    }
    
    public function testError() {
        throw new Exception("Throwing an uncaught Exception");
    }
    
    public function testIncomplete() {
        $this->markTestIncomplete("Still working on this test");
    }
    
    public function testSkipped() {
        $this->markTestSkipped("Test broken right now, skipping");
    }
}