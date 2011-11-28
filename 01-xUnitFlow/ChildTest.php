<?php

require_once 'ParentTest.php';

class ChildTest extends ParentTest {
    
    protected function setUp() {
        //parent::setUp();
        print "executed set up\n";
    }
    
    protected function tearDown() {
        print "executed tear down\n";
        parent::tearDown();
    }
    
    /*
    public function testOne() {
        print "executed test one\n";
    }
    */
    
    public function testTwo() {
        print "executed test two\n";
    }
    
    public function testThree() {
        print "executed test three\n";
    }
}