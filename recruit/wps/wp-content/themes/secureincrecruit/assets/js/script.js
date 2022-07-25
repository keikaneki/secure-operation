$(window).on('load',function() {
	$('#load').addClass('hide');
	$('#svgeye').delay(1000).queue(function() {
		$(this).addClass('inview').dequeue();
	});
	$('#svgtitle').delay(2000).queue(function() {
		$(this).addClass('inview').dequeue();
	});
});

$(window).on('load',function() {
	var $url         = $(location).attr('href');
	if($url.indexOf("#") != -1){
		var $headerHeight = 80;
		var $speed        = 10;
		var $id           = $url.split("#");
		var $target       = $('#' + $id[$id.length - 1]);
		if($target.length){
			var $position = $target.offset().top - $headerHeight;
			$("html, body").animate({scrollTop:$position}, $speed, "swing");
		}
	}
	var windowScrollTop = $(window).scrollTop();
	if ( windowScrollTop > 80 ) {
		$('#header').addClass('header-scroll');
	} else {
		$('#header').removeClass('header-scroll');
	}
});
$(function(){
	var $windowWidth = $(window).innerWidth();
	var $breakPoint  = 1199;
	$('a[href*="#"]').on('click', function() {
		if ($windowWidth <= $breakPoint) {
			var $headerHeight = 60;
		} else {
			var $headerHeight = 80;
		}
		var $speed    = 500;
		var $href     = $(this).attr("href");
		var $target   = $($href == "#" || $href == "" ? 'html' : $href);
		var $position = $target.offset().top - $headerHeight;
		$('html,body').animate({ scrollTop: $position }, $speed, 'swing');
		return false;
	});
	$('.content table').addClass('table table-responsive');
	$(window).scroll(function() {
		var windowScrollTop = $(window).scrollTop();
		if ( windowScrollTop > 80 ) {
			$('#header').addClass('header-scroll');
		} else {
			$('#header').removeClass('header-scroll');
		}
		var windowHeight = $(window).height();
		$('.scroll').each(function() {
			var targetPosition = $(this).offset().top;
			if ( windowScrollTop > targetPosition - windowHeight + 50 ) {
				$(this).addClass("active");
			}
		});
	});
	$('#hamburger').on('click', function() {
		$(this).toggleClass('active');
		$('#gnav').toggleClass('active');
		$('#shade').toggleClass('active');
	});
	$('#shade').on('click', function() {
		$(this).toggleClass('active');
		$('#gnav').toggleClass('active');
		$('#hamburger').toggleClass('active');
	});
	$('.gnav-open').on('click', function() {
		if ( $(this).next('.snav-list').hasClass('active') ) {
			$('.snav-list').removeClass('active');
			$('.snav-list').slideUp();
		} else {
			$('.snav-list').removeClass('active');
			$('.snav-list').slideUp();
			$(this).next('.snav-list').slideDown();
			$(this).next('.snav-list').addClass('active');
		}
	});
});

$(function(){
	var $slider  = $('.slide');
	var $slide   = $slider.children();
	var slideLen = $slide.length;
	$slider
	.slick({
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		fade: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		infinite: false,
	})
	.on('afterChange', function() {
		var $self = $(this);
		if((slideLen - 1) <= $self.slick('slickCurrentSlide')){
			$self.slick('slickSetOption', 'autoplay', false);
		}
	});
});