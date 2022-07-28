<?php
session_start();
	include("oop.php");
include("connection.php");
$oop=new store;

if(isset($_SESSION['login']) or isset($_COOKIE['login'])){
    header("location:cart2.php?menu=1&submenu=7&dkp=6");
}

		?>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>سایت فروشگاهی</title>
    <link href="css/font.css" rel="stylesheet">
<script src="js/jquery-2.19.2.min.js"></script>

<script src='js/jquery.elevatezoom.js'></script>
	<script src="js/pluginslider.js"></script>
	<script src="js/jquery.slider.js"></script>
	<script src="https://kit.fontawesome.com/74a1fe2955.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
	<style>

      *
           {
           font-family: byekan;
             
        }
		body a{text-decoration: none;
		color:#000;
        cursor: pointer;}
		body a:hover{
			color: red;
		}
		body ul{margin: 0;padding: 0;}
        h5,h6,h3,h4{
            text-align: right;
            font-family: byekan;
            float: right;
            color: #555;
            margin-top: 0px;
             margin-bottom: 0px;
            direction: rtl;
           ;
        }
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
		font-family:byekan;
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
	
	#sabadkharid
	{width: 190px;
	height: 40px;
	background: #53b357;
	float: right;
	margin-right: 10px!important;
	border-radius: 5px;
	margin-bottom: 10px!important;
	overflow: hidden;
	cursor: pointer;}
	#sabadkharid:hover{
		background: #46a349;
	}
	#sabadkharid img{background:#6AEF75;
	height: 40px;
	margin: 0;
	width: 50px;}
	
	#sabadkharid span{
		color: #fff;
		float: right;
		margin-right: 30px;
		margin-top: 8px;
	}
	#sabadkharid #tedad{
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
	  #right li{
            list-style:none;
            float:right;
            width:100%;
            background:#666666;
            color:#fff;
            font-family:byekan;
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
			font-family: byekan;
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
	
	
	</style>
	<div id="topheader"><a><img src="img/2f49328f-14ab-4e1e-897a-4ac450ed4fe8.png"></a></div>
  
<div id="header"> 
	<div id="r1170"> 
        <span id="bakhshe1">
		<span><img src="./img/icon1.png">فروشگاه اینترنتی،<a >وارد شوید</a>
			</span>
	     <span><img src="./img/icon2.png"><a >ثبت نام کنید</a></span>
		<span id="logo"><img src="img/6087f2b060c7a92408bac811_logo.svg"></span>
		</span>
		<span id="bakhshe2">
			
		<span id="sabadkharid">
			<img src="img/shopping_cart.png">
			<span>سبد خرید</span>
            <?php 
             $cookie=$_COOKIE['cart'];
            //echo $cookie;
            $tedadkol=0;
            if(isset($_COOKIE['cart'])){
                 
   $sql="select * from `cart_tbl` where cookie=? and pardakht=0 " ;
   $data=array($cookie); 
    $result=$oop->select($sql,$data);
                
    foreach($result as $rowcount){

        
        $tedad=$rowcount['tedad'];
        $tedadkol=Intval($tedadkol+$tedad);
    }
               
            }
            else{
                
            }
            ?>
			<span id="tedad"><?php echo $tedadkol; ?></span>
			</span>
			<!--<span id="search">
				<input type="text" placeholder="محصول،دسته یا برند مورد نظرتان را وارد کنید...">
				<span><img src="img/search2.png"></span>
			</span>-->
					
		</span>
	</div><!--r1170-->
</div>
	<style>
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
			font-family: byekan;
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
		
					
					
					echo '<li><a href="indexkala.php?menu='.$idmenu.'&&submenu='.$idsubmenu.'">'.$namesubmenu.'</a></li>';
						
					
			
	}
	echo'</ul>';
	echo'</li>';
	
	}
	?>
				
			</ul>

				

			
			<div id="submenu"></div>
		</div>
	</div>
	
	
	<div id="main">
	<div id="r1170">
          

		<div id="radaddress">
			
	<span>فروشگاه اینترنتی</span>>
			<span>ورود</span>>
			
			
		
		</div>
        <style>
        
            h4,h5,h6{
                float: right;
                width: 100%;
            }
            .login{
                width: 50%;
                background: #fff;
                margin: 0 auto;
                height: 381px;
                margin-top: 20px;
            }
            .gozine{
               height: 40px;
                width: 98%;
                background:#eee;
                border-radius: 5px;
                border: 1px solid #aaa;
                float: right;
                margin: 20px 3px;
                text-align: right;
            }
            .gozine label{
                float: right;
                font-family: byekan;
                font-size: 14px;
                direction: rtl;
                margin: 9px 5px;
                font-size: 14px!important;
                text-align: right;
                width: 100%;
            }
              .gozine input{
              float: right;
    font-family: byekan;
    font-size: 14px;
    direction: rtl;
   margin: -43px 89px;
    border-radius: 5px;
            }
            .vorod{
               background: #16728D;
                border: 1px solid #aaa;
                color: #fff;
                border-radius: 5px;
                float: left;
                font-family: byekan;
                font-size: 14px;
                line-height: 25px;
                   padding: 8px 22px;
                text-align: center;
            }
            .check{          float: right;
    font-family: byekan;
    font-size: 14px;
    direction: rtl;
  margin: 3px 7px!important;!important;
    border-radius: 5px;}
        </style>
        <h4>فرم ورود:</h4>
        <form action="loging.php" method="post" onSubmit="return etebarsanji();">
       <div class="login">
        <div class="gozine">
           <label>شماره موبایل:</label>
            <input type="text" name="hamrah">
           </div>
       <div class="gozine">
           <label>ایمیل:</label>
            <input type="text" name="email">
           </div>
           <div class="gozine">
               مرا بخاطر بسپار
           <input type="checkbox" class="check">
           </div>
<input type="submit" class="vorod" value="ورود">
         
        </div><!--login-->
              </form>
     </div><!--r1170-->
	</div><!--main-->	
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
		font-family: byekan;
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
		font-family: byekan;
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
		font-family: byekan;
		font-size: 14px;
		line-height: 33px;
		text-align: right;}
		#footer #khadamatemoshtari .num2{width: 50%;
		height: 245px;
		float: right;
		direction: rtl;
			font-family: byekan;
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
					<a>ثبت سفارش</a><br>
					<a>رویه های ارسال سفارش</a><br>
					<a>شیوه های پرداخت</a><br>
					<a>معرفی بن</a>
			 
			 </span>
<span class="num1">
			       <h4>راهنمای خرید </h4>
					<a>ثبت سفارش</a><br>
					<a>رویه های ارسال سفارش</a><br>
					<a>شیوه های پرداخت</a><br>
					<a>معرفی بن</a>
			 
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
	 <style>
            .invalid{
                background: red!important;
                color: #fff;
            }
        </style>
    
        
   
<!-- Main Container Ends -->
</body>
     <script>
        function etebarsanji(){
            var invalid=0;
           
            var email=$('input[name=email]').val();
            var hamrah=$('input[name=hamrah]').val();
           
            //alert(ostan);
            
              
            var regularemail=/^[a-z0-9_\.-]+@{1}[a-z0-9\.-]+.[a-z]{2,3}$/i;
                        if(regularemail.test(email)==false){
                invalid=1;
                $('input[name=email]').val('ایمیل را وارد کنید...');
                 $('input[name=email]').addClass('invalid');
            }
             else{
                $('input[name=email]').removeClass('invalid');
            }
var regularmobile=/^0{1}9{1}[0-9]{9}$/i;
             if(regularmobile.test(hamrah)==false){
                invalid=1;
                $('input[name=hamrah]').val('موبایل خود را وارد کنید...');
                 $('input[name=hamrah]').addClass('invalid');
            }
             else{
                $('input[name=hamrah]').removeClass('invalid');
            }
               
            if(invalid==0){
            $.ajax({
                url:'setemail.php',
                type:'POST',
                async:false,
                data:{email:email},
                success:function(data){
                    //alert(data);
                    if(data==1){
                        invalid=1;
                        alert('کاربر گرامی:این ایمیل قبلا ثبت شده است!');
                    }
                }
            })
}
             //alert(name);  
            if(invalid==1){
              return false;  
            }
       
        }//etebarsabji
       
    </script>

</html>
