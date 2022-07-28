


function slider2(i){
	
	//alert(numclass);

	$("#slider2 #slider2gozine").find('.activeslider2').removeClass('activeslider2');
		$("#slider2 #slider2gozine").find('img').remove();
				  //alert('به سایت ما خوش آمدید!')
	$("#slider2 #slider2gozine").find('.'+i+'').addClass('activeslider2');
	$("#slider2 #slider2gozine").find('.'+i+'').append('<img src="img/mosalas.png">');
	
	$("#slider2 #slider2img").find('.'+i+'').css('display','block');
	$("#slider2 #slider2img").find('.'+i+'').animate({'opacity':'1'},1000,function(){
		$("#slider2 #slider2img").find('.'+i+'').css('display','block');
		$("#slider2 #slider2img").find('.'+i+'').css('opacity','0');
		$("#slider2 #slider2img").find('.'+(i++)+'').css('display','none');
		$("#slider2 #slider2img").find('.'+i+'').css('opacity','1');
	
	
		
		$("#slider2 #slider2gozine").find('.'+(i-1)+'').removeClass('activeslider2');
		$("#slider2 #slider2gozine ."+i+" ").find('img').remove();
		
		$("#slider2 #slider2gozine").find('.'+(i++)+'').addClass('activeslider2');
	  $("#slider2 #slider2gozine").find('.'+i+'').append('<img src="img/mosalas.png">');
	slider2(i-1);
	
	});
		}// JavaScript Document