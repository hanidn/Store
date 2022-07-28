<?php
session_start();
	include("oop.php");
include("connection.php");
$oop=new store;
if(!isset($_SESSION['login'])){
     header('location:login.php');
    if(isset($_COOKIE['login'])){
        $_SESSION['login']=$_COOKIE['login'];
    }
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
    <script src="js/city.js"></script>
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
	     <!--<span><img src="./img/icon2.png"><a >ثبت نام کنید</a></span>-->
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
	
	
	<div id="main">
	<div id="r1170">
          

		<div id="radaddress">
			<?php
				
			$sqldastemenu="select * from `menu_tbl` where id='".$_GET['menu']."' ";
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
            .sabadkharid{
                width: 100%;
                background: none;
                margin-bottom: 25px;
                float: right;
            }
            .sabadkharid table{
                direction: rtl;
                height: auto;
                border: 0;
            }
            .sabadkharid table tr th{
                background: #CACACA;
                text-align: center;
                border: 1px solid #aaa;
                font-size: 12px;
                
            }
            .sabadkharid table tr,.sabadkharid table tr td{
                padding: 0;
                border: none;
                background: #fff;
            }
            .td-1 img{
                float: right;
            }
            h4,h5,h6{
                float: right;
                width: 100%;
            }
            select{
                width: 160px;
                height: 30px;
                margin: 10px 40px;
                text-align: center;
            }
            select option{
              
                text-align: right;
                line-height: 10px;
            }
        </style>
        <h4>سبد خرید شما</h4>
        <br><br><br>
        <div class="sabadkharid" style="height:auto">
             <br>
        <table width="100%" border="1" >
  <tbody>
    <tr>
      <th scope="col" style="width: 60%;">شرح محصول</th>
      <th scope="col" style="width: 10%;">تعداد</th>
      <th scope="col" style="width: 10%;">قیمت واحد</th>
      <th scope="col" style="width: 20%;">قیمت کل</th>
      
    </tr>
      <?php
      if(isset($_COOKIE['cart'])){
          $cookie=$_COOKIE['cart'];
      }
      
      $sqlcart="select * from `cart_tbl` where cookie=? ";
      $datacart=array($cookie);
      $rescart=$oop->select($sqlcart,$datacart);
      foreach($rescart as $rowcart){
          $tedadcart=$rowcart['tedad'];
          $idmahsoolcart=$rowcart['idmahsool'];
          $idcart=$rowcart['id'];
          
          $sqlmahsoolcart="select * from `mahsool_tbl` where id=?";
      $datamahsoolcart=array($idmahsoolcart);
      $resmahsoolcart=$oop->select($sqlmahsoolcart,$datamahsoolcart);
      $imgcart=$resmahsoolcart[0]['img'];
      $namecart=$resmahsoolcart[0]['name'];
          $gheymatb=$resmahsoolcart[0]['gheymatb'];
          
      ?>
      
      
      
    <tr id="<?php echo $idcart;?>" class="cartrow">
      <td><div class="td-1">
          <img src="<?php echo $imgcart;?>" width="100">
          <span style="float: right;height: 100%;width: 78%;margin: 20px 5px;">
              <h4><?php echo $namecart;?></h4>
              <br><br>
              <h5>دارای ظرفیت 128Gig</h5>
          </span>
          </div></td>
      <td><select>
          <option id="tedad"><?php echo $tedadcart;?></option>
           <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>

          </select>
        </td>
      <td style="text-align: center;"><span id="gheymat"><?php echo $gheymatb;?></span>تومان</td>
      <td style="text-align: center;"><span id="gheymatjozee"><?php echo $gheymatb* $tedadcart;?></span>تومان</td>
      
    </tr>
          <?php    
          }
     
      ?>
  </tbody>
</table>
        
        </div><!--sabadkharid-->
        <style>
            .pishfactoor{
                float: right;
                background: #fff;
                height: 540px;
                width: 100%;
                position: relative;
            }
            .pishfactoor .col-right{
                width: 60%;
                height: 100%; 
                float: right;
            }
            .pishfactoor .col-right span{
                width: 48%;
                float: right;
                height: auto;
                margin: 5px;
            }
            .pishfactoor .col-right span label, .pishfactoor .col-left span label{
                float: right;
                direction: rtl;
                font-family: byekan;
                float: right;
                margin-left: 5px;
                font-size: 20px;
                width: 20%;
                text-align: left;
                line-height: 35px;
            }
            .pishfactoor .col-right span input{
                float: right;
                border: none;
                font-family: byekan;
                font-size: 12px;
                height: 30px;
                background: #efefef;
                width: 75%;
                border-radius: 5px;
             text-align: right;
                direction: rtl;
                padding: 5px;
            }
            .pishfactoor .col-left{
                width: 40%;
                height: 100%;
                float: left;
            }
            .pishfactoor .col-right span textarea{
                border: 1px solid #aaa;
                border-radius: 5px;
                float: right;
                font-family: byekan;
                font-size: 12px;
                min-height: 150px;
                text-align: right;
                width: 75%;
            }
            .submit{
                    float: left;
    background: blue;
    color: #fff;
    padding: 5px 10px;
    font-family: byekan;
    border: 0;
    border-radius: 5px;
    width: 120px;
    height: 35px;
    font-weight: bold;
    margin-left: 20px;
                margin-top: 20px;
            }
            .pishfactoor .col-left span{
                float: right;
                text-align: right;
                font-family: byekan;
                font-size: 15px;
                border-bottom: 1px solid #eee;
                padding:11px 3px;
                text-align: right;
                width: 100%;
                
    line-height: 37px;

            }
            .pishfactoor .col-left input{
                width: 80px;
                float: right;
            }
             .pishfactoor .col-left a{
               
                     line-height: 20px;
    background: blue;
    float: right;
    padding: 0px 12px;
    margin-top: 0px;
    color: #fff;
    border-radius: 5px 0 0 5px;
    height: 32px;
            }
            .pishfactoor .col-left span label{
            direction: rtl;
                text-align: right;}
            .kharid{
          float: left!important;
    background:#40CA4C;
    color: #fff;
  cursor: pointer;
    font-family: byekan;
    border: 0;
    border-radius: 5px;
    width: 120px!important;
    height: 35px;
    font-weight: bold;
    margin-left: 20px;
    margin-top:0px;
                
            }
            .fa-2x {
   
  
    color: red;
}
        </style>
        <div class="pishfactoor">
           
           
           
        <div class="col-right">
             <form   method="POST" onSubmit="return etebarsanji();">
                  <?php
            $sqlsabtnam="select * from sabtnam_tbl where email='".$_SESSION['login']."' ";
            $ressabtnam=$oop->select($sqlsabtnam,array());
            foreach($ressabtnam as $rowsabtnam){
                $sqlostan="select * from ostan_tbl where id=".$rowsabtnam['ostan']." ";
        $dataostan=array();
        $resostan=$oop->select( $sqlostan,$dataostan);
                foreach($resostan as $rowostan){
                    $ostan=$rowostan['ostan'];
                    
                  
                }
                $sqlshahr="select * from shahr_tbl where id=".$rowsabtnam['shahr']."";
        $datashahr=array();
        $resshahr=$oop->select( $sqlshahr,$datashahr);
                foreach($resshahr as $rowshahr){
                    $shahr=$rowshahr['shahr'];
                    
                  
                }
                
                ?>
            <span><label>نام:</label><input name="name" type="text" value="<?php echo $rowsabtnam['name'];?>"></span>
                        <span><label style="font-size: 15px;line-height: 40px;">نام خانوادگی:</label><input type="text" name="family" value="<?php echo $rowsabtnam['family'];?>"></span>

                        <span><label>موبایل:</label><input type="text" name="hamrah" ></span>

                        <span><label>ایمیل</label><input type="text" name="email" value="<?php echo $_SESSION['login']; ?>"></span>

                        <span><label>استان:</label>
             
         
		<select name="ostan" id="ostan" onChange="iranwebsv(this.value);">
		<option value="0">انتخاب نمایید</option>
		<option value="1">تهران</option>
		<option value="2">گیلان</option>
		<option value="3">آذربایجان شرقی</option>
		<option value="4">خوزستان</option>
		<option value="5">فارس</option>
		<option value="6">اصفهان</option>
		<option value="7">خراسان رضوی</option>
		<option value="8">قزوین</option>
		<option value="9">سمنان</option>
		<option value="10">قم</option>
		<option value="11">مرکزی</option>
		<option value="12">زنجان</option>
		<option value="13">مازندران</option>
		<option value="14">گلستان</option>
		<option value="15">اردبیل</option>
		<option value="16">آذربایجان غربی</option>
		<option value="17">همدان</option>
		<option value="18">کردستان</option>
		<option value="19">کرمانشاه</option>
		<option value="20">لرستان</option>
		<option value="21">بوشهر</option>
		<option value="22">کرمان</option>
		<option value="23">هرمزگان</option>
		<option value="24">چهارمحال و بختیاری</option>
		<option value="25">یزد</option>
		<option value="26">سیستان و بلوچستان</option>
		<option value="27">ایلام</option>
		<option value="28">کهگلویه و بویراحمد</option>
		<option value="29">خراسان شمالی</option>
		<option value="30">خراسان جنوبی</option>
		<option value="31">البرز</option>
	</select>
	

       
            
            
            
            </span>

                        <span>
                <label>شهر:</label>
           
          
          
<select name="shahr" id="city">
		<option value="" selected="selected">انتخاب کنید</option>
	</select>
         
            
            </span>

                        <span style="width: 100%"><label>آدرس:</label><textarea name="address" type="text"></textarea></span>

            <input class="submit" type="submit" value="ثبت" name="submit" style="cursor: pointer;">
                      <?php
            }
            ?>        

             </form>
            </div><!--col-right-->
           
               
        <div class="col-left">
            <span>
            <label >قیمت کل:</label>
            <label id="gheymatkol"> </label> 
             تومان 
            </span>
            
              <span>
            <label>کد تخفیف:</label>
            <input id="input_bon" type="text"> 
              <a id="sabt_bon" >ثبت</a> 
            </span>
             <span>
            <label>مقدار تخفیف:</label>
            <label id="meghdartakhfif">1000</label> 
             تومان  
            </span>
                <span>
                    <span>
            <label>قیمت نهایی:</label>
            <label id="gheymatnahaee">0</label> 
             تومان  
            </span>
                <span>
            <label >مالیات:</label>
            <label id="maliyat">235000</label> 
              تومان 
            </span>
                <span>
            <label>هزینه پست:</label>
            <label>10000</label> 
              تومان 
            </span>
                 <span>
            <label>جمع:</label>
            <label id="jamekol">15300000</label> 
             تومان  
            </span>
            <a style="padding: 0;background: none;float: left;" href="pay/index.php" ><input type="submit" value="پرداخت و تکمیل خرید" class="kharid" ></a>
            </div><!--col-left-->

        </div><!--pishfactoor-->

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
            .fixed_top{
                margin-top:230px!important; 
            }
        </style>
        <style>
            .invalid{
                background: red!important;
                color: #fff;
            }
        </style>
   
<!-- Main Container Ends -->
</body>
    <script>
    $('.submit').click(function(){
        var form=$("form").serializeArray();
       var gheymatkol=0;
        $('.cartrow').each(function(index,element){
            var carttedad=$(this).find("option:selected").text();
            var cartgheymat=$(this).find("#gheymat").text();
            
             gheymatkol=gheymatkol+parseInt(cartgheymat)*parseInt(carttedad);
            form.push({name:'jamekol',value:gheymatkol*1.09+10000});
        });
       $('.cartrow').each(function(index,element){
            var carttedad=$(this).find("option:selected").text();
            var id=$(this).attr('id');
            form.push({name:id,value:carttedad});
        });
        $.ajax({
            url:'sabtsefaresh.php',
            type:'POST',
            data:form,
            success:function(data){
                //alert(data);
            }
            
            
        })
    })
    </script>
    <script>
    $("#ostan option").each(function(index,element){
        var text=$(this).text();
        var index=$(this).val();
        //alert();
        if(text=="<?php echo $ostan; ?>"){
            $(this).prop('selected','selected');
            city(index);
            $("#shahr option").each(function(index,element){
                var text=$(this).text();
                if(text=="<?php echo $shahr; ?>"){
            $(this).prop('selected','selected');
                      
                    }
            })
        }//if
        
    });
    </script>
    <script>
        function etebarsanji(){
            var invalid=0;
           var name=$('input[name=name]').val();
            var family=$('input[name=family]').val();
            var email=$('input[name=email]').val();
            var hamrah=$('input[name=hamrah]').val();
            var ostan=$('#ostan').find('option:selected').val();
            var shahr=$('#shahr').find('option:selected').val();
            //alert(ostan);
            if(name=='' || name=='نام  را وارد کنید...' ){
                invalid=1;
                $('input[name=name]').val('نام  را وارد کنید...');
                 $('input[name=name]').addClass('invalid');
            }
            else{
                $('input[name=name]').removeClass('invalid');
            }
              if(family=='' || family=='نام خانوادگی را وارد کنید...'){
                invalid=1;
                $('input[name=family]').val('نام خانوادگی را وارد کنید...');
                 $('input[name=family]').addClass('invalid');
            }
             else{
                $('input[name=family]').removeClass('invalid');
            }
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
               if(ostan=='انتخاب کنید' || shahr=='انتخاب کنید'){
                invalid=1;
                $('#ostan').addClass('invalid');
                $('#shahr').addClass('invalid');
            }
             else{
                $('#ostan').removeClass('invalid');
                  $('#shahr').removeClass('invalid');
            }
   $('#ostan').change(function(){
     
    var ostan=$("#ostan").find("option:selected").val();
        $.ajax({
            url:'shahr.php',
            data:{ostan:ostan},
            type:'POST',
            success:function(data){
                $("#shahr").html(data);
            }
        })//ajax
    
             })//change
    
             //alert(name);  
            if(invalid==1){
              return false;  
            }
       
        }//etebarsabji
       
    </script>
    <script>
    function factor(){
        var gheymatkol=0;
        $('.cartrow').each(function(index,element){
            var carttedad=$(this).find("option:selected").text();
            var cartgheymat=$(this).find("#gheymat").text();
            
             gheymatkol=gheymatkol+parseInt(cartgheymat)*parseInt(carttedad);
        });
        
      $("select").change(function(){
          var tedadchange=$(this).val();
          var gheymatchange=$(this).parents('.cartrow').find('#gheymat').text();
          var gheymatjozee=parseInt(gheymatchange*tedadchange);
            $(this).parents('.cartrow').find('#gheymatjozee').text(gheymatjozee);
          factor();
        })
        $('#gheymatkol').text(gheymatkol);
         $('#meghdartakhfif').text('0');
        $('#gheymatnahaee').text(gheymatkol);
        var gheymatnahaee=parseInt(gheymatkol);
        var maliyat=parseInt((gheymatnahaee*9)/100).toFixed(0);
       $('#maliyat').text(maliyat);
        var jamekol=parseInt(gheymatnahaee)+parseInt(maliyat)+10000;
        $("#jamekol").text(jamekol);
    }
        $("#sabt_bon").click(function(){
            var textbon=$(this).parent().find("#input_bon").val();
            $.ajax({
                url:'bon.php',
                type:'POST',
                data:{textbon:textbon},
                success:function(data){
                    var takhfif=parseInt(data.trim());
                    var gheymatkol=parseInt($("#gheymatkol").text());
                    if(!isNaN(takhfif)){
                    var meghdartakhfif=(gheymatkol*takhfif)/100;
                    $('#meghdartakhfif').text(meghdartakhfif);
                    var gheymatnahaee=gheymatkol-meghdartakhfif;
                     $('#gheymatnahaee').text(gheymatnahaee);
                    var maliyat=(gheymatnahaee*9)/100;
                    $('#maliyat').text(maliyat);
                    var jamekol=gheymatnahaee+maliyat+10000;
                    $("#jamekol").text(jamekol);
                        }
                    //alert(meghdartakhfif);
                    else{
                        alert('کد تخفیف اشتباه است')
                    }
                }
            })//ajax
        })//click
    factor();
    </script>
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
<!---scrool-->
</html>
