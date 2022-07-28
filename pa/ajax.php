<?php
ob_start();
session_start();
include ("oop.php");
$oop=new store;
$ajax=$_POST['ajax'];
if($ajax=="editusers"){
    
    echo 'ویرایش انجام شد';
}
if($ajax=="editsefaesh"){
    
    echo 'ویرایش انجام شد';
}
if($ajax=="deleteusers"){
    $id=$_POST['id'];
    $sql="DELETE FROM `sabtnam_tbl` WHERE id=?";
    $data=array($id);
    $oop->Idu($sql,$data);
 //header('location:dashbord.php?page=users');
}
if($ajax=="deletesefaresh"){
    $id=$_POST['id'];
    $sql="DELETE FROM `sefaresh_tbl` WHERE id=?";
    $data=array($id);
    $oop->Idu($sql,$data);
 //header('location:dashbord.php?page=users');
}
if($ajax=='submenu'){
    $idmenu=$_POST['idmenu'];
    $sql="select * FROM `menu_tbl` WHERE valed=?";
    $data=array($idmenu);
    $res=$oop->select($sql,$data);
    foreach($res as $row){
        
       echo '<option value="'.$row['id'].'">'.$row['name'].'</option>' ;
    }
 //header('location:dashbord.php?page=users');
}
?>