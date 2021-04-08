$(document).ready(function(){
  
    if($(".swiper-container").hasClass("team-member-slider")){
	  var swiper = new Swiper('.swiper-container', {
	    slidesPerView:3,
		allowTouchMove: true,
		loop: true,
		centeredSlides: true,
		slideToclickedslide: true,
		effect: "coverflow",
		grabcursor: true,
		autoplay: true,
		navigation:{
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
		coverflow: {
		  rotate: 0,
		  stretch: 100,
		  depth: 200,
		  modifier: 1,
		  slideShadows: false
		},
		breakpoints: {
		  767: {
		    slidesPerView: 1,
			centeredSlides: false,
			effect: "slide",
		  }
		}
	  });
	}
  });