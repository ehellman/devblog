$('.nav-toggle').click(function(e){
  e.preventDefault();
  $('#menu').slideToggle();
});

$('.search-toggle').click(function(e){
  e.preventDefault();
  $('.search').slideToggle();
});

$('#atop').click(function () {
  $('html,body').animate({
    scrollTop: 0
  }, 1000);
  return false;
});