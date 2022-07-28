<?php 
ob_start();
session_start();
include ("oop.php");
$oop=new store;
$count=0;
if(isset($_POST['user'])){
   $user=md5(hash('sha512',$_POST['user'])); 
    $password=md5(hash('sha512',$_POST['password']));
    $sql="select * from `admin_tbl` where user=? and pass=? ";
    $data=array($user,$password);
    $count=$oop->Rowcount($sql,$data);
    echo $count;
    echo $user=md5(hash('sha512',$_POST['user'])); 
    if($count==1){
        
        $_SESSION['admin']=1;
        header('location:dashbord.php?page=users');
    }
    else{
        $error=1;
    }
}//if

?>



<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>پنل مدیریت</title>
    <link href="css/style.css" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/74a1fe2955.js" crossorigin="anonymous"></script>
     
  
<script src="js/jquery-2.19.2.min.js"></script>

</head>
    <style>
    body{
    background: #eee;
  
    font-family: byekan;
}
.login{
    width: 35%;
    height: 200px;
    background: #ccc;
    margin: 0 auto;
    border: 1px solid #aaa;
    border-radius: 5px;
}
.login .text{
    height: 25px;
    width: 50%;
    border: 1px solid #aaa;
    border-radius: 5px;
    float: right;
}
.login label{
    
    font-family: byekan;
    float: right;
    direction: rtl;
    text-align: left;
    width: 150px;
}
.login div{
    float: right;
    width: 100%;
    margin: 10px 0;
    
}
.button{
    float: left;
    font-family: byekan;
    padding: 5px 0;
    width: 70px;
    margin: 10px;
    border-radius: 5px;
    border: 1px solid #aaa;
}
       a{
         text-decoration: none;
         color: inherit;
     }
@font-face {
  font-family: byekan;
  src:url("fonts/B_Yekan/Yekan.woff");
    
  
}
      
    
    </style>
    <body>
        <form action="index.php" method="POST">
        <div class="login">
        <div><label>نام کاربری:</label><input class="text" type="text" name="user"></div>
        <div><label>رمز کاربری:</label><input type="text" name="password" class="text"></div>
            <input type="submit" class="button" value="ورود">
            <?php 
            if(isset($error)){
           
                   ?>
            <p style="color: red">شما مجاز به ورود نمیباشید
            </p>
             <?php 
              
            }
            ?> 
        </div>
            </form>
    </body>
</html>