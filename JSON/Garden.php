<?php
class Garden implements JsonSerializable{
  public function JsonSerialize(){
    unset($this->herbs);
    return $this;
  }
}

$garden = new Garden();
$garden->flowers = array("clema","floer","Yaf_Exception");
$garden->herbs = array("mint","sage","chives","rosam");
$garden->fruits = array("apple","rhud");
echo json_encode($garden);

?>
