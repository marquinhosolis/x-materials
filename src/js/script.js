function general(){
	if($(window).width() < 768){
		$('#hamburguer').click(function(){
			$('.searchIcon').removeClass('searchIcon--open');
			$('.searchField--mobile').removeClass('searchField--open');

			$(this).toggleClass('open');
			$('.mainNav').toggleClass('mainNav--open');
		});

		$('.searchIcon').click(function(){
			$('#hamburguer').removeClass('open');
			$('.mainNav').removeClass('mainNav--open');
			$(this).toggleClass('searchIcon--open');
			$('.searchField--mobile').toggleClass('searchField--open');
		})
	}else{
		$('.searchIcon').click(function(){
			$(this).addClass('searchIcon--open');
		})
	}
}

$(document).ready(function(){
	var windowHeight = $(window).height();
	//alert('windowHeight');
	general();
	
	$(document).scroll(function(){
		var scrollTop = $(document).scrollTop();
		$('.stage').each(function(){
			var posicaoInicial = $(this).position().top;
			if(posicaoInicial < scrollTop + (windowHeight/2)) {
				$(this).find('.stageShape img').css('right',0);
				$(this).find('.stageText p').css('left',0);
			}else{
				$(this).find('.stageShape img').css('right',-600);
				$(this).find('.stageText p').css('left',-600);
			}
		});
	})
});

$(window).resize(function(){
	general();
});

$(window).load(function() {
	
	$('.mediaKitPage .flexslider').flexslider({
		animation: 'slide',
		slideshow: false,
		directionNav: false,
		controlNav: true,
		start : function(){
			$('.flex-control-paging').removeClass('flex-control-paging');
		}
	});

	$('.flexslider').flexslider({
		animation: "slide" ,
		slideshow: false
	});
});
