$(function(){
  
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
  
  // ページ下フロートバナー
  $('#bottom_btn-control').click(function() {
    if ($('#bottom_btn a').is(':visible')) {
      // アイコンを非表示にする
      // alert('hide');
      $('#bottom_btn a').slideToggle(200,
        function() {
          // 閉じるボタン→開くボタンに変更
          var tmp = $('#bottom_btn-control').attr('src');
          $('#bottom_btn-control').attr({
            'src' : tmp.replace(/_close\./, '_open.')
          });
        }
      );
      
    } else {
      // アイコンを表示する
      // alert('show');
      $('#bottom_btn a').slideToggle(200,
        function() {
          // 開くボタン→閉じるボタンに変更
          var tmp = $('#bottom_btn-control').attr('src');
          $('#bottom_btn-control').attr({
            'src' : tmp.replace(/_open\./, '_close.')
          });
        }
      );
      
    }
  });

  // スライダー
  $(document).ready(function(){
    $('#topslider').slick({
      autoplay: true,
      speed: 900,
      slidesToShow: 1,
      slidesToScroll: 1
    });
    var autoplay = true;
    $('.js-setoption').on('click', function() {
      autoplay = !autoplay;
      $('#topslider').slick('slickSetOption', {
      autoplay: autoplay,
      });
      
    });
    
  });
  
});
