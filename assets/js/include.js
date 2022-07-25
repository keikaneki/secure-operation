$(document).ready(function() {
  $.ajaxSetup({cache:false});
  $(".header-include").load('/assets/include/header.html');
  $(".footer-include").load('/assets/include/footer.html');

  if($('div').hasClass('contact-include')){
    $(".contact-include").load('/assets/include/contact.html');
  }
  if($('div').hasClass('solution-include')){
     $(".solution-include").load('/assets/include/solution.html');
  }
  if($('div').hasClass('case-include')){
     $(".case-include").load('/assets/include/case.html');
  }

  $.getScript("/assets/js/common.min.js", function() {
  });
  $.getScript("/assets/js/bundle.js", function() {
  });
  $.getScript("/assets/js/function.js", function() {
  });
});
