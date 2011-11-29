<?php

class ExceptionTest extends PHPUnit_Framework_TestCase {

    public function testException_oldSchool() {
        try {
            throw new Exception("My exception");
            $this->fail("Should throw exception");
        } catch (Exception $e) {
            $this->assertEquals("My exception", $e->getMessage());
        }
    }
    
    public function testException_betterOldSchool() {
        $thrown_exception = false;
        try {
            throw new Exception();
        } catch (Exception $e) {
            $thrown_exception = true;
        }
        $this->assertTrue($thrown_exception, "Expected an exception to be thrown");
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testException_expectedException() {
        throw new InvalidArgumentException("My exception");
    }
    
    /**
     * @expectedExceptionMessage My exception
     */
    public function testException_expectedExceptionMessage() {
        throw new InvalidArgumentException("My exception");
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage My exception
     */
    public function testException_bothAnnotations() {
        throw new InvalidArgumentException("My exception");
    }
}