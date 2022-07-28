<?php
class store{
public $connect;
private $username="root";
private $password="";

private $dsn="mysql:host=localhost;dbname=store_db";
private $method=array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET names utf8");
    public function connection(){
        $connect=new PDO($this->dsn,$this->username,$this->password,$this->method);
        return $connect;
    }/*connection*/  
     public function __construct(){
       $this->connect=new PDO($this->dsn,$this->username,$this->password,$this->method);
      
    }/*connection*/
    public function Idu($query,$data){
    $pre=$this->connect->prepare($query);
foreach($data as $index=>$val){
    $pre->bindValue($index+1,$val);
}
$pre->execute();
}/*idu*/
 public function Rowcount($query,$data){
     $pre=$this->connect->prepare($query);
     foreach($data as $index=>$val){
    
   $pre->bindvalue($index+1,$val);
}
    
	$pre->execute();
     return $pre->rowCount();
 }/*rowcount*/
public function select($query,$data){
  
	$pre=$this->connect->prepare($query);
foreach($data as $index=>$val){
    
   $pre->bindvalue($index+1,$val);
}
    
	$pre->execute();
$res=$pre->fetchAll();
 return $res;
}/*select*/

    
}/*store*/
    

?>