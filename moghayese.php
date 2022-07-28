<?php
	include("oop.php");
include("connection.php");
$oop=new store;
		?>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>سایت فروشگاهی</title>
<script src="js/jquery-2.19.2.min.js"></script>
<link href="css/font.css" rel="stylesheet">
	<script src="js/pluginslider.js"></script>
	<script src="js/jquery.slider.js"></script>
	<script src="https://kit.fontawesome.com/74a1fe2955.js" crossorigin="anonymous"></script>
</head>
	<style>
        *{
           font-family:  byekan;
        }
		body a{text-decoration: none;
		color:#000;}
		body a:hover{
			color: red;
		}
		body ul{margin: 0;padding: 0;}
        @font-face {
  font-family: byekan;
  src:url("fonts/B_Yekan/Yekan.woff");
    
  
}
	</style>
<body style="padding: 0;margin: 0;">
<!-- Main Container -->
<style>
	#r1170{
	width:1170px;
	margin:0 auto;
		position: relative;
	}
	#header{
	
	width:100%;
	height:100px;
	} 
	#bakhshe1,#bakhshe2{background:#fff;
	width:100%;
	height:50px;
	float: right;
	position: relative;}
	#bakhshe1>span,#bakhshe2>span{
		font-family:tahoma;
		font-size: 13px;
		direction: rtl;
		text-align: right;
		float: right;
		margin:10px 0px 0 30px; 
	}
	#bakhshe1 img,#bakhshe2 img{
		float: right;
		margin-right: 10px;
		margin-left: 5px}
	
	#sabadrkharid
	{width: 190px;
	height: 40px;
	background: #53b357;
	float: right;
	margin-right: 10px!important;
	border-radius: 5px;
	margin-bottom: 10px!important;
	overflow: hidden;
	cursor: pointer;}
	#sabadrkharid:hover{
		background: #46a349;
	}
	#sabadrkharid img{background:#6AEF75;
	height: 40px;
	margin: 0;
	width: 50px;}
	
	#sabadrkharid span{
		color: #fff;
		float: right;
		margin-right: 30px;
		margin-top: 8px;
	}
	#sabadrkharid #tedad{
		color: #fff;
		float: right;
		margin-right: 5px;
		margin-top: 8px;
		background:#6AEF75;
		border-radius: 100%;
		width: 20px;
		height: 20px;
		text-align: center
	}
	#bakhshe2 input{
		border:1px solid #ccc;
		height: 38px;
		padding: 0;
		width: 465px;
	}
	#bakhshe2 #search span{
		background: #8a8f9c none repeat scroll 0 0;
		float: left;
		height: 40px;
		width: 40px;
		cursor: pointer
	}
	#bakhshe2 #search span:hover{background: #7f7b7b;}
	#bakhshe2 #search img{
		margin: 5px;
	}
	#topheader{
		width: 100%;
		height: 30px;
		background: url("img/b43481f5-cf66-4e2d-a5cc-1dd1bc73dfb9.jpg" ) repeat-x;
	}
	#topheader a{

		text-align: center;
		display: block
	}
	#logo{
		position: absolute;
		left: 20px;
		float: left
	}
	
	
	
	</style>
	<div id="topheader"><a href="#"><img src="img/2f49328f-14ab-4e1e-897a-4ac450ed4fe8.png"></a></div>
   <?php 
    $data=$_GET['dkp'];
    $dataa=$data[0];
    //print_r($x);
    
    ?>
<div id="header"> 
	<div id="r1170"> 
        <span id="bakhshe1">
		<span><img src="./img/icon1.png">فروشگاه اینترنتی،<a href="login.php">وارد شوید</a>
			</span>
	     <!--<span><img src="./img/icon2.png"><a href="#">ثبت نام کنید</a></span>-->
		<span id="logo"><img src="img/6087f2b060c7a92408bac811_logo.svg"></span>
		</span>
		<span id="bakhshe2">
			
		<span id="sabadrkharid">
			<img src="img/shopping_cart.png">
			<a href="product.php?menu=1&submenu=7&dkp=6"><span>سبد خرید</span></a>
			<span id="tedad">0</span>
			</span>
			<!--<span id="search">
				<input type="text" placeholder="محصول،دسته یا برند مورد نظرتان را وارد کنید...">
				<span><img src="img/search2.png"></span>
			</span>-->
					
		</span>
	</div>
</div>
	<style>
        body{
            font-family: byekan;
           
        }
		#menu{
			width: 99.5%;
			height: 40px;
			background: #f7f8fa;
			border:1px solid #ccc;
			margin: 0px auto;
			margin-top: 10px;
			
		}
		#menu ul li{
			float: right;
			font-family: tahoma;
			font-size: 12px;
			list-style: none;
			margin-right:30px;
			line-height: 37px;
			height: 38px;
		}
		#menu ul{margin: 0;
		padding: 0;}
		 .li-hover{
			color: red;
			background: #fff;
			border: 0px solid #ccc;
			padding: 0 10px;
		}
		#menu ul li ul{position: absolute;
		right: 0;
		width: 1170px;
		display: none;
		opacity: 0;
		
		z-index: 2;
		height: 45px;}
		#menu ul li ul li{position: relative;
		height:37px!important;
		color: #000;
			float: right;
			margin: 4px 0!important;
			width: 87px!important;
			text-align: center;
			width: 70px;
			z-index:2 ;
			
		}
		#menu ul li span{
			float: left;
			margin-top: 5px;
			margin-left: 20px;
		}
		#submenu{position: absolute;
		height: 40px;
		background:#fff;
			left: 0px;
			top: 40px;
			z-index: 1;
			border: 1px solid #ccc;
		width: 100%;
		box-shadow: 0 0 4px 1px #ccc;
		color: #000;
		display: none;}
	</style>
	<div id="menu">
		<div id="r1170">
			
						<ul>
				<?php
	
	$sqlmenu="SELECT * FROM `menu_tbl` where valed='0'";
	$premenu=$connect->prepare($sqlmenu);
	$premenu->execute();
	while($resultmenu=$premenu->fetch(PDO::FETCH_ASSOC)){
	$idmenu=$resultmenu['id'];
		$namemenu=$resultmenu['name'];
		
		
		
		echo '<li>'.$namemenu.'
		<span>
					<img  class="up" src="img/top.png" width="30" height="30" style="display:none " >
					<img class="down" src="img/down.png" width="30" height="30" style="display:block " >
					</span>';
		echo'<ul>';
		$sqlsubmenu="SELECT * FROM `menu_tbl`where valed='".$idmenu."'  ";
	$presubmenu=$connect->prepare($sqlsubmenu);
	$presubmenu->execute();
		
	while($resultsubmenu=$presubmenu->fetch(PDO::FETCH_ASSOC)){
	$idsubmenu=$resultsubmenu['id'];
		$namesubmenu=$resultsubmenu['name'];
		
					
					
					echo '<li><a href="indexkala.php?menu='.$idmenu.'&submenu='.$idsubmenu.'">'.$namesubmenu.'</a></li>';
						
					
			
	}
	echo'</ul>';
	echo'</li>';
	
	}
	?>
				
			</ul>

				

			
			<div id="submenu"></div>
		</div>
	</div>
	
	<style>
        #moghayese{
                float: right;
                width: 100%;
                height: 210px;
                background: #fff;
                position: relative;
                border-bottom: 1px solid #ccc;
            }
        #moghayese .search_moghayese{
            float: right;
            width: 300px;
            height: 200px;
            background: none;
            position: relative;
            line-height: 200px;
            text-align: center;
            
            
        }
        .fixed{
            width: 77%!important;position: fixed!important;top: 0;
        }
        #moghayese .search_moghayese input{
            height: 25px;
            width: 250px;
            float: right;
            margin: 0 15px;
            color: #777;
            direction: rtl;
            font-family: tahoma;
        }
        #moghayese .search_moghayese .searchsubmit{
            background: rgba(0,0,255,0.5) url("img/search2.png") no-repeat scroll center center!important;
            border: 1px solid #aaa;
            height: 30px;
            background: red;
            left: 0;
            position: absolute;
            top: 0;
            width: 27px;
        }
            #moghayese li{
             list-style:none;
            width:150px;
            
            text-align:center;
           margin:30px auto!important;
            border:1px solid #ccc;
          
            height:150px;
            position:relative;
            }
            #moghayese li:hover{
                border: 1px solid #777;
            }
            #moghayese li i{
                position: absolute;
                right: -7px;
                top: -9px;
                cursor: pointer;
                
            }
            #moghayese li img{
                width: 100px;
                margin-top: 20px;
            }
            
        #right li{
            list-style:none;
            float:right;
            width:100%;
            background:#666666;
            color:#fff;
            font-family:tahoma;
            text-align:right;
            direction:rtl;
            border:1px solid #fff;
            font-size: 18px;
            padding-right: 10px;
            
        }        
            
		#main{
			background: #eeeff1;
			width: 100%;
			height: 100%;
			padding-top:10px;
			position: relative;
			float: right;
			padding-bottom: 70px;

		}
		#r1170 #radaddress{
			width: 100%;
			height: 40px;
			margin-bottom: 10px;
			border-radius: 5px;
			overflow: hidden;
			background: white;
			direction: rtl;
			text-align: right;
			float: right;
			font-family: tahoma;
			font-size: 12px;
		}
		#r1170 #radaddress span{margin-right: 10px;
		line-height: 33px}
	
		#right{float: right;
		width: 300px;
		height: 100%;
		background: none;
        overflow: hidden;}
        .search_moghayese{
            float: right;
            width: 300px;
            height: 200px;
            background: red;
            position: relative;
        }
        #moghayese #result_search{
            width: 95%;
            position: absolute;
            height: 250px;
            box-shadow: 0 0 3px 3px #ccc;
            border-radius: 0 0 5px 5px;
            font-family: tahoma;
            top: 113px;
            background: #fff;
            overflow-y: auto;
            overflow-x:hidden;
            display: none;
        }
       
          #moghayese #result_search li  {
            list-style: none;
            width: 100%;
            height: 75px;
            overflow: hidden;
            font-size: 13px;
              margin-top:0px!important;
              margin-bottom: 5px!important;
              
        }
           #moghayese #result_search li img{
           float: right;
                margin: 0!important;
               height: 75px!important;
               width: 30%;
        }
        #moghayese #result_search li span {
           float: left;
            color: #000;
            height: 75px;
            line-height: 65px;
            width: 70%;
        }
		
	</style>
	<div id="main">
	<div id="r1170">
          

		<div id="radaddress">
			<?php
				
			$sqldastemenu="select * from `menu_tbl` where id= '".$_GET['menu']."' ";
				$predastemenu=$connect->prepare($sqldastemenu);
	$predastemenu->execute();
	while($resultdastemenu=$predastemenu->fetch(PDO::FETCH_ASSOC)){
	$iddastemenu=$resultdastemenu['id'];
		$namedastemenu=$resultdastemenu['name'];
	}
			?>
					<?php
	$sqldastesubmenu2="select * from `menu_tbl` where id='".$_GET['submenu']."' ";
	$predastesubmenu2=$connect->prepare($sqldastesubmenu2);
	$predastesubmenu2->execute();
	while($resultdastesubmenu2=$predastesubmenu2->fetch(PDO::FETCH_ASSOC)){

		$namedastesubmenu2=$resultdastesubmenu2['name'];
		
	}
				?>
	<span>فروشگاه اینترنتی</span>>
			<span><?php echo $namedastemenu;?></span>>
			<span><?php echo $namedastesubmenu2;?></span>
			
		
		</div>
       
                        <div id="moghayese">
                            <span class="search_moghayese">
                                <span style="position: relative;float: right;height: 50px;width: 100%;margin: 80px 0px;">
                            <input type="text" value="جستجو...">
                                <span class="searchsubmit"></span>
                            
                            </span><!--search_moghayese-->
                                <div id="result_search">
                                <ul>
                                   
                                      


                                    
                                    </ul>
                                
                                </div><!--result_search-->
                                </span>
                 
                <ul>                
            <?php 
         foreach($data as $subdata){
        $sqlmahsool2="SELECT * FROM `mahsool_tbl` where id='".$subdata[0]."' ";
    $resmahsool2=$oop->select($sqlmahsool2,array());
        foreach( $resmahsool2 as $rowmahsool2){
          $img=$rowmahsool2['img'];?>
                    <div id="<?php echo $subdata[0]; ?>" style="float:right;width:<?php echo 95/(sizeof($data)+1)?>%;text-align:center;">
                    <li><i id="<?php echo $subdata[0]; ?>" class="fa fa-times-circle" aria-hidden="true"></i>
                        <img src="<?php echo $img;?>"
                    </li>
                      </div>  
                   <?php
                             }
                            }
                            ?>
                  
                    
                    </ul>
                
                </div><!---moghyse-->

      
		<div id="right">
	<ul>
                   
            <li>قیمت</li>
            <li>امتیاز</li>
            <?php
        $sqlmoghayese="SELECT * FROM `vijegi_tbl` where valed=? ";
        
    $datamoghayese=array($_GET['submenu']);
    $resmoghayese=$oop->select($sqlmoghayese,$datamoghayese);
        foreach( $resmoghayese as $rowmoghayse){
          $idmoghayese=$rowmoghayse['id'];   
        $name=$rowmoghayse['name'];
            
   
        ?>
                   
        <li style="background: #fff;color: #000;"><?php echo $name ;?></li>
        <?php             
            $sqlmoghayesesub="SELECT * FROM `vijegi_tbl` where subvaled=? ";
        
    $datamoghayesesub=array($idmoghayese);
    $resmoghayesesub=$oop->select($sqlmoghayesesub,$datamoghayesesub);
        foreach( $resmoghayesesub as $rowmoghaysesub){
            
        $namesub=$rowmoghaysesub['name'];
            ?>
        
       
            <li><?php echo $namesub ;?></li>
               <?php  }?>
                     
         
        <?php } ?> 
            </ul>
		</div>
		<style>
		#left{float: right;
		width: 860px;
		height: 100%;
		background: none;
				margin-right: 10px}
            #left li{
            list-style:none;
            float:left;
            width:100%;
            background:#666666;
            color:#777;
            font-family:tahoma;
            text-align:right;
            direction:rtl;
            border:1px solid #fff;
            font-size: 18px;
            padding-right: 10px;
            
        } 
            #left li:nth-child(odd){
                background: rgba(0,0,0,0.06)!important;
            }
             #left li:nth-child(even){
                background: rgba(0,0,0,0.09)!important;
            }
             #left li:nth-child(3),#left li:nth-child(7),#left li:nth-child(11),#left li:nth-child(15){
                background: #fff!important;
                 font-size:0px!important;
                 height:22.5px;
            }
		</style>
			<div id="left">
                
                <ul>                <?php 
                            foreach($data as $subdata){
       ?>
               
                  
                <ul  id="<?php echo $subdata[0]; ?>" style="width: <?php echo 100/(sizeof($data))?>%;float:right;">
                         <?php
        $sqlmahsool="SELECT * FROM `mahsool_tbl` where id='".$subdata[0]."' ";
        
    
    $resmahsool=$oop->select($sqlmahsool,array());
        foreach( $resmahsool as $rowmahsool){
          $gheymatb=$rowmahsool['gheymatb'];
            $emtiaz=$rowmahsool['emtiaz'];
      ?>
                
            <li> <?php echo $gheymatb;?>تومان</li>
            <li><?php echo $emtiaz;?></li>
                    
             <?php
        $sqlmoghayese2="SELECT * FROM `moghayese_tbl` where idmahsool='".$subdata[0]."' ";  
  
    $resmoghayese2=$oop->select($sqlmoghayese2,array());
        foreach( $resmoghayese2 as $rowmoghayse2){
            
        $text=$rowmoghayse2['text']; 
        if($text=='0'){
                   $text='<i class="fa fa-times" aria-hidden="true"></i>';
                    }
                     if($text=='1'){
                   $text='<i class="fa fa-check" aria-hidden="true"></i> ';
                    }
    else{}?>
      
        
            
            <li><?php echo $text;?></li>
             
               <?php  
        }
   
        ?>     
            
   <?php }
        ?>
            </ul>
                     <?php
                            
                            }
                            ?>
		</div><!--left-->
	</div>
		
	</div>	
	<style>
	#footer{
			background: #eeeff1;
			width: 100%;
			height: 100%;
			padding-top:10px;
			position: relative;
			float: right;
			padding-bottom: 70px;

		}
		#footer #titrefooter{width: 100%;height: 50px;background: #ccc;
		font-family: tahoma;
		font-size: 13px;
		color: #000;
		line-height: 50px}
		#footer #titrefooter .titr1{
			height: 100%;
	margin-left: 5px;
		color: #000;
		width: 40%;
		direction: rtl;
		float: right;
		margin-right: 10%;}
			#footer #titrefooter .titr2{width: 49%;
				height: 100%;
	margin-left: 5px;
		color: #000;
	
		text-align: right;
		direction: rtl;
		float: left;}
		
		#footer #pishnahadekala{
		height: 550px;
		width: 90%;
		background: #fff;
		margin: 0 auto}
		#footer #pishnahadekala #right{width: 440px;height: 100%;background: none;
		float: right}
		#footer #pishnahadekala #right li{list-style: none;
			text-align: right;
			direction: rtl;
			margin: 5px;
			float: right;
			width: 100%;
			height: 100px;
			padding: 10px;
			cursor: pointer;
			position: relative
		}
		#footer #pishnahadekala #right li #img{float: right;
		width: 75px;
		height: 75px;
		overflow: hidden;}
		#footer #pishnahadekala #right li #img img{float: right;
		width: 75px;
		height: 75px;
		margin-left: 5px;}
		#footer #pishnahadekala #right li #matn{float: right;
		width: 350px;
		height: 100%;
		font-size: 13px;
		font-family: tahoma;
		direction: rtl;
		background: none;
		margin-right: 10px}
		#footer #pishnahadekala #right li #matn #titr{float: right;
		direction: rtl;
		text-align: right;
		width: 100%;
		height: 50%;
		line-height: 40px;
		font-size: 13px;
		box-shadow: none!important;
		background: none;}
		#footer #pishnahadekala #right li #matn #tozih{color: deepskyblue}
		#footer #pishnahadekala #left{width: 780px;
		height: 100%;
		background: none;
		float: left;}
		
			#footer #pishnahadekala li{list-style: outside none none;
			float: right;
			height: 270px;
			width: 180px;
			background:  none ;
			margin: 5px;
			position: relative;}
			#footer #pishnahadekala li #imgkala{display: block;
			margin-top: 20px;
			text-align: center;
			}
			#footer #pishnahadekala li #namekala{display: block;
			margin-top: 20px;
			text-align: center;
			font-weight: bold;
			font-size: 11px;}
		#footer #pishnahadekala li #gheymatavaliekala{width: 100%;height: 20px;background: #f5f6f7;font-size: 10px;float: right;
			text-decoration: line-through;
			line-height: 18px;color: #aaa;
			font-weight: bold;
			text-align: center;
				direction: rtl;
			}
			#footer #pishnahadekala li #gheymatnahaikala{
			width: 100%;
			background: rgba(0,0,0,0);
			font-size: 11px;
			line-height: 18px;
			font-weight: bold;
			text-align: center;
			direction: rtl;
			color:forestgreen;
			display: block;}
		#footer #khadamatemoshtari{background: #f7f8fa;
		width: 90%;height: 250px;
		margin: 0 auto;
		}
		#footer #khadamatemoshtari .num1{width: 24%;
		height: 245px;
		float: right;

		margin: 4px;
		display: block;
		font-family: Tahoma;
		font-size: 14px;
		line-height: 33px;
		text-align: right;}
		#footer #khadamatemoshtari .num2{width: 50%;
		height: 245px;
		float: right;
		direction: rtl;
			font-family: tahoma;
			text-align: right;
		margin: 4px ;
		display: block;}
		#footer #khadamatemoshtari .num2 .num3{float: right;
		text-align: right;
		height: 50px;}
		#footer #khadamatemoshtari .num2 .num3 input{width: 430px;
		height: 30px;
		float: right;
		padding-right: 5px;
		border: 1px solid #ccc;}
		#footer #khadamatemoshtari .num2  button{height: 34px;
		width: 70px;
		background: blue;
		color: #fff;
		border: none;
		margin-right: 10px;
		border-radius: 5px}
		#footer #khadamatemoshtari .num2 .num4{text-align: left;
		margin-top: 20px;
		float: left;}
		#footer #khadamatemoshtari .num2 .num4 span{float: left;margin: 5px;}
		#footer #khadamatemoshtari .num2 .num4 .imgsmall
		{
		height: 50px;
		overflow: hidden;}
		#footer #khadamatemoshtari .num2 .num4 .imgsmall img{width: 35px;
		height: 35px;
		overflow: hidden;
		margin-top: 8px;}
	
	</style>
	<div id="footer">
		<div id="titrefooter">
		<span class="titr1">چون از این گروه ها دیدن کرده اید،</span>
		<span class="titr2">احتمالا مایل به بررسی این محصولات نیز هستید.</span>
		</div>
		
		
		
		<div id="titrefooter" style="background: #6d717a">
		<span class="titr1" style="color: #fff">7روز هفته به صورت 24 ساعته پاسخگوی شما هستیم.</span>
		<span class="titr2" style="color: #fff">
			info@gmail.com | سوالات متداول | 07136666666
			
			
			</span>
		</div>
		<div id="khadamatemoshtari">
	     <div id="r1220">
	            <span class="num1">
			 <h4>راهنمای خرید </h4>
					<a href="#">ثبت سفارش</a><br>
					<a href="#">رویه های ارسال سفارش</a><br>
					<a href="#">شیوه های پرداخت</a><br>
					<a href="#">معرفی بن</a>
			 
			 </span>
<span class="num1">
			       <h4>راهنمای خرید </h4>
					<a href="#">ثبت سفارش</a><br>
					<a href="#">رویه های ارسال سفارش</a><br>
					<a href="#">شیوه های پرداخت</a><br>
					<a href="#">معرفی بن</a>
			 
			 </span>
			 	<span class="num2">
			 <span><h4>اولین نفری باشید که مطلع میشوید! </h4></span>
			 <span class="num3"><input placeholder="آدرس ایمیل خود را وارد نمایید..."></span>
					<button >تایید ایمیل</button>
			 <span class="num4">
					<span><img src="img/android_app_bg.png"></span>
					<span><img src="img/ios_app_bg.png"></span>
				 <span class="imgsmall"><img src="img/social_google_button_blue.png"></span>
				 <span class="imgsmall"><img src="img/Facebook-px.png"></span>
				 <span class="imgsmall"><img src="img/social_google_button_blue.png"></span>
				 <span class="imgsmall"><img src="img/Facebook-px.png"></span>
				 <span class="imgsmall"><img src="img/social_google_button_blue.png"></span>
				 <span class="imgsmall"><img src="img/Facebook-px.png"></span>
					</span>
			 </span>

		       
		</div>
	</div>
		</div>
	</div>
     <style>
            .fixed_top{
                margin-top:230px!important; 
            }
        </style>
    <?php 
    foreach($data as $index=>$value){
        $link=$link.'&dkp[]='.$value;
    }
    ?>
<!-- Main Container Ends -->
</body>
    <script>
        $(document).ready(function(e){
            $(this).click(function(){
                $('#moghayese #result_search ').slideUp();
            });
        });
    $("#moghayese .search_moghayese input").keyup(function(){
        
      var text=$(this).val();
       
      if(text.length>=3){
      $.ajax({
          url:'resultsearch.php',
          type:'POST',
          data:{text:text,submenu:<?php echo $_GET['submenu'] ?>},
          dataType:"json",
          success:function(data){
              $('#moghayese #result_search ul').empty();
              $('#moghayese #result_search ').slideDown();
              $.each(data,function(index,value){
                 
                   var nolink=$('#moghayese ul').find('#'+value['id']).length;
        if(nolink==0){
                    $('#moghayese #result_search ul').append('<a href="moghayese.php?menu=<?php echo $_GET['menu']?>&submenu=<?php echo $_GET['submenu'] ?><?php echo $link; ?>&dkp[]='+value['id']+'"><li><img src="'+value['img']+'"><span>'+value['name']+'</span></li></a>')
                     }//nolink
                  
                 
                     });//each
                if(data.length==0){
                        $('#moghayese #result_search ul').append('<div style="color:red;font-family:tahoma;font-size:12px;">کاربر گرامی کالایی با همچین اسم یافت نشد</div>');
                     }//data
             
          }//success
                 
      });
         }//if
    });
    
    </script>
    <script>
    $('#moghayese ul div li i').click(function(){
       
        var id=$(this).attr('id');
       $(this).parents('#'+id).remove();
        $('#left').find('#'+id).remove();
        var count=$('#moghayese ul div').length;
        //alert(count);
      
        $('#moghayese ul div').css('width',100/(count+1)+'%');
        $('#left ul').css('width',100/(count)+'%');
        //alert(sizewidth);
    });
    
    </script><!--del_co-->
<script>
	
$(document).ready(function(e){
	$(window).scroll(function(){
        clearTimeout(timer);
       var timer=setTimeout(function(){
          var scroll=$(window).scrollTop();
          if(scroll>=220){
              $('#moghayese').addClass('fixed');
              $('#right').addClass('fixed_top');
              $('#left').addClass('fixed_top');
          }//if
           else{
               $('#moghayese').removeClass('fixed');
               $('#right').removeClass('fixed_top');
               $('#left').removeClass('fixed_top');
           }
       },500)
    });
	
	$("#menu ul li").hover(function(){
		$(this).addClass('li-hover');
		$(this).find('.down').css('display','none');
		$(this).find('.up').css('display','block');
		$("#menu #submenu").slideDown();
		$(this).find('ul').css('display','block');
		$(this).find('ul').animate({'opacity':'1'},300);
	}
						   ,function(){
		$(this).removeClass('li-hover');
		$(this).find('.down').css('display','block');
		$(this).find('.up').css('display','none');
		$(this).find('ul').css('display','none');
		$(this).find('ul').animate({'opacity':'0'},300);
	});
	$("#menu").mouseleave(function(){
		$("#menu #submenu").slideUp();
	})
				  });



</script><!---scrool-->
</html>
