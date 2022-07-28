					<?php
					$sqlkala="SELECT * FROM `mahsool_tbl` where valed='".$_GET['menu']."' and subvaled='".$_GET['submenu']."' order by bazdid  desc limit 12";
					$stmt=$connect->prepare($sqlkala);
					$stmt->execute();
	while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
		$idmahsool=$result['id'];
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
	echo '<li><img style="position: absolute; right: 0;z-index: 1;" '.$pishnehad.'  width: "90" height:"90"><span class="kala-tasvir"><img src="'.$img.'" width="160px" height="150px"></span><span class="kala-rang"><span style="background:'.$color.'  "></span></span><span class="kala-keyfiat"><a class="emtiyaz-star"></a><a class="emtiyaz-adad">'.$emtiaz.'</a>
					</span>
					<span class="kalaname">'.$name.'</span>
					<span class="kala-ghavallie">'.$gheymata.' تومان</span>
					<span class="kala-ghnahai">'.$gheymatb.' تومان</span>
					<span class="kala-sabad"><img src="img/shopping_cart.png"></span>
						
					</li>';
	
	};
					
			?>
