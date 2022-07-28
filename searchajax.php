<?php

include("oop.php");
$oop=new store;
$menu=$_POST['ajaxmenu'];
	$submenu=$_POST['ajaxsubmenu'];
 $entekhab=$_POST['ajaxentekhab'];
 $mojood=$_POST['mojood'];
if($mojood=='yes'){
	$mojood='and mojood>0';
}
else{$mojood='';}
$moratabsazia=$_POST['moratabsazia'];
$moratabsazib=$_POST['moratabsazib'];
$tedadnamyesh=$_POST['tedadnamyesh'];
$maxamount=$_POST['maxamount'];
$minamount=$_POST['minamount'];

if($moratabsazib=='soudi'){$moratabsazib='asc';}
else{$moratabsazib='desc';}
$color=$_POST['colorcard'];
$split_color=preg_split('/\s+/',$color);
   $color2=array();
    $safhebandi=array();
   $safhebandikol=array();
$type=$_POST['searchtext'];
$split_type=preg_split('/\s+/',$type);
   $type2=array();
    $safhebandi=array();
   $safhebandikol=array();
		$sqlkala="SELECT * FROM `mahsool_tbl` where valed=".$menu." and subvaled=".$submenu." and gheymatb<=".$maxamount." and gheymatb>=".$minamount." and name like'%".$type."%' and color like'%".$color."%' ".$mojood." order by ".$moratabsazia." ".$moratabsazib." ";


	$result=$oop->select($sqlkala,array(),PDO::FETCH_NUM);

   
	
foreach($result as $row){
    array_push($color2,$row[0]);
}//foreach-kamel
foreach($result as $rowtext){
    array_push($type2,$rowtext[0]);
}//foreach-kameltext


foreach($split_color as $color){
    
  
    $result=$oop->select($sqlkala,array(),PDO::FETCH_NUM);


foreach($result as $row){
    if(!in_array($row[0],$color2)){
        array_push($color2,$row[0]);
    }//if
    
}//foreach-kamel
    
}//foreach-tike

foreach($split_type as $type){
  

$result=$oop->select($sqlkala,array(),PDO::FETCH_NUM);

foreach($result as $rowtext){
    if(!in_array($rowtext[0],$type2)){
        array_push($type2,$rowtext[0]);
    }//if
    
}//foreach-kamel
    
}//foreach-tike
	$tedadkala=sizeof($type2);
	
		$tedadsafahat=ceil($tedadkala/$tedadnamyesh);
  
       $shoro=($tedadnamyesh*($entekhab-1)+1);
	   $payan=$shoro+$tedadnamyesh-1;

$safhebandi=array();
$safhebandikol=array();
$safhebandi=array_slice($type2,$shoro-1,$payan-$shoro+1);
foreach($safhebandi as $id){
    
$sqlkalaha="SELECT * FROM `mahsool_tbl` where id=".$id." ";

$natije=$oop->select($sqlkalaha,array());
   array_push($safhebandikol,$natije[0]);
}
$safhebandiasli=array(sizeof($type2),$safhebandikol);	
echo json_encode($safhebandiasli); 
?>