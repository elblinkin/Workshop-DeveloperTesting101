<?php

require_once 'HappySet.php';
 
class HappySetTest extends PHPUnit_Framework_TestCase {
 
  public function testCreation() {
    $set = new HappySet();
     
    $this->assertTrue($set->is_empty(),
        "set should be empty");
    $this->assertEquals(0, $set->size(),
        "size should be zero");
    $this->assertFalse($set->contains("hello"),
        "set should not contain 'hello'");
    $this->assertNull($set->get("hello"),
        "get should return null");
  }
   
  public function testAdd() {
    $set = new HappySet();
    $set->add("hello");
     
    $this->assertFalse($set->is_empty(),
        "set should not be empty");
    $this->assertEquals(1, $set->size(),
        "size should be 1");
    $this->assertTrue($set->contains("hello"),
        "set should contain 'hello'");
    $this->assertEquals("hello", $set->get("hello"),
        "get should return 'hello'");
  }
    
  public function testRemove() {
    $set = new HappySet();
    $set->add("hello");
    $set->remove("hello");
     
    $this->assertTrue($set->is_empty(),
        "set should be empty");
    $this->assertEquals(0, $set->size(),
        "size should be zero");
    $this->assertFalse($set->contains("hello"),
        "set should not contain 'hello'");
    $this->assertNull($set->get("hello"),
        "get should return null");
  }
}
?>
