<?php

	include("oop.php");
include("connection.php");
$oop=new store;

$id=$_POST['idcomment'];

if(!isset($_COOKIE['like_comment'])){
    $idmahsool=array($id);
    $idmahsool_hame=serialize($idmahsool);
    setcookie('like_comment', $idmahsool_hame,time()+30*24*60*60,'/');
    $sql="update comment_tbl set `like`=`like`+1 where id=".$id." ";
    
$oop->Idu($sql,array());
}//if is set
else{
$idmahsool=unserialize($_COOKIE['like_comment']);
    if(!in_array($id,$idmahsool)){
        $sql="update comment_tbl set `like`=`like`+1 where id=".$id." ";
        $oop->Idu($sql,array());
    }
    else{
        echo 'no';
    }
 array_push($idmahsool,$id);
 $idmahsool_hame=serialize($idmahsool);
  setcookie('like_comment', $idmahsool_hame,time()+30*24*60*60,'/');
}



?>