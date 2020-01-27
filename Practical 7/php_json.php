<?php

$json = '{"name": "sohel","age" : 22}';
$ass = array("name" =>  "sohel","age" => 22);
$obj = json_decode($json,true);
$obj1 = json_encode($ass,true);
echo $obj['name']. "<br>";
echo $obj1;
?>