<?php

require_once 'HappySet.php';
 
class HappySetTest extends PHPUnit_Framework_TestCase {
 
  public function testIsEmpty_onCreation() {
    $set = new HappySet();
   
    $this->assertTrue($set->is_empty(),
        "set should be empty");
  }
 
  public function testSize_onCreation() {
    $set = new HappySet();
   
    $this->assertEquals(0, $set->size(),
        "size should be zero");
  }
 
  public function testContains_onCreation() {
    $set = new HappySet();
   
    $this->assertFalse($set->contains("hello"),
        "set should not contain 'hello'");
  }
 
  public function testGet_onCreation() {
    $set = new HappySet();
   
    $this->assertNull($set->get("hello"),
        "get should return null");
  }

  public function testIsEmpty_afterAdd() {
    $set = new HappySet();
    $set->add("hello");
     
    $this->assertFalse($set->is_empty(),
        "set should not be empty");
  }
   
  public function testSize_afterAdd() {
    $set = new HappySet();
    $set->add("hello");
     
    $this->assertEquals(1, $set->size(),
        "size should be 1");
  }
   
  public function testContains_afterAdd() {
    $set = new HappySet();
    $set->add("hello");
     
    $this->assertTrue($set->contains("hello"),
        "set should contain 'hello'");
  }
   
  public function testGet_afterAdd() {
    $set = new HappySet();
    $set->add("hello");
 
    $this->assertEquals("hello", $set->get("hello"),
        "get should return 'hello'");
  }
    
  public function testIsEmpty_afterAddAndRemove() {
    $set = new HappySet();
    $set->add("hello");
    $set->remove("hello");
     
    $this->assertTrue($set->is_empty(),
        "set should be empty");
  }
   
  public function testSize_afterAddAndRemove() {
    $set = new HappySet();
    $set->add("hello");
    $set->remove("hello");
     
    $this->assertEquals(0, $set->size(),
        "size should be zero");
  }
   
  public function testContains_afterAddAndRemove() {
    $set = new HappySet();
    $set->add("hello");
    $set->remove("hello");
     
    $this->assertFalse($set->contains("hello"),
        "set should not contain 'hello'");
  }
   
  public function testGet_afterAddAndRemove() {
    $set = new HappySet();
    $set->add("hello");
    $set->remove("hello");
     
    $this->assertNull($set->get("hello"),
        "get should return null");
  }
}
?>
