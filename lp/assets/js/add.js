$('#to-top').click(function() {
    $('html').animate({scrollTop: 0});
}) 

$(".animate-toggle-title").click(function(){
  if($('.side_contact').hasClass("clicked")){ // クリックされた要素がclickedクラスだったら
    $('.side_contact').removeClass("clicked");
    $('.animate-toggle-title').removeClass("off");
  }else{
    $('.side_contact').addClass("clicked");
    $('.animate-toggle-title').addClass("off");
  }
});
