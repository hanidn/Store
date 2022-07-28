<?php
ob_start();
session_start();
include ("oop.php");
$oop=new store;
if(isset($_GET['server'])){
$server=$_GET['server'];
    }
if($server=='add'){
    $x=array_values($_POST);
    $edit=$_GET['edit'];
    $idmahsool=$_GET['idmahsool'];
    if($edit==0){
    $sql="INSERT INTO `mahsool_tbl`(`pishnehad`, `name`, `valed`, `subvaled`, `img`, `gheymata`, `gheymatb`, `bazdid`, `color`, `emtiaz`, `keyfiat`, `tozih`, `mojood`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
        }
    if($edit==1){
      $sql= "UPDATE `mahsool_tbl` SET `pishnehad`=?,`name`=?,`valed`=?,`subvaled`=?,`img`=?,`gheymata`=?,`gheymatb`=?,`bazdid`=?,`color`=?,`emtiaz`=?,`keyfiat`=?,`tozih`=?,`mojood`=? WHERE id=".$idmahsool."  "; 
    }
    $oop->Idu($sql,$x);
    $sql2="select * from `mahsool_tbl` order by id  desc limit 1";
    $res=$oop->select($sql2,array());
    $idmahsool=$res[0]['id'];
    if($edit==0){
    header('location:dashbord.php?page=mahsool&add&gallery&idmahsool='.$idmahsool);
    }
    else{
        header('location:dashbord.php?page=mahsool&add&gallery&edit&idmahsool='.$idmahsool);
    }
}
if($server=='gallery'){
    
    $idmahsool=$_GET['idmahsool'];
    $gallery=$_POST['url'];
    foreach($gallery as $url){
       $sql="INSERT INTO `gallerypro_tbl`(`img`, `idmahsool`) VALUES (?,?)" ;
        $data=array($url,$idmahsool);
        $oop->Idu($sql,$data);
    }
    header('location:dashbord.php?page=mahsool&add&vijegi&idmahsool='.$idmahsool);
}
if($server=='moshakhasat'){
    $idmahsool=$_GET['idmahsool'];
    $sql="select * from mahsool_tbl where id=?";
    $data=array($idmahsool);
    $res=$oop->select($sql,$data);
    $subvaled=$res[0]['subvaled'];
    
    $sql2="select * from moshakhasat_tbl where submenu=? and parent!=0;";
    $data2=array($subvaled);
    $res2=$oop->select($sql2,$data2);
    foreach($res2 as $row2){
        $idmoshakhasat=$row2['id'];
        $value=$_POST[$row2['id']];
        $sql3="INSERT INTO `jmoshakhasat_tbl`( `idmahsool`,`idmoshakhasat`,`value`) VALUES (?,?,?)";
        $data3=array($idmahsool,$idmoshakhasat,$value);
        $oop->Idu($sql3,$data3);
    }
    
    
}
?>