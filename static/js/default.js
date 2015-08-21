(function($){

	$gnbScript = {

		headerSpan:function(sct){
			//탑 이벤트
			var $header = $('header');
			
			if(sct > $header.height() && !$header.is('.open')){
				$header.addClass('open').stop().animate({height:'40px'})
				$header.find('strong').fadeOut(100);
				$header.find('em').stop().animate({fontSize:'-='+13})
			}else if(sct < $header.height() && $header.is('.open')){
				$header.removeClass('open').stop().animate({height:'100px'})
				$header.find('strong').fadeIn(100);
				$header.find('em').stop().animate({fontSize:'+='+13})
			}
		}

	}

	$asideMenu = {
		//메뉴오픈 이벤트
		openerEv:function(){
			var $navi = $('.menubtn');

			$navi.on('click',function(){

				if(!$(this).is('.open')){

					$(this).addClass('open');
					$('.leftmenu').animate({right:0});
					$('body,header').animate({left:'-200px'});	

				}else if($(this).is('.open')){

					$(this).removeClass('open');
					$('.leftmenu').animate({right:"-200px"});
					$('body,header').animate({left:'0px'});	

				}

			});
		}
	}


})(jQuery)


$(window).on({
	scroll:function()
	{
		var sct = $(this).scrollTop();
		$gnbScript.headerSpan(sct)

	}
});


$(window).load(function(){


})

$(document).ready(function(){
	$asideMenu.openerEv();
	$(window).trigger('resize');

})