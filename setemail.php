<?php 
	include("oop.php");
include("connection.php");
$oop=new store;
$sql="select * from sabtnam_tbl where email=?";
$data=array($email);
$resemail=$oop->Rowcount($sql,$data);
if($resemail>=1){
    echo '1';
}
else{
    echo '0';
}
?>