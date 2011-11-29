<?php

class UniqueInstanceTest extends PHPUnit_Framework_TestCase {
    
    static $instance_count = 0;
    
    /* It is dangerous to override the constructor!! */
    public function __construct($name = NULL, array $data = array(), $dataName = '') {
        parent::__construct($name, $data, $dataName);
        self::$instance_count++;
        print 'Instance number: ' . self::$instance_count . "\n";
    }
    
    protected function setUp() {
        parent::setUp();
        print "executed set up\n";
    }
    
    protected function tearDown() {
        print "executed tear down\n";
        parent::tearDown();
    }
    
    public function testOne() {
        print "executed test one\n";
    }
    
    public function testTwo() {
        print "executed test two\n";
    }
    
    public function testThree() {
        print "executed test three\n";
    }
}