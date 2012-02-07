<?php
 
class HappySet {
 
  private $set;
  private $size;
  private $empty;
 
  public function __construct() {
    $this->set = array();
    $this->size = 0;
    $this->empty = false;
  }
 
  public function add($obj) {
    $this->empty = false;
    $hash_code = hash("md5", $obj);
    if (!isset($this->set[$hash_code])) {
      $this->size++;
    }
    $this->set[$hash_code] = $obj;
  }
 
  public function is_empty() {
    return $this->empty;
  }
 
  public function size() {
    return $this->size;
  }
 
  public function remove($obj) {
    $hash_code = hash("md5", $obj);
    if (isset($this->set[$hash_code])) {
      $this->size--;
    }
    $this->set[$hash_code] = null;
    $this->empty = ($this->size == 0);
  }
 
  public function contains($obj) {
    $hash_code = hash("md5", $obj);
    return isset($this->set[$hash_code]);
  }
 
  public function get($obj) {
    $hash_code = hash("md5", $obj);
    return isset($this->set[$hash_code]) ? $this->set[$hash_code] : NULL;
  }
}
?>
