<?php

include("oop.php");
$oop=new store;
$text=$_POST['text'];
$submenu=$_POST['submenu'];
$sqlkala="SELECT * FROM `mahsool_tbl` where  subvaled=".$submenu."  and name like'%".$text."%'  ";


	$result=$oop->select($sqlkala,array());
echo json_encode($result);
?>