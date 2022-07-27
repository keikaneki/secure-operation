$(function() {
  /*
  var pagetop = $('#bottom_btn');
  // ボタン非表示
  pagetop.hide();
  // 100px スクロールしたらボタン表示
  $(window).scroll(function () {
     if ($(this).scrollTop() > 100) {
          pagetop.fadeIn();
     } else {
          pagetop.fadeOut();
     }
  });
  // /aioffice/docs/toranomaki/?utm_source=btmPopupBnr
  //pagetop.click(function () {
    // $('body, html').animate({ scrollTop: 0 }, 500);
   //return false;
  //});
  */
  $('#bottom_btn-control').click(function() {
    if ($('#bottom_btn a').is(':visible')) {
      // アイコンを非表示にする
      // alert('hide');
      $('#bottom_btn a').slideToggle(200, function() {
        // 閉じるボタン→開くボタンに変更
        var tmp = $('#bottom_btn-control').attr('src');
        $('#bottom_btn-control').attr({
          'src': tmp.replace(/_close\./, '_open.')
        });
      });
    } else {
      // アイコンを表示する
      // alert('show');
      $('#bottom_btn a').slideToggle(200, function() {
        // 開くボタン→閉じるボタンに変更
        var tmp = $('#bottom_btn-control').attr('src');
        $('#bottom_btn-control').attr({
          'src': tmp.replace(/_open\./, '_close.')
        });
      });
    }
  });
});
// 問合せフォームまでスクロールしたら固定バナーを非表示にする
$(window).on('scroll', function() {
  var elem = $('#bottom_btn');
  elem.each(function() {
    var cjmTop = $('#form').offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();
    if(scrollPos > wh && scrollPos < cjmTop - wh && !elem.hasClass("active")){
      elem.addClass("active");
      elem.fadeIn("fast");
    }else if (scrollPos > cjmTop - wh && elem.hasClass("active")) {
      elem.removeClass("active");
      elem.fadeOut("fast");
    }else if(scrollPos < wh && elem.hasClass("active")){
      elem.removeClass("active");
      elem.fadeOut("fast");
    }
  });
});