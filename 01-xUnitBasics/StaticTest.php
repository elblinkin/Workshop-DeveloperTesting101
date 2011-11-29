<?php

class StaticTest extends PHPUnit_Framework_TestCase {
    
    static $instance_count = 0;
    
    protected function setUp() {
        parent::setUp();
        self::$instance_count++;
        print "Instance number: " . self::$instance_count . "\n";
        print "executed set up\n";
    }
    
    public function testOne() {
        print "executed test one\n";
    }
    
    /**
     * @backupStaticAttributes enabled
     */
    public function testTwo() {
        print "executed test two\n";
    }
    
    public function testThree() {
        print "executed test three\n";
    }
}