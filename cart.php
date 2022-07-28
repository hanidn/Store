<?php 

include ("oop.php");
$oop=new store;
$id=$_POST['id'];
if(isset($_COOKIE['cart'])){
    $cookie=$_COOKIE['cart'];
    
   $sql="select * from `cart_tbl` where cookie=? and idmahsool=? " ;
   $data=array($cookie,$id); 
    $count=$oop->Rowcount($sql,$data);
    if($count==0){
    //$cookie=$_COOKIE['cart'];
     $sql="INSERT INTO `cart_tbl`(`idmahsool`, `cookie`,`tedad`) VALUES (?,?,?) ";
    $data=array($id,$cookie,'1');
    $oop->Idu($sql,$data);
    }//count
    else{
      $sql="UPDATE `cart_tbl` SET tedad=tedad+1 where idmahsool=?  and  cookie=? ";
        $data=array($id,$cookie);
    $oop->Idu($sql,$data);
    }//else count
}//isset
else{
     $value=microtime(true).rand(1,99999);
  setcookie('cart',$value,time()+60*60*24*30,'/');  
   
    
    
    $sql="INSERT INTO `cart_tbl`(`idmahsool`, `cookie`,`tedad`) VALUES (?,?,?) ";
    $data=array($id,$value,'1');
    $oop->Idu($sql,$data);
    
}//isset

?>