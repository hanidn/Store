<?php
	include("oop.php");
include("connection.php");
$oop=new store;
$ostan=$_POST['ostan'];
$sql="select * from shahr_tbl where idostan=?";
$data=array($ostan);
$res=$oop->select($sql,$data);
echo '<option>انتخاب کنید</option>';
foreach($res as $rowshahr){
    $shahr=$rowshahr['shahr'];
    $id=$rowshahr['id'];
    echo '<option value="'.$id.'">'.$shahr.'</option>';
}

?>