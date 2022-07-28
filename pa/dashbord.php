<?php

ob_start();
session_start();
include ("oop.php");
$oop=new store;
if(!isset($_SESSION['admin'])){
    header('location:index.php');
}
?>

<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>پنل مدیریت</title>
     <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74a1fe2955.js" crossorigin="anonymous"></script>
   
    
<script src="../js/jquery-2.19.2.min.js"></script>

</head>
    <style>
        
        *{
             margin: 0px;
    padding: 0px;
            font-family: byekan;
        }
        body{
    background: #eee;
    margin: 0px!important;
    padding: 0px!important;
            font-family: byekan;
}
    .header{
    background: #555;
    height: 50px;
    width: 100%;
    
}
.header img{
   width: 50px;
    height: 50px;
    float: right;
    margin: 0 10px;
    border-radius: 100%;
}
        h1,h2,h3,h4,h5,h6{
            text-align: right;
            direction: rtl;
            margin: 0;
            padding: 0;
        }
        .header h5{
            color: #fff;
           width: 50px;
    height: 50px;
    float: right;
    margin: 0 10px;
    white-space: nowrap;
            line-height: 45px;
        }
        .col-right{
            float: right;
            height: 600px;
            width: 15%;
            background: #555;
            margin-top: 5px!important;
        }
        ul{
    padding: 0;
    margin: 0;
}
.col-right ul li{
    list-style: none;
    float: right;
    width: 95%;
    padding: 5px;
    direction: rtl;
    text-align: right;
    color: #999;
    border-bottom: 1px solid #666;
    color: #999;
    font-size: 14px;
}
        .col-right ul li:hover{
            background: #aaa;
            color: #000;
        }
        .col-right ul li i{
            margin: 0 5px;
            color: #f00!important;
        }
        .col-left{
            float: right;
            width: 84%;
            background: #fff;
            margin: 5px;
            border: 1px solid #aaa;
            border-radius: 5px;
            min-height: 600px;
        }
         .col-left p{
            float: right;
          text-align: right;
        direction: rtl;
            margin: 10px;
          
        }
        .asli{
            width: 90%;
            height: auto;
            background: #eee;
            float: right;
            margin: 5%;
        }
        table td{
            border: none;
            text-align: center;
        }
        table{
            direction: rtl;
            font-size: 14px;
        }
                table i{
            margin: 5px;
            font-size: 14px;
                    cursor: pointer;
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
        
    <div class="header">
      <span style="float: right;"><img src="img/Wall-E-Trash-60x60.jpg"><h5>مدیر:حانیه درخشان</h5></span>
      <span style="float:left;"><i class="fa fa-sign-out" aria-hidden="true" style="float: left;font-size: 30px;margin: 0 10px;color: rgba(176,176,255);line-height: 50px;"></i><h5 >خروج</h5></span> 
        </div><!--header-->
          <div class="col-right">
        <ul>
        
            <li><a href="dashbord.php?page=users"><i class="fa fa-user" aria-hidden="true"></i> مدیر اعضا</a></li>
            <li><a href="dashbord.php?page=sefaresh"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
سفارشات</a></li>
            <li><a href="dashbord.php?page=mahsool"><i class="fa fa-pie-chart" aria-hidden="true"></i>محصولات</a></li>
          
            
        </ul>
        
        </div><!--col-right--> 
    <div class="col-left">
        <?php
        $page=$_GET['page'];
        if($page=='users'){
            include('users.php');
        }
        if($page=='sefaresh'){
            include('sefaresh.php');
        }
          if($page=='mahsool'){
            include('mahsool.php');
        }
        ?>
        </div><!--col-left--> 
  
    </body>
    
</html>