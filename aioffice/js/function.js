$(function() {
	$('a[href^="#"]').click(function() {
		var speed = 400;
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - 64;
		$('body,html').animate({ scrollTop: position }, speed, 'swing');
		return false;
	});
	$(".hamburger").on("click", function() {
		$(this).toggleClass("active");
		$("body").toggleClass("modal-open");
	});
	$("header a").on("click", function() {
		$(".hamburger").removeClass("active");
		$("body").removeClass("modal-open");
	});
	$(window).on('load resize', function() {});
	$('.device-pc .item-wrap').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.device-sp .item-wrap',
		arrows: false,
	});
	$('.device-sp .item-wrap').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.device-pc .item-wrap',
	});
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > 150 && !$("header div ul").hasClass("fixed")) {
			$('header div ul').addClass('fixed');
			$('.pagetop').addClass('active');
		} else if ($(window).scrollTop() < 150 && $("header div ul").hasClass("fixed")) {
			$('header div ul').removeClass('fixed');
			$('.pagetop').removeClass('active');
		}
	});
	var query = location.search;
	var value = query.replace('?', '').replace(/&/g, '\r\n');
	$('.with-query').on('click', function(event) {
		event.preventDefault();
		var myhref = $(this).attr('href');
		window.location.href = (myhref + query);
	});
	$('#param').val(value);
	$('#sendmail').submit(function(event) {
		var form = $(this);
		var url = form.attr('action');
		var method = form.attr('method');
		var serialize = form.serialize();
		$.ajax({
			type: method,
			url: url,
			data: serialize,
			dataType: false, //通信結果を受け取らない場合はfalse
			beforeSend: function(xhr, settings) {
				// ajax送信前の処理
			},
			complete: function(xhr, status) {
				// ajax応答後の処理
			},
			success: function(data) {
				// ajax通信成功時の処理
				if (data == "thanks") {
					window.location.href = "https://secureinc.co.jp/aioffice/contact-complete.html" + query;
				} else if (data == "fail") {
					$('#msg').html("<p style='color:red;'>メールの送信に失敗しました。<br>お手数ですが以下メールアドレス、または、お電話にて0800-919-9500まで直接お問い合わせください。<br><a href='mailto:info@info@secureinc.co.jp'>info@secureinc.co.jp</a></p>");
				} else {
					$('#msg').html("<p style='color:red;'>" + data + "</p>");
				}
			},
			error: function(xhr, status, error) {
				// ajax通信成失敗の処理
				$('#msg').html("通信エラーが発生しました。");
			}
		});
		return false;
	});
	var winSize = $(window).width();
	if (winSize > 960) {
		$('.card.small li').on({
			'mouseenter': function() {
				$(this).addClass("active");
			},
			'mouseleave': function() {
				$(this).removeClass("active");
			}
		});
	}else{
		$('.card.small li').on("click",function(){
			$(this).toggleClass("active");
			$('.card.small li').not(this).removeClass("active");
		});
	}
});