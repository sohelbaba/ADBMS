<?php

if(isset($_POST['submit'])){

	$acno = $_POST['acno'];
	$title = $_POST['title'];
	$auth = $_POST['auth'];
	$pub = $_POST['pub'];
	$edition = $_POST['ed'];

	$arr = [$acno,$title,$auth,$pub,$edition];
	$en = json_encode($arr,true);
	echo "php to json<br>";
	echo $en;

	echo "<br>json to php.<br>";
	$json = '{"name" :"sohel","age" : 22}';
	$con = json_decode($json,true);
	$name = $con['name'];
	echo $name;
}

?>