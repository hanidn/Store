<?php
session_start();
	include("oop.php");
include("connection.php");
$oop=new store;

 $cookie=$_COOKIE['cart'];
$sql="select * from `cart_tbl` where cookie=? ";
$data=array($cookie);
$res=$oop->select($sql,$data);
foreach($res as $row){
    $id=$row['id'];
    $tedad=$_POST[$id];
    $sql2="update `cart_tbl` set tedad=? where id=?";
    $data2=array($tedad,$id);
    $oop->Idu($sql2,$data2);
}//foreach

$sql3="select id from `cart_tbl` where cookie=? ";
$data3=array($cookie);
$res3=$oop->select($sql3,$data3,PDO::FETCH_COLUMN);
$resser=serialize($res3); 

$sql4="INSERT INTO `sefaresh_tbl`( `name`, `family`, `hamrah`, `email`, `address`, `jamekol`, `ostan`, `shahr`,`idcart`) VALUES (?,?,?,?,?,?,?,?,?)";
$data4=array($_POST['name'],$_POST['family'],$_POST['hamrah'],$_POST['email'],$_POST['address'],$_POST['jamekol'],$_POST['ostan'],$_POST['shahr'],$resser);
$oop->Idu($sql4,$data4);
?>
