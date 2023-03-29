$('document').ready(function(){
  $('.menu-toggle').click(function(){
    $('nav').toggleClass('active');
  })
});

$('document').ready(function(){
$('.menu-toggle').click(function() {
  $('.menu-toggle').toggleClass('open')
});
});

$('document').ready(function(){
$('.career a').click(function(){
 
  $('#join').toggleClass('hidden')
});
})

//------------------                                     -------+-----------------------

/*
// Smooth Scrolling Effects  
$(function(){
  $('.navbar a').on('click', function(e) {
    if (this.hash !== '') {
      e.preventDefault();
      const hash = this.hash;
      $('html, body').animate({
        scrollTo: $(hash).offset().top
      }, 800)
  
    }
  })
})
*/