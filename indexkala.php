<?php
	include("connection.php");
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
            font-family: 'byekan';
            
            
        }
		body a{text-decoration: none;
		color:#000;}
		body a:hover{
			color: red;
		}
		body ul{margin: 0;padding: 0;}
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
	@font-face {
  font-family: byekan;
  src:url("fonts/B_Yekan/Yekan.woff");
    
  
}
	
	
	</style>
	<div id="topheader"><a href="#"><img src="img/2f49328f-14ab-4e1e-897a-4ac450ed4fe8.png"></a></div>
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
			<span>سبد خرید</span>
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
		background: none;}
	
		#right #titr{
			background: #47a3ba none repeat scroll 0 0;
			box-shadow: 0 0 8px 2px #ccc;
			float: right;
			height: 40px;
			width: 99.5%;
			border: 1px solid #fff;
			direction: rtl;
			text-align: right;
			float: right;
			font-family: byekan;
			font-size: 12px;
			line-height: 33px;
			position: relative;
			color: #fff;
			text-align: center;
			border-radius: 5px;
		}
		#right #titr img{
		left: 10px;
			position: absolute;
			top: 5px;
		}
		
		#right .tablighateax2{height: 260px!important;}
		#right #rightmenu{width: 100%;
		float: right;
		background: #fff;
		height: 540px;
		border-radius: 0px 0px 5px 5px;
		font-family: byekan;
		font-size: 12px;}
		#right #rightmenu #header{background: #ccc;
		height: 25px;
		text-align: right;
		width: 99s.5%;
		float: right;}
		#right #rightmenu #body li{
			list-style: none;
			float: right;
			margin-right: 39px;
			text-align: right;
			width:77%;
			height: 34px;
			direction: rtl;
			border-bottom: 1px solid #ccc;
			margin-top: 5px;
			line-height: 30px;
			padding-right: 10px;
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
			<span><?php echo $namedastesubmenu2;?></span>
		
		</div>
		<div id="right">
		<span id="titr">
			جستجوی پیشرفته در این گروه
			<img src="img/search2.png" width="25" height="25"><span style="float: left;margin-left: 50px;font-size: 30px;">|</span>
			</span>
			<div id="rightmenu">
				
				
			<span id="header"><?php echo $namedastemenu; ?>+</span>
			<span id="body">
				<ul>
					<?php
	$sqldastesubmenu="select * from `submenu_tbl` where valed=  '".$iddastemenu."' ";
	$predastesubmenu=$connect->prepare($sqldastesubmenu);
	$predastesubmenu->execute();
	while($resultdastesubmenu=$predastesubmenu->fetch(PDO::FETCH_ASSOC)){
	$iddastesubmenu=$resultdastesubmenu['id'];
		$namedastesubmenu=$resultdastesubmenu['name'];
		echo'<li>-'.$namedastesubmenu.'</li>';
	}
				?>
				
			
				</ul></span>
	</div>
		</div>
		<style>
		#left{float: right;
		width: 860px;
		height: 100%;
		background: none;
				margin-right: 10px}
			#left #slider{
				width: 100%;
				height: 310px;
				background: none;
				float: right;
				border-radius: 3px;
				overflow: hidden;
				position: relative;
			
				
			}
			#left #slider #sliderimg{
				width: 100%;
				height: 100%;
				overflow: hidden;
				
			}
			#left #slider #slidergozine{
				width: 100%;
				height: 50px;
				background: rgba(0,0,0,0.5);
				position: absolute;
				bottom: 0;
				left: 0;
			}
			#left #slider #slidergozine span{
				cursor: pointer;
				color: #fff;
				float: right;
				font-family: byekan;
				font-size: 12px;
				height: 100%;
				line-height: 37px;
				text-align: center;
				width: 20%;
			}
			#left #slider #slidergozine span:hover{
				background: #fff;
				color: #000;
			}
			.activeslider{background: #fff!important;
				color: #000!important;}
			#left #slider  #samtechap{
				position: absolute;
				width:50px;
				margin-top:75px;
				left: 0;
				top: 30px;
			
				
				}
			#left #slider  #samterast{position: absolute;
				width:50px;
				margin-top:75px;
				right: 0;
				top: 30px;
			
		}
			#left #slider  #samterast img,#left #slider  #samtechap img{background: none repeat none scroll 0 0;height: 70px;margin-top: 0px;width: 70px;cursor: pointer;}
			#left #etelaat{background: #fff none repeat scroll 0 0;
				float: right;font-family: byekan;
				font-size: 12px;
				height: 80px;
				margin-top: 10px;
				width: 100%;
			border-radius: 5px;}
			#left #etelaat span{
				cursor: pointer;
				float: right;
				font-family: byekan;
				font-size: 11px;
				height: 100%;
				line-height: 65px;
				text-align: center;
				width: 20%;
				direction: rtl;
				position: relative;
				padding-left: 15px;
				text-align: left;
				width: 18%;
			}
			
			#left #etelaat  img{float: right;position: absolute;right: 4px;top: 13px;}
			
			#left #gallerykala{width: 105%;height: 600px;
			overflow: hidden;background: none;float: right;margin-top: 10px;}
			#left #gallerykala span{height: 190px;max-width: 100%;margin: 5px;float: right;}
			
			
			#left #porbazdid{width: 100%;
			height: 310px;margin-top: 10px;
			float: right;
			background: none;
			border-radius: 3px;
			font-size: 12px;
			font-family: byekan;
			position: relative;}
			#left #porbazdid #header{background: #ddd none repeat scroll 0 0;
			float: right;
			font-size: 13px;
			height: 30px;
			line-height: 25px;
			padding-right: 15px;
			text-align: right;
			width: 102%;
			color: #000;}
			#left #porbazdid #header #bishtar{
				float: left;
				color: royalblue;
				text-align: right;
			}
			#left #porbazdid #body{height: 280px;
			width: 104%!important;
				background: #fff;
				float: right;
				overflow: hidden;
			}
			#left #porbazdid #body li{list-style: outside none none;
			float: right;
			height: 270px;
			width: 200px;
			background:  none ;
			margin: 5px;
			position: relative;}
			#left #porbazdid #body li #imgkala{display: block;
			margin-top: 20px;
			text-align: center;
			}
			#left #porbazdid #body li #namekala{display: block;
			margin-top: 20px;
			text-align: center;
			font-weight: bold;
			font-size: 11px;}
			#left #porbazdid #body li #gheymatavaliekala{width: 100%;height: 20px;background: #f5f6f7;font-size: 10px;float: right;
			text-decoration: line-through;
			line-height: 18px;color: #aaa;
			font-weight: bold;
			text-align: center;
				direction: rtl;
			}
			#left #porbazdid #body li #gheymatnahaikala{
			width: 100%;
			background: rgba(0,0,0,0);
			font-size: 11px;
			line-height: 18px;
			font-weight: bold;
			text-align: center;
			direction: rtl;
			color:forestgreen;
			display: block;}
			#left #porbazdid  #samtechap{
				position: absolute;
				width:80px;
				height:280px;
				left: 0;
				top: 30px;
				background: #fff;
				box-shadow: 0 0 8px 2px #ccc;
				z-index: 3;
				}
			#left .porbazdid  #samtechap{	position: absolute;
				width:80px;
				height:280px;
				left: 0;
				top: 30px;
				background: #fff;
				box-shadow: 0 0 8px 2px #ccc;
				z-index: 3;
			margin-top: -30px}
				#left .porforoshtarinha  #samtechap{	position: absolute;
				width:80px;
				height:280px;
				left: 0;
				top: 30px;
				background: #fff;
				box-shadow: 0 0 8px 2px #ccc;
				z-index: 3;
			margin-top: -30px}
			#left #porbazdid  #samterast{position: absolute;
				width:50px;
				height: 280px;
				right: 0;
				top: 30px;
				background:none;
				z-index: 3;
			float: right;}
			#left #porbazdid  #samterast img,#left #porbazdid  #samtechap img{background: none repeat none scroll 0 0;height: 70px;margin-top: 100px;width: 70px;cursor: pointer;}
			.jadidtarinha #body{width: 850px!important;overflow: hidden;position: relative;visibility: visible;left: 0;z-index: 2;}
			.porforoshtarinha #body{width: 850px!important;overflow: hidden;position: relative;visibility: visible;left: 0;z-index: 2;}
			
			.porbazdid #body{width: 850px!important;overflow: hidden;position: relative;visibility: visible;left: 0;z-index: 2;}
            .jadid{left: -34px!important;
            margin-left: 20px;}
			
		</style>
			<div id="left">
		<div id="slider">
	
				<span id="sliderimg">
							<?php
	
	$sqlsliderimg="SELECT * FROM `slider_tbl` where valed=".$_GET['menu']." order by olaviyat asc limit 5 ";
	$presliderimg=$connect->prepare($sqlsliderimg);
	$presliderimg->execute();
	while($resultsliderimg=$presliderimg->fetch(PDO::FETCH_ASSOC)){
	$imgsliderimg=$resultsliderimg['img'];
		$olaviyatsliderimg=$resultsliderimg['olaviyat'];
		echo '<span class="'.$olaviyatsliderimg.'" style="display: none;opacity: 0"><img src="'.$imgsliderimg.'"></span>';
	}
	?>

			
			</span>
			<span id="slidergozine">
				<?php
	
	$sqlslidergozine="SELECT * FROM `slider_tbl` where valed=".$_GET['menu']." order by olaviyat asc limit 5 ";
	$preslidergozine=$connect->prepare($sqlslidergozine);
	$preslidergozine->execute();
	while($resultslidergozine=$preslidergozine->fetch(PDO::FETCH_ASSOC)){
	$gozineslidergozine=$resultslidergozine['gozine'];
		$olaviyatslidergozine=$resultslidergozine['olaviyat'];
		echo '<span  id="'.$olaviyatslidergozine.'"   class="'.$olaviyatslidergozine.'">'.$gozineslidergozine.'</span>';
	}
	?>
		
			
			</span>
			<span id="samtechap"><img src="img/monotone_arrow_left.png" width="128" height="128"></span>
					<span id="samterast"><img src="img/monotone_arrow_right (1).png" width="128" height="128"></span>
				</div>
				<div id="etelaat">
				<span><img src="img/slices5.png">7 روز ضمانت بازگشت </span>
				<span><img src="img/slices4.png" style="margin-right: 20px;">پرداخت در محل</span>
				<span><img src="img/slices3.png">ضمانت اصل بودن کالا</span>
			   <span>تحویل اکسپرس <img src="img/slices1.png" style="margin-right: 20px;"></span>
				<span><img src="img/slices2.png">تضمین بهترین قیمت</span>

				</div>

				<div id="gallerykala">
					<?php
	include("connection.php");
	$sqlgallery="SELECT * FROM `gallery_tbl` where valed=".$_GET['menu']." order by `olaviyat`";
	$pregallery=$connect->prepare($sqlgallery);
	$pregallery->execute();
	while($resultgallery=$pregallery->fetch(PDO::FETCH_ASSOC)){
	$img=$resultgallery['img'];
		$valed=$resultgallery['valed'];
		$submenu=$resultgallery['submenu'];
		echo '<a href="indexkalasearch.php?menu='.$valed.'&submenu='.$submenu.'"><span><img src="'.$img.'"></span></a>';
	}
	?>
	
				
				

				</div>
				<div id="porbazdid" class="porbazdid">
					<span id="header">پربازدیدترین ها<span id="bishtar"></span></span>
					<span id="body">
					<ul>
										<?php
	include("connection.php");
	$sqlbazdid="SELECT * FROM `mahsool_tbl` where valed='100' order by `bazdid` desc";
	$prebazdid=$connect->prepare($sqlbazdid);
	$prebazdid->execute();
	while($resultbazdid=$prebazdid->fetch(PDO::FETCH_ASSOC)){
	
		$imgbazdid=$resultbazdid['img'];
		$namebazdid=$resultbazdid['name'];
		$gheymatabazdid=$resultbazdid['gheymata'];
		$gheymatbbazdid=$resultbazdid['gheymatb'];
		echo '						<li>
						
						<span id="imgkala">
							
							<img src="'.$imgbazdid.'">
							</span>
							<span id="namekala">'.$namebazdid.'</span>
							<span id="gheymatavaliekala">
								
								تومان 
								'.$gheymatabazdid.'
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								'.$gheymatbbazdid.'</span>
						</li>';
	}
	?>
					
						</ul>
					<span id="samtechap"><img src="img/monotone_arrow_left.png" width="128" height="128"></span>
					<span id="samterast"><img src="img/monotone_arrow_right (1).png" width="128" height="128"></span>
						<span id="samterast"><img src="img/monotone_arrow_right (1).png" width="128" height="128"></span>
					</span>
				</div>
				<div id="porbazdid" class="porforoshtarinha">
					<span id="header">پرفروش ترین ها<span id="bishtar"></span></span>
					<span id="body">
					<ul>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								3.450.000</span>
						</li>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	 
								
								
								3.450.000تومان</span>
						</li>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								3.450.000</span>
						</li>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								3.450.000</span>
						</li>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								3.450.000</span>
						</li>
						</ul>
					<span id="samtechap"><img src="img/monotone_arrow_left.png" width="128" height="128"></span>
					<span id="samterast"><img src="img/monotone_arrow_right (1).png" width="128" height="128"></span>
					</span>
				</div>
				<div id="porbazdid" class="jadidtarinha">
					<span id="header" class="jadid">جدیدترین ها<span id="bishtar"></span></span>
					<span id="body">
					<ul>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								3.450.000</span>
						</li>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	 
								
								
								3.450.000تومان</span>
						</li>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								3.450.000</span>
						</li>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								3.450.000</span>
						</li>
						<li>
						
						<span id="imgkala">
							
							<img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg">
							</span>
							<span id="namekala">Apple iphone 5s 16GB</span>
							<span id="gheymatavaliekala">
								
								تومان 
								3.550.000
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								3.450.000</span>
						</li>
						</ul>
					
					</span>
					<span id="samtechap"><img src="img/monotone_arrow_left.png" width="128" height="128"></span>
					<span id="samterast"><img src="img/monotone_arrow_right (1).png" width="128" height="128"></span>
				</div>
		</div>
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
<!-- Main Container Ends -->
</body>
<script>
	
$(document).ready(function(e){
	
	
	
		$('.jadidtarinha #body ').jCarouselLite({
			auto:2000,
			speed:1000,
			scroll:3,
		btnNext:".jadidtarinha #samterast",
		btnPrev:".jadidtarinha #samtechap",
	});
			$('.porbazdid #body ').jCarouselLite({
			auto:2000,
			speed:1000,
			scroll:3,
		btnNext:".porbazdid #samterast",
		btnPrev:".porbazdid #samtechap",
	});
			$('.porforoshtarinha #body ').jCarouselLite({
			auto:2000,
			speed:1000,
			scroll:3,
		btnNext:".porforoshtarinha #samterast",
		btnPrev:".porforoshtarinha #samtechap",
	});
	var i=1;
	$("#slider #samterast").click(function(){
		i=parseInt($("#slider #slidergozine").find('.activeslider').attr('id'));
		i=i-1;
		$('#slider #sliderimg span').css('display','none')
		$("#slider #slidergozine").find('.activeslider').removeClass('activeslider');
		$("#slider #slidergozine").find('.'+i+'').addClass('activeslider');
		$("#slider #sliderimg").find('.'+i+'').css('display','block');
		$("#slider #sliderimg").find('.'+i+'').animate({'opacity':'1'},1000,function(){
		$("#slider #sliderimg").find('.'+i+'').css('display','none');
		$("#slider #sliderimg").find('.'+i+'').css('opacity','0');
		});
		
	})
	$("#slider #samtechap").click(function(){
		i=parseInt($("#slider #slidergozine").find('.activeslider').attr('id'));
		i=i+1;
		$('#slider #sliderimg span').css('display','none')
		$("#slider #slidergozine").find('.activeslider').removeClass('activeslider');
		$("#slider #slidergozine").find('.'+i+'').addClass('activeslider');
		$("#slider #sliderimg").find('.'+i+'').css('display','block');
		$("#slider #sliderimg").find('.'+i+'').animate({'opacity':'1'},1000,function(){
		$("#slider #sliderimg").find('.'+i+'').css('display','none');
		$("#slider #sliderimg").find('.'+i+'').css('opacity','0');
		});
		
	})
	
	
		$("#slider #slidergozine span").hover(function(){
	var i=$(this).attr('class');
	
	$('#slider #sliderimg span').css('display','none');
		$('#slider #sliderimg span').css('opacity','0');
		
	//$("#slider #slidergozine").find('.activeslider').removeClass('activeslider');
		//$("#slider #slidergozine").find('img').remove();
		
		$('#slider #sliderimg ').find('.'+i+'').css('display','block');
		$('#slider #sliderimg ').find('.'+i+'').animate({'opacity':'1'},200,function(){
			$('#slider #sliderimg ').find('.'+i+'').css('opacity','0')
			$('#slider #sliderimg ').find('.'+i+'').css('display','none');
			
		});
		
		
	 
		

	});
	slider(i);
	setInterval(function(){
	slider(i);
	},18000);
	
	
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



</script>
</html>
