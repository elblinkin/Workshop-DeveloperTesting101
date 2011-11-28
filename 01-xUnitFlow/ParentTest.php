<?php

class ParentTest extends PHPUnit_Framework_TestCase {
    
    protected function setUp() {
        parent::setUp();
        print "executed parent set up\n";
    }
    
    protected function tearDown() {
        print "executed parent tear down\n";
        parent::tearDown();
    }
    
    public function testOne() {
        print "executed parent test one\n";
    }
}