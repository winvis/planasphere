<?php
function CretatePage($category,$value,$templateFilePath,$func){
  require("../Chippai.php");
  require("model.php");
  $memberLists = $func($value);
  var_dump($memberLists);
  $Chippai = new Chippai();
  $Chippai -> memberLists = $memberLists;
  $decodefilepath= $Chippai -> Chippai_decode($templateFilePath);
  $Chippai -> show($decodefilepath);
}
 ?>
