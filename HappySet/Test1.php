<?php
 
require_once 'HappySet.php';
 
class Test1 extends PHPUnit_Framework_TestCase {
 
  public function test1() {
    $set = new HappySet();
    $this->assertTrue($set->is_empty());
    $this->assertEquals(0, $set->size());
    $this->assertFalse($set->contains("hello"));
    $this->assertNull($set->get("hello"));
 
    $set->add("hello");
    $this->assertFalse($set->is_empty());
    $this->assertEquals(1, $set->size());
    $this->assertTrue($set->contains("hello"));
    $this->assertEquals("hello", $set->get("hello"));
 
    $set->remove("hello");
    $this->assertTrue($set->is_empty());
    $this->assertEquals(0, $set->size());
    $this->assertFalse($set->contains("hello"));
    $this->assertNull($set->get("hello"));
  }
}
?>
