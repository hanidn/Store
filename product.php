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
			
		<span id="sabadkharid">
			<img src="img/shopping_cart.png">
			<a href="login.php"><span>سبد خرید</span></a>
            <?php 
             $cookie=$_COOKIE['cart'];
            //echo $cookie;
            $tedadkol=0;
            if(isset($_COOKIE['cart'])){
                 
   $sql="select * from `cart_tbl` where cookie=? " ;
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
        <style>
            .moshakhasat_koli{
                width: 100%;
                height: auto;
                float: left;
                background: #fff;
                box-shadow: 0 0 2px 0 #ccc;
                border-radius: 5px;
                margin-bottom: 10px;
                position: relative;
            }
            .moshakhasat_koli .min-right{
                float: right;
                background: none;
                width: 420px;
                height: 100%;
                overflow: hidden;
                position: relative;
            }
            .moshakhasat_koli .min-right>img{
                position: absolute;
                border-right: 1px solid #ccc;
                border-top: 1px solid #ccc;
                width: 150px;
                height: 150px;
                right: 0;
            }
            .moshakhasat_koli .min-left{
                float: left;
                background:none;
                width:750px;
                height: 100%;
                overflow: hidden;
            }
            .moshakhasat_koli .top{
                width: 100%;
                float: right;
                height: 75px;
                background: none;
            
            }
            .moshakhasat_koli .top i{
                font-size: 16px;
                margin: 5px;
                color: #777;
                float: left;
                margin:40px 7px;
            }
            /*.moshakhasat_koli .top span{
                float: left;
                width: 170px;
                height: 20px;
                margin:40px 0px;
                overflow: hidden;*/
            }
               .moshakhasat_koli .mid{
                width: 100%;
                float: right;
                height: 400px;
                background: none;
                   margin-top: 5px;
                   text-align: center;
            }
            .moshakhasat_koli .mid img{
                height: 350px;
                width: 350px;
                margin: 15px auto;
            }
              .moshakhasat_koli .bottom{
                width: 100%;
                float: right;
                height: 90px;
                background: rgba(0,0,0,0);
                  margin-top: 5px;
            }
               .moshakhasat_koli .bottom a{
                width: 18%;
               box-shadow: 0 0 8px 1px #ccc inset;
                height: 70px;
                background: #fff;
                   float: left;
                   margin: 3px;
                   font-size: 49px;
                   text-align: center;
                   float: left;
                   
            }
        </style>
        <div class="moshakhasat_koli">
            <div class="min-right">
                <img src="img/SpecialOffer.png">
            <span class="top">
                <i class="fa fa-share-alt" aria-hidden="true"></i>
                 <i class="fa fa-bell" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <!--<span><img src="img/2f49328f-14ab-4e1e-897a-4ac450ed4fe8.png"></span>-->
                </span><!--top-->
            <span id="max_img" class="mid">
                
                <img src="img/9fd4d980776d3e609ff538fc6b6bfbdd575ee620_1650863735.jpg" width="350" height="350">
                </span><!--mid-->
                <span id="min_img" class="bottom"> 
                <a><img src="img/Mobile-Apple-iPhone-5s-16GB106bbe.jpg" width="50" height="50"></a>
                 <a><img src="img/Mobile-Phone-Huawei-Nexus-6P9ac277.jpg" width="50" height="50"></a>
                <a><img src="img/Samsung-Galaxy-A7-2018-Pink-copy-224.jpg" width="50" height="50"></a>
                 <a><img src="img/9fd4d980776d3e609ff538fc6b6bfbdd575ee620_1650863735.jpg" width="50" height="50"></a>
<a href="" style="line-height: 40px;">...</a>
                </span><!--bottom-->
            </div><!--min-right-->
            <style>
                .min-left .titr_pro{
                    float: right;
                    margin: 5px;
                    width: 98%;
                    background: #eee;
                    height: 70px;
                }
                .min-left .titr_pro h3,.min-left .titr_pro h6{
                    text-align: right;
                    direction: rtl;
                    font-family: byekan;
                    float: right;
                    color: #555;
                    width: 80%;
                    margin: 5px 10px;
                }
                .min-left .star_pro{
                    width: 15%;
                    float: left;
                    margin: 0px;
                    height: 25px;
                    position: relative;
                    
                }
                .min-left .shenase{width: 60%;
                height: 50px;
                float: right;
                margin-bottom: 25px;}
                .min-left .shenase h5{width: 90%;}
                .min-left .shenase h6{margin-top:30px;}
                .min-left .shenase a{
                      width: 80px;
    height: 30px!important;
    border: 1px solid #aaa;
    margin: 5px;
    float: right!important;
                }
                .min-left .shenase a span{
                    width: 20px;
                    height: 20px;
                    border-radius: 100%;
                    text-align: center!important;
                    background: #777;
                    float: right;
                     margin: 2px;
                }
                .min-left .shenase a h6{
                    float: left;
                    margin: 5px 6px;
                }
                .min-left .takhfif_pro{
                    width: 150px;
                    height: 30px;
                    overflow: hidden;
                    margin: 0px 30px;
                    float: right;
                    text-align: right;
                }
                .min-left .takhfif_pro span{
                    background: rgba(255,0,0,0.5);
                    text-align: center;
                    font-family: byekan;
                    font-size: 11px;
                    color: #fff;
                    position: relative;
                    padding: 5px 10px;
                    float: right;
                }
                .min-left .takhfif_pro span i{
                    color: #fff;
                    float: right;
                    margin-right: 0px;
                    position: absolute;
                    right: -2px;
                    top: 7px;
                    
                }
                  .min-left  .dijibon{
                        background: none;
    color: #777;
    text-align: center;
    font-family: byekan;
    font-size: 14px;
   height: 48px!important;
    position: relative;
    padding: 0px 0px;
 
    
    border-right: 4px solid #aaa!important;
    border: 0!important;
                }
                .min-left  .dijibon i{
                width: 25px;height: 25px;
                       border-radius: 100%;line-height: 25px;background: rgb(170,170,170);color: rgb(255,255,255);float:right; 
                    }
                .gheymat_pro{
                    float: right;
                    text-align: right;
                    
                }
                .moghayese_pro{
                width: 150px!important;background: rgba(140,140,140);margin-top: 50px;
                color: rgb(255,255,255);
                height: 40px;
                margin-top: 50px!important;
                float: right;}
                .moghayese_pro h4,.sabad_pro h5{
                    color: rgb(255,255,255);
                    float: right;
                    line-height: 20px;
                    margin: 5px 17px;
                    width: 50%!important;
                    font-size: 12px;
                }
                .moghayese_pro i,.sabad_pro i{
                    background: rgba(250,250,250,0.5);
                 float: left;
                    height: 40px!important;
                    line-height: 30px;
                    margin: 0;
                    width: 30px;
                    text-align: center;
                    font-size: 20px;
                }
                .sabad_pro{
                    float: right;
                width: 200px!important;background: green;margin-top: 50px;
                color: #fff;
                height: 40px;
                margin-top: 50px!important;}
                 .sabad_pro h5{
                 
                    width: 60%!important;
                  
                }
                .vijegi_pro{
                    width: 39%;float: left;
                }
                .vijegi_pro li{
                    list-style: none;
                    text-align: right;
                    float: right;
                    width: 100%;
                }
                .vijegi_pro li i{
                    font-size: 5px;
                    float: right;
                    margin: 7px;
                }
                .min-left #etelaat{
                    background: #fff none repeat scroll 0 0;
				float: right;font-family: byekan;
				font-size: 12px;
				height: 80px;
				margin-top: 10px;
				width: 100%;
			border-radius: 5px;
                    margin-top: 149px;
                    border-top: 1px solid #aaa;
                }
			.min-left #etelaat span{
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
                margin-top: 10px;
                
			}
			
			.min-left #etelaat  img{float: right;position: absolute;right: 4px;top: 13px;width: 22%;}
            </style>
             <div class="min-left">
               
            <span class="titr_pro">
                 <h3>نام محصول مورد نظر</h3>
                 <h6>ویژگی محصول مورد نظر</h6>

                 </span>
                   <div class="vijegi_pro" >
                     <ul>
                     <li>
            <i class="fa fa-circle" aria-hidden="true"></i><h6 style="float: right">تعداد سیم کارت:</h6><h6 style="float: right;color: #aaa;">2 سیم کارت</h6>            
                     </li>
                        <li>
            <i class="fa fa-circle" aria-hidden="true"></i><h6 style="float: right">شبکه ارتباطی:</h6><h6 style="float: right;color: #aaa;">5g</h6>            
                     </li>
                 <li>
            <i class="fa fa-circle" aria-hidden="true"></i><h6 style="float: right">ram:</h6><h6 style="float: right;color: #aaa;">8gig</h6>            
                     </li>
                    <li>
            <i class="fa fa-circle" aria-hidden="true"></i><h6 style="float: right">ظرفیت:</h6><h6 style="float: right;color: #aaa;">256gig</h6>            
                     </li>
                     
                     </ul>
                 
                 </div>
                 <div class="shenase">
                 <h5>انتخاب رنگ</h5>
                     <a href="" style="background: rgba(0,0,250,0.1)"><span><i class="fa fa-check" aria-hidden="true"></i></span><h6>نقره ای</h6></a>
                     <a href=""><span></span><h6>نقره ای</h6></a>
                      <span></span>

                 </div>
           
                 <div class="shenase" style="margin-top: 20px;">
                 <h5 style="width: 31%;">قیمت:<span style="text-decoration: line-through">4500000</span>تومان</h5>
                     <div class="takhfif_pro">
                     <span><i class="fa fa-caret-left" aria-hidden="true"></i>تخفیف</span>
                     <span style="background: rgba(255,0,0,0.7);">100 هزار تومان</span>
                         
                        
                     </div>
                   <a class="dijibon" ><i class="fa fa-plus" aria-hidden="true" ></i><h3 style="font-family: byekan;margin-right: 5px;color: rgb(119,119,119);">19</h3><h5 style="width: 100%;
                       margin: 0 5px;float:right;">دیجی بن</h5></a>
                     <div class="shenase" style="margin-top: 20px;">
                     <span class="gheymat_pro">
                       
                         <h5 style="margin: 5px;direction: rtl">قیمت برای شما:</h5><h5 style="margin: -20px 119px;;color: green;">4300000تومان</h5></span>
                     </div>
                 </div>
                 <div class="shenase">
                     <a class="moghayese_pro" href="indexkalasearch.php?menu=1&submenu=7" >
                     <h4>مقایسه کن</h4><i  class="fa fa-chevron-down" aria-hidden="true"></i>
                     </a>
            
                     <a id="addcart" class="sabad_pro" >
                    <i class="fa fa-cart-plus" aria-hidden="true" style="float: right;"></i><h5> افزودن به سبد خرید</h5>
                     </a>
                 </div>
                 				<div id="etelaat">
				<span><img src="img/slices5.png">7 روز ضمانت بازگشت </span>
				<span><img src="img/slices4.png" style="margin-right: 20px;">پرداخت در محل</span>
				<span><img src="img/slices3.png">ضمانت اصل بودن کالا</span>
			   <span>تحویل اکسپرس <img src="img/slices1.png" style="margin-right: 20px;"></span>
				<span><img src="img/slices2.png">تضمین بهترین قیمت</span>

				</div>

            </div><!--min-left-->
        
        
        
        </div><!--moshakhasat-koli-->
        <style>
          .moshakhasat_koli  .bishtar{
              position: absolute;
              right: 0;
              left: 0;
              bottom: 10px;
              height: 100px;
              line-height: 180px;
              text-align: center;
              background: rgba(0,0,0,0) linear-gradient(to bottom,rgba(255,255,255,0)0%,rgba(255,255,255,1)100%) repeat scroll 0 0;
            }
            
        </style>
                  
<div class="moshakhasat_koli" style="height: 100%!important;overflow: hidden;padding-bottom:10px; ">
        <h3 style="width: 100%;margin: 10px;">معرفی اجمالی محصول</h3>
         <h6 style="width: 100%;margin: 10px;">نام محصول</h6>
    <h4 style="width: 100%;margin: 10px;font-size: 12px">
    گوشی‌موبایل سامسونگ مدل Galaxy A750 دو سیم کارت ظرفیت 128 گیگابایت،از سری گوشی‌های میان‌رده‌ شرکت سامسونگ است که با قابلیت‌های فیزیکی بالایی که به همراه دارد،توانسته جایگاه ویژه‌ای را در بازار کسب کند.این مدل گوشی از سیستم عامل روز دنیا بهره برده است و در سال 2018 در برابر چشم مخاطبان ارائه شد.محصولات سری A سامسونگ از طراحی و ظاهر خوبی برخوردار است که درجه اول توجه هر مخاطب را به خود جلب می کند،همچنین از ویژگی قابل توجه دیگر،قیمت مناسب آن می‌باشد که نشانمی‌دهد از جمله گوشی موبایل‌های مقرون به صرفه و در عین حال با کیفیتی است که ارزش خرید بالایی دارد و طیف وسیعی از اقشار جامعه می‌توانند این محصول را خریداری کنند.
    </h4>
    
    
        <style>
         #porbazdid{width: 100%;
			height: 310px;margin-top: 10px;
			float: right;
			background: none;
			border-radius: 3px;
			font-size: 12px;
			font-family: byekan;
			position: relative;
            margin-bottom: 10px;}
			 #porbazdid #header{background: #ddd none repeat scroll 0 0;
			float: right;
			font-size: 13px;
			height: 30px;
			line-height: 25px;
			padding-right: 15px;
			text-align: right;
			width:99%;
			color: #000;}
			 #porbazdid #header #bishtar{
				float: left;
				color: royalblue;
				text-align: right;
			}
			#porbazdid #body{height: 280px;
			width: 100%;
				background: #fff;
				float: right;
				overflow: hidden;
			}
			 #porbazdid #body li{list-style: outside none none;
			float: right;
			height: 270px;
			width: 200px;
			background:  none ;
			margin: 5px;
			position: relative;}
			 #porbazdid #body li #imgkala{display: block;
			margin-top: 20px;
			text-align: center;
			}
			 #porbazdid #body li #namekala{display: block;
			margin-top: 20px;
			text-align: center;
			font-weight: bold;
			font-size: 11px;}
			 #porbazdid #body li #gheymatavaliekala{width: 100%;height: 20px;background: #f5f6f7;font-size: 10px;float: right;
			text-decoration: line-through;
			line-height: 18px;color: #aaa;
			font-weight: bold;
			text-align: center;
				direction: rtl;
			}
			 #porbazdid #body li #gheymatnahaikala{
			width: 100%;
			background: rgba(0,0,0,0);
			font-size: 11px;
			line-height: 18px;
			font-weight: bold;
			text-align: center;
			direction: rtl;
			color:forestgreen;
			display: block;}
			 #porbazdid  #samtechap{
				position: absolute;
				width:80px;
				height:280px;
				left: 0;
				top: 30px;
				background: #fff;
				box-shadow: 0 0 8px 2px #ccc;
				z-index: 3;
				}
			 .porbazdid  #samtechap{	position: absolute;
				width:80px;
				height:280px;
				left: 0;
				top: 30px;
				background: #fff;
				box-shadow: 0 0 8px 2px #ccc;
				z-index: 3;
			margin-top: -30px}
				.porforoshtarinha  #samtechap{	position: absolute;
				width:80px;
				height:280px;
				left: 0;
				top: 30px;
				background: #fff;
				box-shadow: 0 0 8px 2px #ccc;
				z-index: 3;
			margin-top: -30px}
			 #porbazdid  #samterast{position: absolute;
				width:50px;
				height: 280px;
				right: 0;
				top: 30px;
				background:none;
				z-index: 3;
			float: right;}
			 #porbazdid  #samterast img, #porbazdid  #samtechap img{background: none repeat none scroll 0 0;height: 70px;margin-top: 100px;width: 70px;cursor: pointer;}
			.jadidtarinha #body{width: 850px!important;overflow: hidden;position: relative;visibility: visible;left: 0;z-index: 2;}
			.porforoshtarinha #body{width: 100%!important;overflow: hidden;position: relative;visibility: visible;left: 0;z-index: 2;}
			
			.porbazdid #body{width: 850px!important;overflow: hidden;position: relative;visibility: visible;left: 0;z-index: 2;}
        </style>
      
						<div id="porbazdid" class="porforoshtarinha">
					<span id="header">خریداران این محصول،محصولات زیر را هم خریده اند</span>
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
        <style>
            .moshakhasat_koli .header{
                width: 100%;
                float: right;
                height: 50px;
                background: #eee;
                line-height: 50px;
                
            }
             .moshakhasat_koli .header span{
                width: 14%;
                float: right;
                height: 100%;
                background: #eee;
                 border: 1px solid #ddd;
                 box-shadow: 0 0 3px 0 #ddd inset;
                 text-align: center;
                 
            }
            .moshakhasat_koli .header span h4{
                text-align: center;
                width: 100%;
            }
             .moshakhasat_koli .header span h4 i{
               font-size: 20px;
                 margin: 5px;
            }
            .moshakhasat_koli .active{
                background: #fff!important;
                color: #555!important;
                border-top: 2px solid blue!important;
                border-bottom: 0 none !important;
               
                box-shadow: none!important;
            }
            .moshakhasat_koli .active h4{
                color: blue!important;
            }
            .moshakhasat_koli .body{
                padding: 30px 0;
                float: right;
            }
            .moshakhasat_koli .body ul{
                width: 50%;
                float: right;
                margin-top: 10px;
            }
             .moshakhasat_koli .body ul li{
                width: 100%;
                 list-style: none;
                 float: right;
                 text-align: right;
            }
            .moshakhasat_koli .body ul li h5{
                width: 190px;
    color: #666;
    text-align: right;
    margin-right: 0px;
    margin-top: 20px;
            }
            .moshakhasat_koli .body ul li div{
                width: 330px;
                float: right;
                height: 7px;
                background: #ebeced;
               position: relative;
                margin-top: 10px;
            }
            .moshakhasat_koli .body ul li div span{
               position: absolute;
                height: 100%;
                background: rgba(0,255,0,0.4);
                float: right;
                right: 0;
                z-index: 1!important;
            }
            .moshakhasat_koli .body ul li div a{
                border-left: 1px solid #fff;
                border-right: 1px solid #fff;
                float: right;
                height: 100%;
                width: 20%;
                z-index: 3!important;
            }
            .moshakhasat_koli .body ul li div h6{
                color: #000;
                float: right;
                font-size: 12px;
                font-weight: bold;
                position: absolute;
                right: 5px;
                top: -9px;
            }
            .body input{
                background: blue;
                color: #fff;
                font-size: 14px;
                height: 40px;
                
                text-align: center;
                width: 150px;
                    margin-top: 150px;
                margin-left: 17px;
                border-radius: 5px;
                border: 0;
            }
        </style>

	<div class="moshakhasat_koli" style="height: 100%!important;overflow: hidden;padding-bottom:10px; ">
        <div class="header">
        <span class="active"><h4 style="margin: 4px 10px 4px 60%">نظرات کاربران</h4></span>
       
        </div><!--header-->
        <div class="body">
        <h4>امتیاز کاربران به:</h4><h5 style="margin: 0px 20px;">a7 2018 128Gig</h5>
            <ul>
                
               <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  85%"></span><h6>3.6</h6>
                </div>
            </li>
                      <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  85%"></span><h6>3.6</h6>
                </div>
            </li>
                  <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  85%"></span><h6>3.6</h6>
                </div>
            </li>
                 <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  85%"></span><h6>3.6</h6>
                </div>
            </li>
             <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  85%"></span><h6>3.6</h6>
                </div>
            </li>
            </ul>
    
           
            <div style="float: right;display: block;width: 98%;margin: 10px;border-bottom:1px solid #ccc; "><h3 style="margin-top: 15px;">نظرات کاربران:</h3><h5 style="margin-top: 20px;margin-right: 5px;">(3نظر)</h5>
       
                </div>
            <style>
                .body .comment {
                    width: 97%;
                    margin: 17px;
                    background: none;
                    height: 100%;
                    float: right;
                    border-radius: 5px;
                    box-shadow: 0 0 3px 0 #eee;
                    overflow: hidden;
                }
                  .body .comment .header{
                    width: 100%;
                   
                    background: #eee;
                    height: 70px;
                    float: right;
                      position: relative;
                }
                  .body .comment .body{
                    width: 100%;
                  
                    background: #fafbfc;
                    height:100%;
                    float: right;
                }
                .body .comment .header .like-dislike{
                    float: left;
                    width: 400px;
                    height: 100%;
                    position: absolute;
                    left: 0;
                    top: 0;
                }
                .body .comment .header .like-dislike h4{
                    float: right;text-align: right;
                    width: 214px;
                }
                .body .comment .header .like-dislike .like,.body .comment .header .like-dislike .dislike{
                    height: 30px;
                    width: 70px;
                    background: #fff;
                        margin-top: 10px;
                    cursor: pointer;
                }
                 .body .comment .header .like-dislike .like i,.body .comment .header .like-dislike .dislike i{
                   font-size: 20px;
                     margin: 4px;
                     float: right;
                     
                }
                .body .comment .header .like-dislike .like h5,.body .comment .header .like-dislike .dislike h5{
                    float: right;
                    height: 100%;
                    line-height: 30px;
                    text-align: center;
                    width: 60%;
                }
            </style>
            <div class="comment">
            <span class="header">
                <i style="float: right;font-size: 30px;margin: 15px;" class="fa fa-comments" aria-hidden="true"></i>
               
                <h4 style="float: right;line-height: 40px;height: 25px;">نام کاربر</h4>
                <br>
                <h6 style="float: right;line-height: 0px;height: 27px;color: #777;">تاریخ درج</h6>
                <span class="like-dislike" style=""><h4>آیا این نظر برایتان مفید بود؟</h4>
                <span class="like" style=""><i class="fa fa-thumbs-up" aria-hidden="true"></i><h5>20</h5></span><!--like-->
                <span class="dislike" style=""><i class="fa fa-thumbs-down" aria-hidden="true"></i><h5>20</h5></span><!--like-->
                </span><!--likedis-->
                </span><!--hader-->
                <span class="body">
                    <ul style="width:  45%">
                
               <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  35%"></span><h6>3.6</h6>
                </div>
            </li>
                      <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  85%"></span><h6>3.6</h6>
                </div>
            </li>
                  <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  85%"></span><h6>3.6</h6>
                </div>
            </li>
                 <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  85%"></span><h6>3.6</h6>
                </div>
            </li>
             <li><h5>ارزش خرید به نسبت قیمت</h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  85%"></span><h6>3.6</h6>
                </div>
            </li>
            </ul>
                    <h3 style="float: left;width: 55%;color: #777;">تیتر نظر</h3>
                    <h4 style="float: left;width: 55%;color: #777;">گوشی جالب و کاربردی بود.</h4>
                
        </span><!--body-->
            </div>
            <?php 
            $sqlcomment="select * from comment_tbl where idmahsool=".$_GET['dkp']." and taeed=1 ";
            $countcomment=$oop->Rowcount($sqlcomment,array());
            $rescomment=$oop->select($sqlcomment,array());
            foreach($rescomment as $rowcomment){
                $idcomment=$rowcomment['id'];
            ?>
                        <div class="comment">
            <span class="header">
                <i style="float: right;font-size: 30px;margin: 15px;" class="fa fa-comments" aria-hidden="true"></i>
               
                <h4 style="float: right;line-height: 40px;height: 25px;"><?php echo $rowcomment['name'] ?></h4>
                <br>
                <h6 style="float: right;line-height: 0px;height: 27px;color: #777;"><?php echo $rowcomment['tarikh'] ?></h6>
                <span class="like-dislike" style=""><h4>آیا این نظر برایتان مفید بود؟</h4>
                <span id="like" onClick="like_comment(<?php echo $idcomment;?>,this)" class="like" style=""><i class="fa fa-thumbs-up" aria-hidden="true"></i><h5><?php echo $rowcomment['like'] ?></h5></span><!--like-->
                <span id="dislike" class="dislike" style=""><i class="fa fa-thumbs-down" aria-hidden="true"></i><h5><?php echo $rowcomment['dislike'] ?></h5></span><!--like-->
                </span><!--likedis-->
                </span><!--hader-->
                <span class="body">
                    <ul style="width:  45%">
                         <?php 
            $sqlcommentfani="select * from comment_fani_tbl where idmahsool=".$_GET['dkp']." and submenu=".$_GET['submenu']." ";
                $countcommentfani=$oop->Rowcount($sqlcommentfani,array());
            $rescommentfani=$oop->select($sqlcommentfani,array());
            foreach($rescommentfani as $rowcommentfani){
                $meghdar=$rowcommentfani['meghdar'];
            ?>
                
               <li><h5><?php echo $rowcommentfani['name'] ?></h5>
                <br>
                <div>
                    <a></a><a></a><a></a><a></a><a></a>
                    <span style="width:  <?php echo ($meghdar/$countcomment) ?>%"></span><h6><?php echo $meghdar ?>.<?php echo $countcomment?></h6>
                </div>
            </li>
                  <?php } ?>   
                    
            </ul>
                    <h3 style="float: left;width: 55%;color: #777;"><?php echo $rowcomment['titr'] ?></h3>
                    <h4 style="float: left;width: 55%;color: #777;"><?php echo $rowcomment['text'] ?></h4>
          <?php } ?>      
        </span><!--body-->
            </div><!--moshakhsatkoli-->

        </div><!--body-->
        </div>
        						<div id="porbazdid" class="porforoshtarinha">
					<span id="header">محصولات مشابه این محصول</span>
					<span id="body">
					<ul>
                        <?php
                        $idmoshabeh=$_GET['dkp'];
                        $sqlmoshabeh="select * from moshabeh_tbl where idmahsool1=?";
                        $datamoshabeh=array($idmoshabeh);
                        $resmoshabeh=$oop->select( $sqlmoshabeh,$datamoshabeh);
                        foreach($resmoshabeh as $rowmoshabeh){
                            $idmahsool2=$rowmoshabeh['idmahsool2'];
                            $sqlmahsool="select * from mahsool_tbl where id=? ";
                             $datamahsool=array($idmahsool2);
                        $ressqlmahsool=$oop->select( $sqlmahsool,$datamahsool);
                            
                            echo '<li>
						
						<span id="imgkala">
							
							<img src='.$ressqlmahsool[0]['img'].'>
							</span>
							<span id="namekala">'.$ressqlmahsool[0]['name'].'</span>
							<span id="gheymatavaliekala">
								
								تومان 
								'.$ressqlmahsool[0]['gheymata'].'
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								'.$ressqlmahsool[0]['gheymatb'].'</span>
						</li>
';
                        }
                        ?>
					             <?php
                        $idmoshabeh=$_GET['dkp'];
                        $sqlmoshabeh="select * from moshabeh_tbl where idmahsool2=?";
                        $datamoshabeh=array($idmoshabeh);
                        $resmoshabeh=$oop->select( $sqlmoshabeh,$datamoshabeh);
                        foreach($resmoshabeh as $rowmoshabeh){
                            $idmahsool1=$rowmoshabeh['idmahsool1'];
                            $sqlmahsool="select * from mahsool_tbl where id=? ";
                             $datamahsool=array($idmahsool1);
                        $ressqlmahsool=$oop->select( $sqlmahsool,$datamahsool);
                            
                            echo '<li>
						
						<span id="imgkala">
							
							<img src='.$ressqlmahsool[0]['img'].'>
							</span>
							<span id="namekala">'.$ressqlmahsool[0]['name'].'</span>
							<span id="gheymatavaliekala">
								
								تومان 
								'.$ressqlmahsool[0]['gheymata'].'
							
							</span>
							<span id="gheymatnahaikala">	تومان 
								
								
								'.$ressqlmahsool[0]['gheymatb'].'</span>
						</li>
';
                        }
                        ?>
						</ul>
					<span id="samtechap"><img src="img/monotone_arrow_left.png" width="128" height="128"></span>
					<span id="samterast"><img src="img/monotone_arrow_right (1).png" width="128" height="128"></span>
					</span>
				</div>
		</div>
        </div>
	</div>	
		<style>
	#footer{
			background: #eeeff1;
			width: 100%!important;
			height: 100%!important;
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
	
     <style>
            .fixed_top{
                margin-top:230px!important; 
            }
        </style>
   
<!-- Main Container Ends -->
</body>
    <script>
        function like_comment(idcomment,param){
        // alert();
            $.ajax({
              url:'like_comment.php',
              data:{idcomment:idcomment,idmahsool:<?php echo $_GET['dkp']?>},
                type:"POST",
            })
                
            .done(function(data){
                swal( "کاربر گرامی" ,  "شما قبلا این گزینه را انتخاب کرده اید" ,  "error" );
                if(data.trim()=="no"){
                //alert('کاربر گرامی:شما قبلا این گزینه را انتخاب کرده اید.')
            }
                else{   
                var countlike=parseInt($(param).find('h5').text());
                //countlike=countlike+1;
                $(param).find('h5').text(countlike+1);
              //alert(data);
        }
            });
    //alert(idcomment)
    }
    </script>
  <script>
    $("#addcart").click(function(){
    var tedad=parseInt($('#sabadkharid #tedad').text());
       
        $('#sabadkharid #tedad').text(parseInt(tedad+1));
        $.ajax({
            url:'cart.php',
            type:"POST",
            data:{id:<?php echo $_GET['dkp'] ?>}
        })
            .done(function(data){
            //alert(data);
        })
    })
    </script>
  <script>
    $("#min_img a").click(function(){
        var img=$(this).find('img').attr('src');
        //$("#max_img").empty();
        //$("#max_img").append('<img src="'+img+'"  height="400" alt=""/>');
        $("#max_img img").prop('src',img);
        //alert(img);
 zoom();
    });
      function zoom(){
      $("#max_img img").elevateZoom({
          cursor:"crosshair",
	zoomWindowFadeIn: 500,
	zoomWindowFadeOut: 500,
	lensFadeIn: 500,
	lensFadeOut: 500,
        scrollZoom : true,
          zoomWindowPosition:11
});
 } 
      zoom();
    </script>
    <script>
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
    <script>
    
	
	
	
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
   
    </script>
<!---scrool-->
</html>
