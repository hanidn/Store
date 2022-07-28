<?php
	include("oop.php");
include("connection.php");
include("jdf.php");
$oop=new store;
$name=$_POST['name'];
$family=$_POST['family'];
$email=$_POST['email'];
$hamrah=md5($_POST['hamrah']);
$ostan=$_POST['ostan'];
$shahr=$_POST['shahr'];
$address=$_POST['address'];
$tarikh=jdate('H:i:s P ,Y/n/j');

$sql="INSERT INTO `sabtnam_tbl`(`name`, `family`, `email`, `hamrah`, `ostan`, `shahr`, `address`, `tarikh`) VALUES ('".$name."','".$family."','".$email."','".$hamrah."','".$ostan."','".$shahr."','".$address."','".$tarikh."')";
$oop->Idu($sql,array());
?>
<a href="login.php">
<h5>ثبت نام شما با موفقیت انجام شد</h5>
</a>
