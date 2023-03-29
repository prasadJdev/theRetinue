/* Hamburger */   
$('document').ready(function() {
  $('.hamburger i').click(function() {
    $('.nav_links').toggleClass('active');
  })
});
/* Nav Bar Close on Click */
$('document').ready(function() {
  $('.nav_links li a').click(function() {
    $('.nav_links').removeClass('active');
  })
});
/* Navbar Close on Click */
$('document').ready(function() {
  $('main').click(function() {
    $('.nav_links').removeClass('active');
  })
});
/* About Open and Close on GetStarted button Click */
$('document').ready(function() {
  $('.banner .get_started').click(function() {
    $('.about_hidden').classList.removeClass('.hidden');
  })
});

/*  Scrolling Animations Effects */    
const st = ScrollReveal({
  origin: 'top',
  distance: '100px',
  duration: 2000,
  reset: false
});

st.reveal('.banner_heading',{});
st.reveal('.banner_p',{delay:100});
st.reveal('.get_started',{delay: 1000});
st.reveal('.about_heading',{interval:600, delay:500});
st.reveal('.contact_heading',{})
const sb = ScrollReveal({
  origin: 'bottom',
  distance: '10px',
  duration: 2000,
  reset: false
});
sb.reveal('.serviceBx',{interval:800,delay:900});
sb.reveal('.abt-box',{interval: 1000});


const sl = ScrollReveal({
  origin: 'left',
  distance: '200px',
  duration: 2000,
  reset: false
});

sl.reveal('.services_heading',{delay:400});
sl.reveal('.about_p',{delay: 1000});
sl.reveal('.contentBx',{interval: 600, delay: 500})
const sld = ScrollReveal({
  origin: 'left',
  distance: '150px',
  duration: 2500,
  reset: false
});
sl.reveal('.services_p',{delay:450});
sl.reveal('.about_p2',{delay: 800});

const sr = ScrollReveal({
  origin: 'right',
  distance: '9px',
  duration: 3000,
  reset: false
  
});
sr.reveal('.about_heading2',{delay:500});

const sll = ScrollReveal({
  origin: 'top',
  distance: '50px',
  duration: 2000,
  reset: false
});

sll.reveal('.hamburger', {delay: 300});

const stt = ScrollReveal({
  origin: 'left',
  distance: '100px',
  duration: 2000,
  reset: false
});

stt.reveal('.logospan', {});