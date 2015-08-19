

var headerEff ={

	init:function(){
		$(window).scroll(0);
		var $head = $('header');
		this.scrollEv($head);
	},
	scrollEv:function(tg){
		var sct;	
		$(window).on('scroll',function(){
			var $body = $('body');
			sct= $(this).scrollTop();

			if(sct > tg.height() && !tg.is('.small')){
			
				tg.addClass('small');
				tg.find('strong,em').animate({
					opacity:.4
				},1000)

			}else if(sct < tg.height() && tg.is('.small')){
			
				tg.removeClass('small');
				tg.find('strong,em').animate({
					opacity:1
				},1000)
				

			}

		});

		
	}
}

$(document).ready(function(){

	headerEff.init()

})