$(function(){
	$(".login1").toggle(function(){
		$(".qq_login").fadeOut('fast');
		$(".oneself_login").slideDown('fast').addClass('oneself_login_select').css("color","#424242");
	},function(){
		$(".oneself_login").slideUp('fast');
		$('.pwd').val('');
	});
	$(".login2").toggle(function(){
		$(".oneself_login").fadeOut('fast');
		$(".qq_login").slideDown('fast').addClass('qq_login_select').css("color","#424242");
	},function(){
		$(".qq_login").slideUp('fast');
		$('.pwd').val('');
	});

	$(".cancer").click(function(){
		$(".oneself_login").fadeOut('slow');
		$(".qq_login").fadeOut('slow');
		$('.pwd,.verify').val('');
	});

	/*$(".div-img").hover(function(){
		$(".up_img").slideDown('fast');
	},function(){
		$(".up_img").fadeOut('slow');
	});*/
	$('.blog_nav').hover(function(){
		$('.sub_nav').show();
	},function(){
		$('.sub_nav').hide()
	});

	$(".btn-submit").click(function(){
		if($('.idcard').val()==''){
			$('.idcard').focus();
			return;
		}
		if($('.pwd').val()==''){
			$('.pwd').focus();
			return;
		}
		if($('.verify').val()==''){
			$('.verify').focus();
			return;
		}
		$.ajax({
			url:$('#url')+"Index/Login",
			Type:'post',
			dataType:'text',
			data:{
				idcard:$('.idcard').val(),
				pwd:$('.pwd').val(),
				verify:$('.verify').val()
			},
			success:function(data){
				switch(data){
					case 1:'';break;
				}
			}

		});
	});
});

function reg(){
	alert("暂不支持注册功能！");
	return;
}