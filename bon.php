<?php
	include("oop.php");
include("connection.php");
$oop=new store;
$textbon=$_POST['textbon'];
$sql="select * from bon_tbl where code=?";
$data=array($textbon);
$res=$oop->select($sql,$data);
if(isset($res[0])){
    echo $res[0]['takhfif'];
}
else{
    echo 'کاربر گرامی همچین کدی وجود ندارد';
}
?>