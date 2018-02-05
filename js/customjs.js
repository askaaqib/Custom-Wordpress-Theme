 $(document).ready(function(){
 	new WOW().init();
  // $('.banner-slider').slick({
  //     infinite: true,
	 //  slidesToShow: 1,
	 //  slidesToScroll: 1,
	 //  autoplay: true,
	 //  dots : false,
	 //  fade: true,
	 //  speed: 1000,
 	//   autoplaySpeed: 3000
  // });

  $('.slide-profile').slick({
      infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: false,
	  autoplay: false,
	  dots : false,
	  speed: 500,
 	  autoplaySpeed: 3000,
 	  prevArrow:"<a href='#' class='btn-red'>Next</a>",
      nextArrow: "<a href='#' class='btn-grey'>Previous</a>"
  });
  
  $('.awards-slider').slick({
      infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 2,
	  autoplay: true,
	  dots : true,
	  arrows: false,
 	  autoplaySpeed: 2000,
 	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: true
	      }
	    }
	  ]
  });

  $('.testimonials-slider').slick({
      infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  dots : true,
	  arrows: false,
 	  autoplaySpeed: 2000,
 	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: true
	      }
	    }
	  ]
  });

  $('.blog-posts-slider').slick({
      infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  dots : true,
	  arrows: false,
 	  autoplaySpeed: 2000,
 	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: true
	      }
	    }
	  ]
  });

  $('.col-4[data-slide]').click(function(e) {
  		console.log("cklicked");
	   e.preventDefault();
	   var slideno = $(this).data('slide');
	   $('.slide-profile').slick('slickGoTo', slideno - 1);
	 });

  $(document).scroll(function(){
	    if($(this).scrollTop() > 100)
	    {   
	       $('.fixed').addClass("solid");
	        $(".menu").slideUp("slow");

	    } else {


	        $('.fixed').removeClass("solid");
	 

	    }
	});


  	$( "#menu-btn, .menu span" ).click(function(event ) {
  		event.preventDefault();
	  $(".menu").slideToggle("slow");
	});


 //  	$('ul.tabs li').click(function(){
	// 	var tab_id = $(this).attr('data-tab');

	// 	console.log(tab_id + " This is id");

	// 	$('ul.tabs li').removeClass('current');
	// 	$('.tab-content').removeClass('current');

	// 	$(this).addClass('current');
	// 	var c = $("#"+tab_id);
	// 	console.log(c + " This is C value");
	// 	$("#"+tab_id).addClass('current');
	// });

	$('ul.tabs2 li').hover(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

  	$(".responsive-menu").click(function(){
	    $(".navbar-nav").slideToggle();
	});

	$(".navbar-nav li:last-child > a").click(function(){
		$("div.search").slideToggle();
	});

	$(".tab-2 img").on("hover", function() {
		$("#menu-2").show();
	});
	

});