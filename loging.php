<?php
session_start();
include("oop.php");
include("connection.php");

$oop=new store;

$email=$_POST['email'];
$hamrah=$_POST['hamrah'];

$sql="select * from sabtnam_tbl where email='".$email."' and hamrah='".$hamrah."' ";
$res=$oop->Rowcount($sql,array());

if($res==1){
    header("location:cart2.php?menu=1&submenu=7&dkp=6");
    $_SESSION['login']=$email;
    if(isset($_POST['remember'])){setcookie('login',$email,time()+60*60*24*30,'/');}
}
else{
    header("location:login.php");
}
?>
