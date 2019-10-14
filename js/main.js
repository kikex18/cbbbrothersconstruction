//Carousel
$('.carousel').carousel({
          interval: 4000,
          keyboard:true,
          // pause:"hover"
        })

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  $("html, body").animate({scrollTop: 0}, 1000);// For Chrome, Firefox, IE and Opera
}

//animaciones
AOS.init({
  offset: 200,
  duration: 600,
  easing: 'ease-in-sine',
  delay: 100,
  disable: 'mobile',
});


//para portfolio
$('[data-fancybox="images"]').fancybox({
    afterLoad : function(instance, current) {
        var pixelRatio = window.devicePixelRatio || 1;

        if ( pixelRatio > 1.5 ) {
            current.width  = current.width  / pixelRatio;
            current.height = current.height / pixelRatio;
        }
    }
});

//MENU STICKY
$(document).ready(function(){
		var altura = $('.navbar').offset().top;
		
		$(window).on('scroll', function(){
			if ( $(window).scrollTop() > altura ){
				$('.navbar').addClass('menu-fixed');
			} else {
				$('.navbar').removeClass('menu-fixed');
			}
		});
	 
	});