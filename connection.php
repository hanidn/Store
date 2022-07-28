<?php
$servername="localhost";
$username="root";
$password="";
$dbname="store_db";
$dsn="mysql:host=$servername;dbname=$dbname";
try{
$connect=new PDO($dsn,$username,$password);
$connect->exec("SET CHARACTER SET utf8");
$connect->exec("SET names utf8");
}
catch(PDOException $error){
	echo $error->__toString();
}
?>
