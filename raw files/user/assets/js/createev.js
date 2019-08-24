'use strict';

$(document).ready(function(){

  // ----------- matchHeight -----------
  $('.match-height').matchHeight();
});


// ----------- ScrollReveal -----------
window.sr = ScrollReveal({ duration: 500 });
sr.reveal('.scroll-reveal');


// nav animation
// ----------- nav animation -----------
var hamburger = document.getElementById('hamburger-icon');
hamburger.onclick = function() {
  hamburger.classList.toggle('active');
  document.body.classList.toggle('show');
};


// ----------- testimonials carousel -----------
$('.carousel').carousel({
  interval: false
})
