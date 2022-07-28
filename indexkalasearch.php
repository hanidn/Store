 

<?php
include("connection.php");
	include("oop.php");
$oop=new store;
		?>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>سایت فروشگاهی</title>
	<link href="css/jquery-ui.css">
    <link href="css/font.css" rel="stylesheet">
<script src="js/jquery-2.19.2.min.js"></script>

	<script src="js/pluginslider.js"></script>
	<script src="js/jquery.slider.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
	<script src="https://kit.fontawesome.com/74a1fe2955.js" crossorigin="anonymous"></script>
<script src="js/jquery-ui.js"></script>
</head>
	<style>
        *{
            font-family: byekan;
            
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
		<span><img src="./img/icon1.png">فروشگاه اینترنتی،<a href="#">وارد شوید</a>
			</span>
	     <!--<span><img src="./img/icon2.png"><a href="#">ثبت نام کنید</a></span>-->
		<span id="logo"><img src="img/6087f2b060c7a92408bac811_logo.svg"></span>
		</span>
		<span id="bakhshe2">
			
		<span id="sabadrkharid">
			<img src="img/shopping_cart.png">
			<a href="product.php?menu=1&submenu=7&dkp=6"><span>سبد خرید</span></a>
			<!--<span id="tedad">0</span>-->
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
	
	$sqlmenu="SELECT * FROM `menu_tbl` where valed=? ";
    $datamenu=array('0');
    $res=$oop->select($sqlmenu,$datamenu);
	foreach($res as $resultmenu){
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
        
        #body #slider-range{
            width: 100%;
            margin-top: 10px;
            float: right;
        }
        #right #color-color{
            width: 5px;
            height: 12px;
            float: right;
            margin-top: 5px;
        }
        #right #color-input{
            float: right;
        }
         #right #color-name{
             font-family: byekan;
             color: #777;
             text-align: right;
           text-align: right;
             margin-right: 5px;
            float: right;
        }
	</style>
	<div id="main">
	<div id="r1170">
		<div id="right">
		<span id="titr">
			جستجوی پیشرفته در این گروه
			<img src="img/search2.png" width="25" height="25"><span style="float: left;margin-left: 50px;font-size: 30px;">|</span>
			</span>
			<div id="rightmenu">
				
				
			<span id="header" style="direction: rtl;">بر اساس قیمت:</span>
			<span id="body">
				
                <div id="slider-range"></div>
                <span id="minamount" style="float: left;direction: rtl"><span>100000</span> تومان</span>
                 <span id="maxamount" style="float: right;direction: rtl"><span>60000000</span> تومان</span>
				</span>
				
				<br><br><br>
				<div id="tarkibrang">
                
                	<span id="header" style="direction: rtl;">بر اساس رنگ:</span>
                    <span id="body">
                    <ul style="float: right;overflow: hidden;height: 120px">
                    <li><span id="color-input" class="siah"><input type="checkbox"></span>
                        <span id="color-color" style="background: #000;"></span>
                        <span id="color-name">سیاه</span>
                        </li>   
                     <li><span id="color-input" class="sabz"><input type="checkbox"></span>
                        <span id="color-color" style="background: #0f0;"></span>
                        <span id="color-name">سبز</span>
                        </li>      
                     <li><span id="color-input" class="ghermez"><input type="checkbox"></span>
                        <span id="color-color" style="background: #f00;"></span>
                        <span id="color-name">قرمز</span>
                        </li>     
                     <li><span id="color-input" class="sefid"><input type="checkbox"></span>
                        <span id="color-color" style="background: #fff;"></span>
                        <span id="color-name">سفید</span>
                        </li> 
                         <li><span id="color-input" class="siahs"><input type="checkbox"></span>
                        <span id="color-color" style="background: #000;"></span>
                        <span id="color-name">بنفش</span>
                        </li>   
                     <li><span id="color-input" class="sadbz"><input type="checkbox"></span>
                        <span id="color-color" style="background: #0f0;"></span>
                        <span id="color-name">زرد</span>
                        </li>      
                     <li><span id="color-input" class="ghefrmez"><input type="checkbox"></span>
                        <span id="color-color" style="background: #f00;"></span>
                        <span id="color-name">آبی</span>
                        </li>     
                     <li><span id="color-input" class="sefids"><input type="checkbox"></span>
                        <span id="color-color" style="background: #fff;"></span>
                        <span id="color-name">خاکستری</span>
                        </li>

                        </ul>
            <a id="bishtar" style="float: right;margin-right: 20px;direction: rtl;cursor: pointer;">+بیشتر</a>
             <a id="bastan" style="float: right;margin-right: 20px;direction: rtl;cursor: pointer;display: none;">- بستن</a>
                    </span>
                </div>
			
				
	</div>
		</div>
		<style>
			#left{float: right;
		width: 860px;
		height: 100%;
		background: #fff;
				margin-right: 10px;
				padding-bottom: left;
			}
            #moghayese{
                float: right;
                width: 100%;
                height: 210px;
                background:#fff;
                position: relative;
                border-bottom: 1px solid #ccc;
            }
            #moghayese li{
                list-style: none;
                float: right;
                width: 150px;
                height: 150px;
                border: 1px solid #ccc;
                text-align: center;
                position: relative;
                margin: 30px;
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
            #moghayese #see_co{
                position: absolute;left: 0;
                bottom: 100px;
                margin: 10px;
                cursor: pointer;
            }
            #moghayese #del_co{
                position: absolute;left:0;
                bottom: 60px;
                margin: 10px;
                cursor: pointer;
            }
            #count_co{
                position: absolute;
                bottom: -12px;
                left: 65px;
                width: 120px;
                height: 25px;
                background: #00afc8;
                color: #fff;
                font-family: byekan;
                font-size: 12px;
                border-radius: 5px;
                direction: rtl;
                text-align: center;
            }
            #close_co,#open_co{
                position: absolute;
                left: 20px;
                bottom: -12px;
                background: #555;
                color: #f00;
                height: 25px;
                border-radius: 5px;
                cursor: pointer;
                font-family: byekan;
                font-size: 18px;
                line-height: 26px;
                width: 30px;
                text-align: center;
                
            }
		#left #radaddress{
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
		#left #radaddress span{margin-right: 10px;
		line-height: 33px}
			
		#left #searchresult {background:none;
			direction: rtl;
			text-align: right;
			width: 100%;
			height: 30px;
			float: right;
			line-height: 25px;}
			#left #searchresult>span,#left #searchgozine>span,#left #searchgozineentekhab span{
				float:right;
				font-size: 11px;
				font-family: byekan;
				height: 15px;
				background: #eee;
				padding: 3px;
				border: 1px solid #aaa;
				margin-left: 5px;
				line-height: 12px;
				text-align: right;
				position: relative;
				
				border-radius: 5px;
				cursor: pointer;
				margin-bottom: 5px;
				color: #777;
			}
			#left #searchgozineentekhab .resultgozine{
				height: auto !important;
			    background: #fff;
				padding: 0 !important;
				width: 136px; 
				right: -4px;
				margin-bottom: -4px;

			}
			#left #searchgozineentekhab .resultgozine span{border: none!important;
			}
			#left #searchgozine>span,#left #searchgozineentekhab span{
				width: 130px;
			}
			#left #searchresult span  a,#left #searchgozine span a,#left #searchgozineentekhab a{
				background:red!important;
				border: 1px solid #aaa;
				color: #fff;
				cursor: pointer;
				float: left;
				height: 19px;
				line-height: 20px;
				margin-right: 5px;
				margin-top: -3px;
				text-align: center;
				width: 11px;
				position: relative;
				margin-left: -4px;
				cursor: pointer;
				border-radius: 5px 0 0 5px;
				
			}
			
			#left #searchgozine span a,#left #searchgozineentekhab a{background: none!important;}
			#left #searchgozineentekhab span{background: #fff;
			height: 20px;
			line-height: 15px!important;
				
			}
			#left #searchgozine span a img{
				left: -7px;
				position: absolute;
				top: -4px;
				width: 25px;
			}
			#left #searchgozineentekhab a{border: none!important;
			border-right: 1px solid #aaa!important;
			color: red!important;
			margin: 1px;
			margin-left: 4px!important;}
			#searchgozineentekhab{
				box-shadow: 0 0 252px 20px #ccc;
			}
			#left #searchgozine .titrgozine #gozineha{float: right;
			background: #fff;
			height: auto;
			position: absolute;
			right: 0px;
			top:21px;
			width: 153px;
			z-index: 1;
			display: none;
			cursor: pointer}
			#left #searchgozine .titrgozine #gozineha ul li{
				list-style: none!important;
				float: right!important;
				text-align: right!important;
				
				font-size: 13px!important;
				height: 23px!important;
				width: 100%!important;
				cursor: pointer;
			}
			#left #searchgozine .titrgozine #gozineha a{
				color: #000;
				float: right;
				margin: 0;
				padding: 3px 0;
				text-align: right;
				width: 95%;
				z-index: 1;
				border: 0;
				border-bottom: 1px solid #aaa;
				margin-bottom: 5px;
				cursor:pointer;
			}
			#left #searchgozine{
				width: 100%;
				height: auto;
				float: right;
				box-shadow: 0 0 50px 10px #ccc;
			}
			#serachset{
				border: 1px solid #aaaaaa;
				width: 96%;
				float: right;
				height: auto;
				background: #ffffff;
				padding: 10px;
				margin: 5px;
			}
			#serachset .searchtext{
				width: 301px;
				float: right;
				height: 40px;
				background:rgba(0,0,0,0);
				position: relative;
				cursor: pointer;
			}
			#serachset .searchtext input{width: 89%;
				height:26px;
		
			margin: 0;
			padding: 0;
			float: right;
			}
			#serachset .searchtext .serachsubmit{
				position: absolute;
				left: 0;
				background:rgba(0,0,255,0.5) url("img/search2.png") no-repeat center;
				height: 26px;
				top: 0;
				width: 27px;
				border: 1px solid #aaa;
			}
			#left #searchgozine>span,#left #searchgozineentekhab span{
				width: 130px;
				height: auto;
			}
			#serachset #mojood{
				width: 177px;
				height: 24px;
				float: right;
				font-family: byekan;
				font-size: 12px;
				margin: 5px 10px;
			}
			#serachset #mojood span{width: 40px;
				height: 20px;
				float: right;
			background:#ccc;
			font-family: byekan;
				position: relative;
				cursor: pointer;
				
			}
			#serachset #mojood a{
				cursor: pointer;
				line-height: 19px!important;
			}
			#serachset #noenamayesh{
				float: left;
				width: 100px;
				height: auto;
				background: none;
				margin: 5px;
			}
			#serachset #noenamayesh span{
				width: 30px;
				height: 30px;
				margin: 5px;
				background: none;
				float: left;
				border: 1px solid #aaa;
			}
			#serachset #noenamayesh span img{
				float: right;
			}
			#serachset #moratabsazi{
				float: right;
				width: 100%;
				height: 35px;
				font-family: byekan;
				font-size: 12px;
				text-align: right;
				direction: rtl;
			}
			#serachset #safhebandi{
			
				height: 30px;
				float: left;
				background:none;
			}
			#serachset #safhebandi span{
				background: blue;
				height: 25px;
				width: 30px;
				font-family: byekan;
				font-size: 12px;
				line-height: 21px;
				padding: 0 5px;
				width: 61px;
				float: left;
				color: #fff;
				border-radius: 5px;
			}
			#serachset #safhebandi a{
				float: left;
				width: 20px;
				height: 25px;
				background: red;
				color: #000;
				border-radius: 5px;
				margin: 0px 5px;
				text-align: center;
				cursor: pointer;
			}
			.activesafhe{
				background: #ccc!important;
				color: #fff!important;
			}
			.div-kolii{
				float: left;
				width: 100%;
				height: auto;
				background: none;
				border: 1px solid #ccc;
			}
			.div-kolii li{
				background: none;
				float: left;
				height: 321px;
				list-style: outside none none;
				margin:16px;
				width: 21%;
				border: 1px solid #aaa;
				position: relative;
			}
			.div-kolii li span{
				margin: 0 auto;
				overflow: hidden;
				display: block;
				text-align: center;
				width: 100%;
				
			}
			.div-kolii li .kala-tasvir{
				height: 160px;
			}
			.div-kolii li .kala-tasvir img{
				margin:10px;
			}
			.div-kolii li .kala-rang span{
				width: 10px;
				height: 10px;
				background: red;
				margin-top: 10px;
				border: 1px solid #aaa;
			}
			.div-kolii .kala-keyfiat img{
				width: 8%;
			}
			.div-kolii .kala-keyfiat{
				text-align: left!important;
				margin: 10px 10px 0 10px;
				font-size: 12px;
			}
			.div-kolii .kalaname{
				text-align: left!important;
				margin: 5px 10px;
				font-size: 12px;
			}
			.div-kolii .kala-ghavallie ,.div-kolii .kala-ghnahai{
				text-align: right!important;
				direction: rtl;
			}
			.div-kolii .kala-ghavallie{
				font-size: 12px;
				text-decoration: line-through;
				font-family: byekan;
				color: red;
				font-weight: bold;
				float: right;
				margin-right: 10px!important;
				margin-top: 13px!important;
				margin-bottom: 6px!important;
			}
			.div-kolii .kala-ghnahai{
				font-size: 14px;
				font-family: byekan;
				color: green;
				float: right;
				font-weight: bold;
				margin-top:2px;
				margin-right: 10px!important;
				
			}
			.div-kolii .kala-sabad{
				position: absolute;
				bottom: 15px;
				left: 10px;
				width: 40px!important;
				height: 40px;
				background: #0f0;
				border-radius: 5px;
			}
			.div-jozee{
				overflow: auto;
				min-height:200px;
			
				width: 100%;
				background: none;
				float: left;
				border: 1px solid #aaa;
			}
			.div-jozee .div-right-jozee{
				float: right;
				width: 23%;
			
				background: none;
				text-align: center;
			}
				.div-jozee .div-left-jozee{
				float:left;
				width: 76%;
			
				background: none;
				text-align: right;
				font-family: byekan;
				font-size: 14px;
					position: relative
			}
			.div-jozee li{
				list-style: none;
				text-align: center;
				font-family: byekan;
				font-size: 14px;
				position: relative;
			}
			.div-jozee li span{
				margin: 0 auto;
				overflow: hidden;
				display: block;
				text-align: center;
				width: 100%;
				
			}
			.div-jozee li .kala-tasvir{
				height: 160px;
			}
			.div-jozee li .kala-tasvir img{
				margin:5px;
			}
			.div-jozee li .kala-rang span{
				    width: 6%;
    height: 12px;
    background: none;
    margin-top: 10px!important;
				
			}
			.div-jozee li .kala-emtiaz span{
				height:40px;
				background: none;
				margin-top: 10px!important;}
			.div-jozee .kala-name{
				float: right;
				margin: 5px;
				font-family: byekan;
				display: block;
				cursor: pointer;
				width: 100%;
			}
			.div-jozee a h5,.div-jozee a h1{
				width: 100%;
				display: block;
				float: right;
				margin: 0!important;
				color: #555;
				cursor: pointer;
			
			}
			.div-jozee .kala-tozih span{
				text-align: right;
				direction: rtl;
				float: right;
				font-family: byekan;
				font-size: 12px;
			}
				.div-jozee .kala-ghavallie{
				font-size: 12px;
				text-decoration: line-through;
				font-family: byekan;
				color: red;
				font-weight: bold;
				float: right;
				margin: 20px 0px;
					width: 100%;
					direction: rtl;
			}
			.div-jozee .kala-ghnahai{
				font-size: 14px;
				font-family: byekan;
				color: green;
				float: right;
				font-weight: bold;
				margin: 0px 0px;
				width: 100%;
				direction: rtl;
			}
			.div-jozee .kala-jozieyat a{
			position: absolute;
    left: 10px;
    bottom: -105px;
    background: #2AA258;
    font-size: 16px!important;
    border-radius: 7px;
    width: 93px;
    height: 29px;
    color: white;
    font-family: byekan;
				cursor: pointer;
			}
			#mojood .icon-mojood{
				position: absolute;
				width: 23px;
				height: 23px;
				left: 0px;
				top: -2px;
				background: blue;
				border-radius: 100%;
				
			}
            .moghayese-span{
                
                color: #000;
                left: -6px;
                font-family: byekan;
                font-size: 10px;
                top: 0px;
                width: 60px!important;
                position: absolute;
                
            }
		</style>
			<div id="left">
                <div id="moghayese" style="display:inline;">
                <ul>
                   
                    
                    </ul>
                <a id="see_co" href="moghayese.php?menu=<?php echo $_GET['menu'];?>&submenu=<?php echo $_GET['submenu'];?>">
                    <img src="img/Download_list.gif">
                    </a>
                    <span id="del_co">
                    <img src="img/deleteallcompare.gif">
                    </span>
                    
                </div><!---moghyse-->
                <div id="close_open_moghayese" style="position: relative;float: right;width: 100%;display:none;">
                <span id="count_co"><span>1</span> کالا در لیست مقایسه</span>
                <span id="close_co"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></span>
                <span id="open_co" style="display: none;"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></span>
                </div>
		<div id="radaddress">
		<?php
				if(isset($_GET['menu'])){
					$_GET['menu']='1';
				}
	$sqldastemenu="select * from `menu_tbl` where id=? ";
    $datadastemenu=array($_GET['menu']);
    $res3=$oop->select($sqldastemenu,$datadastemenu);
	foreach($res3 as $resultdastemenu )
	{
	$iddastemenu=$resultdastemenu['id'];
	$namedastemenu=$resultdastemenu['name'];
	}
			?>
	<?php
	$sqldastesubmenu2="select * from `menu_tbl` where id=? ";
     $datadastesubmenu2=array($_GET['submenu']);
    $res4=$oop->select($sqldastesubmenu2,$datadastesubmenu2);
	foreach($res4 as $resultdastesubmenu2 )
	{

	$namedastesubmenu2=$resultdastesubmenu2['name'];
		
	}
	?>
	        <span>فروشگاه اینترنتی</span>>
			<span><?php echo $namedastemenu;?></span>>
			
			
			<?php
		$sqlcount="SELECT * FROM `mahsool_tbl` where valed=? and subvaled=?  ";
$datacount=array($_GET['menu'],$_GET['submenu']);

	
    $counter=$oop->rowCount($sqlcount,$datacount);
			?>
		<span id="natije"><span>< <?php echo $counter;?></span>نتیجه>></span>
	
		</div>
		<div id="searchresult">
		
				</div>
				
<div id="searchgozine">
<?php
	
	$sqlvijegi="select * from `vijegi_tbl` where valed= '".$_GET['submenu']."' ";
	$previjegi=$connect->prepare($sqlvijegi);
	$previjegi->execute();
	while($resultvijegi=$previjegi->fetch(PDO::FETCH_ASSOC)){
	$id=$resultvijegi['id'];
		$name=$resultvijegi['name'];
	
	$sqlsubvijegi="select * from `vijegi_tbl` where subvaled=' ".$id." ' ";
	$presubvijegi=$connect->prepare($sqlsubvijegi);
	$presubvijegi->execute();
	
	
echo '<span class="titrgozine"><a><img src="img/down.png"></a><span style="float:right;height:100%;width:89%">'.$name.'</span>';
		
echo '<span id="gozineha">
	<a id="'.$id.'" class="hame">همه<input type="checkbox" checked="checked"></a>
	<ul>';
	
	while($resultsubvijegi=$presubvijegi->fetch(PDO::FETCH_ASSOC)){
	$idsubvijegi=$resultsubvijegi['id'];
		$namesubvijegi=$resultsubvijegi['name'];
		
		echo '<li id="'.$idsubvijegi.'"  class="'.$id.'">'.$namesubvijegi.'<input type="checkbox"></li>';
	} 
	
echo'</ul>
	</span>		
	<div id="searchgozineentekhab"></div>
	</span>	
	';}
	?>	
	


		</div>
				<div id="serachset">
				
				<span class="searchtext">
					<input type="text">
					<span class="serachsubmit"></span>
					</span>
				<span id="mojood">
					فقط نمایش کالاهای موجود:
					<span class="backicon">
					<a class="yes" style="float: right;">yes</a>
						<a class="icon-mojood"><input type="checkbox" style="width: 63%;height: 78%;
    position: absolute;
    left: 0px;opacity: 0;">
						</a>
					<a class="no" style="float: left;">no</a>

					</span>
					
					</span>
					<span id="noenamayesh">
					<span class="koli"><img src="img/center_right.png" width="30" height="30"></span>
					<span class="jozee"><img src="img/align right.png" width="30" height="30"></span>
					</span>
					<span id="moratabsazi">
					<select id="moratabsazia">
						<option value="bazdid">پربازدید ترین ها</option>
						<option value="pishnehad">پیشنهادات ویژه</option>
						<option value="id">جدیدترین ها</option>
						<option value="gheymatb">قیمت</option>
					</select>
						
						<select id="moratabsazib">
						<option value="soudi">صعودی</option>
						<option value="nozoli">نزولی</option>
						
					</select>
					تعداد نمایش:	
					<select id="moratabsazic">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>

					</select>
					</span>
					<span id="safhebandi">
						<span class="nextpage" >صفحه بعد</span>
						<div style="float: left">
						<?php
						
						$sqlkalaha="SELECT * FROM `mahsool_tbl` where valed='".$_GET['menu']."' and subvaled='".$_GET['submenu']."' ";
					$stmtha=$connect->prepare($sqlkalaha);
					$stmtha->execute();
					$count=$stmtha->rowCount();	
						$tedadkala=$count;
						$tedadnamyesh=1;
						$tedadsafahat=ceil($tedadkala/$tedadnamyesh);
						for($i=1;$i<=$tedadsafahat;$i++){
							$display='';
							$active='';
							if($i==1){$active='activesafhe';}
							else{$active='';}
							if($i>4){$display='none';}
								echo '<a class="shsafhe '.$active.'" style="display:'.$display.' ">'.$i.'</a>';
							
						}
						?>
						</div>
						<span class="prevpage" style="float: right;">صفحه قبل</span>
					</span>
				</div><!--serachset---->
				<div id="namayeshkala" class="div-kolii" >
				
				<ul>
							<?php
		$sqlkala="SELECT * FROM `mahsool_tbl` where valed='".$_GET['menu']."' and subvaled='".$_GET['submenu']."' order by bazdid  desc limit 12";
		$stmt=$connect->prepare($sqlkala);
		$stmt->execute();
					
					
	$sqlkala="SELECT * FROM `mahsool_tbl` where valed=".$_GET['menu']." and subvaled=".$_GET['submenu']." order by bazdid  desc limit 12";
	$stmt=$connect->prepare($sqlkala);
	$stmt->execute();
	while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
		
		$img=$result['img'];
        $id=$result['id'];
		$emtiaz2=$result['emtiaz'];
		$emtiaz=floor($result['emtiaz']);
		if($emtiaz=='1' || $emtiaz=='2' )
		{$staremtiaz='<i class="fa fa-star"></i>';}
		if($emtiaz=='3' || $emtiaz=='4'){$staremtiaz='<i class="fa fa-star"></i><i class="fa fa-star"></i>';}
		if($emtiaz=='5' || $emtiaz=='6'){$staremtiaz='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';}
		$name=$result['name'];
		$gheymata=$result['gheymata'];
		$gheymatb=$result['gheymatb'];
		$pishnehad=$result['pishnehad'];
		$tozih=$result['tozih'];
		if($pishnehad=='1'){
			$pishnehad='src="img/SpecialOffer.png" ';
		}
		else{
			$pishnehad='';	
		}
		$color=$result['color'];
		if($color=='سیاه'){
			$color='black';
		}
		if($color=='قرمز'){
			$color='red';
		}
			if($color=='سبز'){
			$color='green';
		}
	echo '<li id="'.$id.'">
    <span class="moghayese-span" style="display:none"><input id="input'.$id.'" type="checkbox" onChange="moghayese(this,'.$id.')">مقایسه</span>
    <img style="position: absolute; right: 0;z-index: 1;" '.$pishnehad.'  width: "90" height:"90"><span class="kala-tasvir"><img src="'.$img.'" width="160px" height="150px"></span><span class="kala-rang"><span style="background:'.$color.'  "></span></span><span class="kala-keyfiat"><a class="emtiyaz-star"></a><a class="emtiyaz-adad">'.$emtiaz.'</a>
					</span>
					<span class="kalaname">'.$name.'</span>
					<span class="kala-ghavallie">'.$gheymata.' تومان</span>
					<span class="kala-ghnahai">'.$gheymatb.' تومان</span>
					<span class="kala-sabad"><img src="img/shopping_cart.png"></span>';}?>
	
					
					</ul>
				
				</div><!--namayeshkala--koli-->
				<div id="namayeshkala" class="div-jozee" style="display: none;">
					<?php
					$sql="SELECT * FROM `mahsool_tbl` where valed=".$_GET['menu']." and subvaled=".$_GET['submenu']." order by bazdid  desc limit 12 ";
					$stmt=$connect->prepare($sql);
					$stmt->execute();
	while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
		
		$img=$result['img'];
		$emtiaz2=$result['emtiaz'];
		$emtiaz=floor($result['emtiaz']);
		if($emtiaz=='1' || $emtiaz=='2' )
		{$staremtiaz='<i class="fa fa-star"></i>';}
		if($emtiaz=='3' || $emtiaz=='4'){$staremtiaz='<i class="fa fa-star"></i><i class="fa fa-star"></i>';}
		if($emtiaz=='5' || $emtiaz=='6'){$staremtiaz='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';}
		$name=$result['name'];
		$gheymata=$result['gheymata'];
		$gheymatb=$result['gheymatb'];
		$pishnehad=$result['pishnehad'];
		$tozih=$result['tozih'];
		if($pishnehad=='1'){
			$pishnehad='src="img/SpecialOffer.png" ';
		}
		else{
			$pishnehad='';	
		}
		$color=$result['color'];
		if($color=='سیاه'){
			$color='black';
		}
		if($color=='قرمز'){
			$color='red';
		}
			if($color=='سبز'){
			$color='green';
		}
		echo '<div style="height:300px;float:right;margin:10px 0px;box-shadow:0px 0px 10px 3px rgb(204,204,204);width:100%">			
		<span class="div-left-jozee >
					<a class="kala-name">
						<h1>'.$name.'</h1></a>
						<a class="kala-name"><h5>'.$tozih.'</h5></a>
						<span class="kala-tozih">
						';
		?>
					<?php
	$sqlmoshakhasat="SELECT * FROM `moshakhasat_tbl` where submenu=".$_GET['submenu']."  ";
		$stmtmoshakhasat=$connect->prepare($sqlmoshakhasat);
		$stmtmoshakhasat->execute();
	while($resultmoshakhasat=$stmtmoshakhasat->fetch(PDO::FETCH_ASSOC)){
		$namemoshakhasat=$resultmoshakhasat['name'];
		$idmoshakhasat=$resultmoshakhasat['id'];
		
		$sqljmoshakhasat="SELECT * FROM `jmoshakhasat_tbl` where idmahsool=? and value=? and idmoshakhasat=?  ";
    $stmtjmoshakhasat=$connect->prepare($sqljmoshakhasat);
	$stmtjmoshakhasat->execute();
	while($resultjmoshakhasat=$stmtjmoshakhasat->fetch(PDO::FETCH_ASSOC)){
		$value=$resultjmoshakhasat['value'];
	
		echo '
							<br><br>
							<span>'.$namemoshakhasat.' :</span>
							<span>'.$value.'</span>
							<br>';	
	                        }
		}
		?>
					<?php
		echo '
</span>
								<br>
					<span class="kala-ghavallie">'.$gheymata.' تومان</span>
						<br>
					<span class="kala-ghnahai">'.$gheymatb.' تومان</span>
						
					</span>
					<span class="div-right-jozee">
					<li>
				<img style="position: absolute; right: 0;z-index: 1;" '.$pishnehad.'  width: "90" height:"90">
					<span class="kala-tasvir"><img src="img/Mobile-Phone-Huawei-Nexus-6P9ac277.jpg" width="160px" 
					height="150px"></span>
					<span class="kala-rang"><span style="background:'.$color.'  "></span></span>
						<span class="kala-emtiaz" style="margin:10px 0px">امتیاز کاربران(از 141 رای)</span>
					<span class="kala-keyfiat">
						<a class="emtiyaz-star"></a>
						<a class="emtiyaz-adad">'.$emtiaz2.'</a>
					</span>
					
					<span class="kala-sabad"><img src="img/shopping_cart.png" style="background: green;border-radius: 5px;margin-top: 0px;"></span>
						
					</li>
</span>
</div>';
	
	
	}
					
			?>
					


				</div><!--namayeshkala--jozee-->
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
	
<!-- Main Container Ends -->
        <input id="colorcard" type="hidden">
       
</body>
    		<script>
                
            var colorall='';
             
            $('#right #color-input input').click(function(){
                 
           if($(this).is(':checked')){
             
               var color=$(this).parents('li').find('#color-name').text();
               //alert(color);
               colorall=color+' '+colorall;
               $('#colorcard').val(colorall);
            entekhab=1;
			jostejo();
              }
            })
		 var entekhab=1;
		$("#safhebandi .shsafhe").click(function(){
		
			entekhab=$(this).text();
			jostejo();
			
		});
		$('#moratabsazia').change(function(){
            entekhab=1;
			jostejo();
		 
		})
			$('#moratabsazib').change(function(){
                 entekhab=1;
			jostejo();
		
		})
			$('#moratabsazic').change(function(){
            entekhab=1;
			jostejo();
		 
		})
		$('#mojood input').change(function(){
             entekhab=1;
			jostejo();
		
		})
			
		$("#safhebandi .shsafhe").click(function(){
		
			entekhab=$(this).text();
			jostejo();
			
		});
			
			
	
	   function shsafhe(shomare){
							$('.shsafhe').each(function(index,element){
											   
							
							 $(this).hide();
								 $(this).removeClass('activesafhe');
							var shomare2=$(this).text();
								shomare2=parseInt(shomare2);
							if(shomare2>=shomare-4 && shomare2<=shomare+4){
							   $(this).show();
							   }
								  });//each
						
						var activesafhe=shomare-1;
					$('.shsafhe:eq('+activesafhe+')').addClass('activesafhe');
							}//shsafhe
		function jostejo(){
	
		var menu=<?php echo $_GET['menu']; ?>;
		var submenu=<?php echo $_GET['submenu']; ?>;
		var mojood='';
		if($('#mojood input').is(':checked')){
			mojood='yes';}
			else{mojood='no';}
			var moratabsazia=$('#moratabsazia option:selected').val();
			var moratabsazib=$('#moratabsazib option:selected').val();
			var tedadnamyesh=$('#moratabsazic option:selected').val();
			var maxamount=$('#right #maxamount span').text();
            var minamount=$('#right #minamount span').text();
            var colorcard=$('#colorcard').val();
              var searchtext=$('.searchtext input').val();
         //alert(searchtext);
            //alert(minamount);
				//alert(tedadnamyesh);
			//alert(moratabsazib);
		$.ajax({
            url:'searchajax.php',
				type:'POST',
				data:{ajaxmenu:menu,ajaxsubmenu:submenu,ajaxentekhab:entekhab,mojood:mojood,moratabsazia:moratabsazia,moratabsazib:moratabsazib,tedadnamyesh:tedadnamyesh,maxamount:maxamount,minamount:minamount,colorcard:colorcard,searchtext:searchtext},
				dataType:"json",
				success:function(data){
                    //alert(data);
					$('.div-kolii ul').empty();
					
					
		$.each(data[1],function(index,value){
		$('#natije span').text(data[0]);
		var img=value[5];
		var emtiaz2=value[10];
		var emtiaz=Math.floor(value[10]);
		if(emtiaz=='1' || emtiaz=='2' )
		{var staremtiaz='<i class="fa fa-star"></i>';}
		if(emtiaz=='3' || emtiaz=='4'){var staremtiaz='<i class="fa fa-star"></i><i class="fa fa-star"></i>';}
		if(emtiaz=='5' || emtiaz=='6'){var staremtiaz='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';}
		
		var pishnehad=value[1];
		
		if(pishnehad=='1'){
			pishnehad='src="img/SpecialOffer.png" ';
		}
		else{
			pishnehad='';	
		}
		var color=value[9];
		if(color=='سیاه'){
			color='black';
		}
		if(color=='قرمز'){
			color='red';
		}
			if(color=='سبز'){
			color='green';
		}
            var tik='';
						var y=$("#moghayese ul").find('#'+value[0]).length;
            //alert(y);
            if(y>0){
               tik='checked';
               }
            else{
                
            }
						$('.div-kolii ul').append('<li id="'+value[0]+'"><span class="moghayese-span" style="display:none"><input id="input'+value[0]+'" type="checkbox" onChange="moghayese(this,'+value[0]+')" '+tik+'>مقایسه</span><img style="position: absolute; right: 0;z-index: 1;" '+pishnehad+'  width: "90" height:"90"><span class="kala-tasvir"><img src="'+value[5]+'" width="160px" height="150px"></span><span class="kala-rang"><span style="background:'+color+'"></span></span><span class="kala-keyfiat"><a class="emtiyaz-star"></a><a class="emtiyaz-adad">'+value[10]+'/امتیاز 10 </a></span><span class="kalaname">'+value[2]+'</span><span class="kala-ghavallie">'+value[6]+' تومان</span><span class="kala-ghnahai">'+value[7]+' تومان</span><span class="kala-sabad"><img src="img/shopping_cart.png"></span></li>');
					})//each
					
					$('#safhebandi div').empty();	
					var tedadkala=data[0];
					
					var tedadsafahat=Math.ceil(tedadkala/tedadnamyesh);
					var i;
					for(i=1;i<=tedadsafahat;i++){
					
			$('#safhebandi div').append('<a class="shsafhe">'+i+'</a>');
					}//for
		
	    shsafhe(entekhab);
		$("#safhebandi .shsafhe").click(function(){
		entekhab=$(this).text();
			
			jostejo();
			
		});
					$("#del_co").click(function(){
           $(this).parent().find('ul').empty();
             $("#moghayese").slideUp(500);
        });
        $(".div-kolii ul li").hover(function(){
           $(this).find('.moghayese-span').show();
        },function(){
             $(this).find('.moghayese-span').hide();
        });
				}//success
			   })//ajax
		
		
	}
	</script><!---jostejo--->
                        <script>
                    function moghayese(input,id){
                        var ax=$(input).parents('li').find('.kala-tasvir img').attr('src');
                        var data=$("#see_co").prop('href');
                        //alert(data);
                       var z=$('#moghayese ul li').length;
                        
                            $("#close_open_moghayese").show();
                        if($(input).is(':checked')){
                            if(z<3){
                        $("#moghayese ul").append(' <li id="'+id+'"><i onClick="removemoghayese('+id+')" class="fa fa-times-circle" aria-hidden="true"></i><img src="'+ax+'"</li>');}
                                else{
                            alert('کاربر گرامی!حداکثر تعداد مقایسه 3 کالا می باشد.');
                             $(".div-kolii").find('#input'+id).prop('checked',false);
                        }
                            /*if(z==0){
                              data=data+'?dkp[]='+id;  
                            }
                            else{
                                data=data+'?dkp[]='+id;
                            }*/
                             data=data+'&dkp[]='+id;
                            $("#see_co").prop('href',data);
                    }//if
                        else{
                           $("#moghayese ul").find('#'+id+'').remove();
                            var nregular=new RegExp('dkp\\[\\]='+id+'&*');
                            var changedata=data.replace(nregular,'');
                           /*if(changedata='moghayese.php?'){
                               changedata='moghayese.php';
                           }*/
                             $("#see_co").prop('href',changedata);
                        }
                       //$("#see_co").prop('href',changedata);
                         var x=$('#moghayese ul li').length;
                        $('#count_co span').text(x);
                        //if(x>0){
                           //$("#moghayese").slideDown(500);
                          // }
                        //else{
                           // $("close_open_moghayese").hide();
                           //  $("#moghayese").slideUp(500);
                         // $('#count_co span').text(x);
                       // }
                        //if 
                        
                       // alert(x);
                    }//moghayese
                        function removemoghayese(id){
                            
                        
                            $("#moghayese ul ").find('#'+id+'').remove();
                            $(".div-kolii").find('#input'+id).prop('checked',false);
                             var x=$('#moghayese ul li').length;
                            $('#count_co span').text(x);
                               if(x>0){
                           $("#moghayese").slideDown(500);
                           }
                        else{
                            $("close_open_moghayese").hide();
                             $("#moghayese").slideUp(500);
                         
                        }
                        }//remove moghayese
                    
                    </script><!---moghayese2--->

    <script>
        $("#close_co").click(function(){
         
            $("#moghayese").slideUp(500);
            
            $('#open_co').show();
            $(this).hide();
          
            
        });
        $("#open_co").click(function(){
         
            $("#moghayese").slideDown(500);
          
            $('#close_co').show();
          $(this).hide();
            
        });
        $("#del_co").click(function(){
           $(this).parent().find('ul').empty();
             $("#moghayese").slideUp(500);
        });
        $(".div-kolii ul li").hover(function(){
           $(this).find('.moghayese-span').show();
        },function(){
             $(this).find('.moghayese-span').hide();
        });
    
    </script>

            <script>
          
        $('#right #bishtar').click(function(){
          $(this).parent('#body').find('ul').animate({'height':'250px'},400);
          
              $('#right #bishtar').hide();
             $('#right #bastan').show()
       
             $('#right #bastan').click(function(){
          $(this).parent('#body').find('ul').animate({'height':'120px'},300);
             $('#right #bishtar').show();
             $('#right #bastan').hide();
        })
             })
        </script><!---bishtar-bastan-->

              <script>
  $(function(){
    $("#slider-range").slider({
      range: true,
      min: 10000,
      max: 6000000,
      values: [ 10000, 6000000 ],
  step:10000,
      slide: function( event, ui ) {
          $('#right #minamount span').text(ui.values[ 0 ]);
          $('#right #maxamount span').text(ui.values[ 1 ]);
          entekhab=1;
          jostejo();
      }
        });
  })
  </script><!---maxomin--->


<script>
$('#serachset .serachsubmit').click(function(){
	var text=$(this).parent().find('input').val();
	
	if(text.length>2){
        entekhab=1;
		jostejo();
	}
})
</script>
<script>
	$('#mojood input').change(function(){
		if($(this).is(':checked')){
			$(this).parents().find('.icon-mojood').animate({'left':'20px'},500);
		}
		 else{
			$(this).parents().find('.icon-mojood').animate({'left':'-3px'},500);
		 }
	})
$("#noenamayesh .koli").click(function(){
	$(".div-jozee").hide();
	$(".div-kolii").show();
})
	$("#noenamayesh .jozee").click(function(){
		$(".div-kolii").hide();
	$(".div-jozee").show();
})
</script>
<script>
$('#searchgozine .titrgozine>span').hover(function(){
	$(this).parent().css('background','#fff');
	$(this).parent().find('#gozineha').slideDown();
},function(){
	
	$(this).parent().css('background','#eee');
	
})
	$("#searchgozine .titrgozine #gozineha").mouseleave(function(){
		$(this).slideUp();
	})
	$('#searchgozine .titrgozine').find('.hame input').change(function(){
		var checked=$(this).prop('checked');
		if(checked==true){
			$(this).parents('#gozineha').find('ul li input').prop('checked',false);
			var idhame=$(this).parent().attr('id');
			$('#searchresult  .'+idhame+' ').remove();
				$(this).parents('.titrgozine').find('#searchgozineentekhab #'+idhame+' ').remove();
		}
		else{
			
			
		}
	})
		$('#searchgozine .titrgozine').find('#gozineha ul li input').click(function(){
		var checked=$(this).prop('checked');
			 var classhame=$(this).parent().attr('class');
			var idhame=$(this).parent().attr('id');
			
		if(checked==true){
			$(this).parents('#gozineha').find('.hame input').attr('checked',false);
			var text=$(this).parent().text();
	       
			$('#searchresult').append('<span id="'+idhame+'" class="'+classhame+'"><a>x</a>'+text+'</span>');
			
		$('#searchresult span').find('a').click(function(){
			
	$(this).parent().remove();
			$('#searchgozine .titrgozine #gozineha ul #'+idhame+' ').find('input').prop('checked',false);
				$('.titrgozine').find('#searchgozineentekhab #'+idhame+' ').remove();
			var lengthremovetrue=$('.titrgozine').find('#searchgozineentekhab #'+classhame+'  span ').length;
			if(lengthremovetrue=='0' ){
				$('.titrgozine').find('#searchgozineentekhab #'+classhame+' ').hide();				
			}
			else{}
			
})
			
			var lengthsge=$(this).parents('.titrgozine').find('#searchgozineentekhab #'+classhame+'').length;
			if(lengthsge=='0'){
				$(this).parents('.titrgozine').find('#searchgozineentekhab').append('<span id="'+classhame+'" class="resultgozine"></span>');
			}
			   else{}
			
				var sublengthsge=$('#searchgozineentekhab #'+classhame+'  #'+idhame+' ').length;
			if(sublengthsge=='0'){
					$(this).parents('.titrgozine').find('#searchgozineentekhab #'+classhame+' ').show();
				$(this).parents('.titrgozine').find('#searchgozineentekhab #'+classhame+' ').append('<span id="'+idhame+'"><a>x</a>'+text+'</span>');
				
			}
			 else{}
			
			
		}
		else{
			
			$('#searchresult  #'+idhame+' ').remove();
			$(this).parents('.titrgozine').find('#searchgozineentekhab #'+idhame+' ').remove();
			var lengthremove=$(this).parents('.titrgozine').find('#searchgozineentekhab #'+classhame+'span').length;
			if(lengthremove=='0' ){
			$(this).parents('.titrgozine').find('#searchgozineentekhab #'+classhame+' ').hide();				
			}
			else{}
			
		}
	})
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



</script>
</html>
