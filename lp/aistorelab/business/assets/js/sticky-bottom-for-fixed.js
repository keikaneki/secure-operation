var sticky_bottom_for_fixed = function(selector_for_fixed, bottom) {
  $(window).on('scroll',function() {
    var body = window.document.body;
    var html = window.document.documentElement;

    var scrollTop    = body.scrollTop || html.scrollTop;
    var scrollBottom = html.scrollHeight - html.clientHeight - scrollTop;

    if (scrollBottom < bottom) {
      console.log("stop fixed top");
      $(selector_for_fixed).css("position", "relative");
    } else {
      console.log("start fixed top");
      $(selector_for_fixed).css("position", "fixed");
    }
  });
};
