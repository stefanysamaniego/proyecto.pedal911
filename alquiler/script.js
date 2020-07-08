$('.selection-item').click(function() {
  $el = $(this);
  var clickedClass = $el.attr('class');
  var newClass = clickedClass.replace('selection-item ','');
  
  $el.siblings('.active-item').removeClass('active-item').addClass(newClass);
  $el.removeClass(newClass).addClass('active-item');
});

$('.active-item').click(function() {
  $(this).css('top', '100px');
  $('.passive-left').css('left', '-400px');
  $('.passive-right').css('left', '400px');
  $('.active-item, .passive-left, .passive-right').css('opacity', '0');
 

  setTimeout(function(){
    $('.login-wrapper').addClass('display-login');
  }, 175);
});

$('.login-back').click(function() {
  $('.login-wrapper').removeClass('display-login');
  
  
  setTimeout(function(){
    $('.active-item, .passive-left, .passive-right').fadeIn(175);
    $('.active-item').css('top', '0');
    $('.passive-left').css('left', '-230px');
    $('.passive-right').css('left', '230px');
    $('.active-item, .passive-left, .passive-right').css('opacity', '1');
  }, 175);
});