
function slider(i){
	$("#slider #slidergozine").find('.activeslider').removeClass('activeslider');
	$("#slider #slidergozine").find('.'+i+'').addClass('activeslider');
$('#slider #sliderimg').find('.'+i+'').css('display','block');
	$('#slider #sliderimg').find('.'+i+'').animate({'opacity':'1'},2000,function(){
		$('#slider #sliderimg').find('.'+i+'').css('display','none');
		$('#slider #sliderimg').find('.'+i+'').css('opacity','0');
		$("#slider #slidergozine").find('.'+i+'').removeClass('activeslider');
		$('#slider #sliderimg').find('.'+(i++)+'').css('display','block');
		$('#slider #sliderimg').find('.'+i+'').animate({'opacity':'1'},1000);
		$('#slider #sliderimg').find('.'+(i-1)+'').css('display','none');
		
		slider(i);
	});// JavaScript Document
	}