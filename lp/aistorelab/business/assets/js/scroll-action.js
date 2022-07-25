var timer_list = [];

var set_scroll_action = function(selector, on_scroll_in, on_scroll_out, delay) {
  $(window).on('scroll',function() {
    clearTimeout(timer_list[selector + "_" + delay]);
    timer_list[selector + "_" + delay] = setTimeout(function() {
      $(selector).each(function(i, e){
        exec_scroll_action(e, on_scroll_in, on_scroll_out);
      });
    }, delay );
  });
};

var exec_scroll_action = function(e, on_scroll_in, on_scroll_out) {
  var buffer = window.innerHeight - 100;
  //スクロール量を取得
  var scroll = $(window).scrollTop();
  //ターゲットの位置を取得
  var target = $(e).offset().top;
  //ウィンドウの高さを取得
  console.log(e.id + ":scroll/target", scroll + "/" + target);
  //ターゲットまでスクロールするとフェードインする
  if (scroll + buffer > target){
    console.log("scroll in");
    on_scroll_in(e);
  } else {
    console.log("scroll out");
    on_scroll_out(e);
  }
};


