<?php

$GLOBALS['test_var'] = 'initial';

/**
 * @backupGlobals disabled
 */
class GlobaleStateTest extends PHPUnit_Framework_TestCase {
    
    public function testOne() {
        print 'Global Var: ' . $GLOBALS['test_var'] . "\n";
        $GLOBALS['test_var'] = 'test one';
    }
    
    /**
     * @backupGlobals enabled
     */
    public function testTwo() {
        print 'Global Var: ' . $GLOBALS['test_var'] . "\n";
        $GLOBALS['test_var'] = 'test two';
    }
    
    public function testThree() {
        print 'Global Var: ' . $GLOBALS['test_var'] . "\n";
    }
}