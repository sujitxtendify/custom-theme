(function ($) {


	// =============scroll===================== 
	window.addEventListener("scroll", () => {
		if (window.pageYOffset > $(".sc_animate_header").innerHeight()) {
			$(".sc_animate_header").addClass("sticky_header");
		} else {
			$(".sc_animate_header").removeClass("sticky_header");
		}
	})

	$(document).ready(function () {
		$(".toggle").click(function () {
			$(this).toggleClass('toggle_active');
			$("nav").toggleClass('active_nav');
			$("body").toggleClass('active_body');
		});
		$("nav ul li a").click(function () {
			$("nav").removeClass('active_nav');
			$(".toggle").removeClass('toggle_active');
			$("body").removeClass('active_body');

		});

		// ---------------collapse-----------------
		jQuery('.acc-collapse-wrapper .acc-main-content:nth-child(1) .acc-head').addClass('active');
		jQuery('.acc-collapse-wrapper .acc-main-content:nth-child(1) .acc-content').slideDown();
		jQuery('.acc-head').on('click', function () {
			if (jQuery(this).hasClass('active')) {
				jQuery(this).siblings('.acc-content').slideUp();
				jQuery(this).removeClass('active');
			}
			else {
				jQuery('.acc-content').slideUp();
				jQuery('.acc-head').removeClass('active');
				jQuery(this).siblings('.acc-content').slideToggle();
				jQuery(this).toggleClass('active');
			}
		});
	});

	// ======go to top button==========
	var got_to_top = document.getElementsByClassName("go_top_btn");
	if (got_to_top.length > 0) {
		jQuery(document).ready(function ($) {

			var gtp = $('#go_to_top');

			$(window).scroll(function () {
				if ($(window).scrollTop() > 300) {
					gtp.addClass('show');
				} else {
					gtp.removeClass('show');
				}
			});

			gtp.on('click', function (e) {
				e.preventDefault();
				$('html, body').animate({ scrollTop: 0 }, '300');
			});

		});
	}

	// =========home banner slider===========
	var banner_swiper = new Swiper('.sc_swiper_container', {
		slidesPerView: 2,
		centeredSlides: true,
		loop: true,
		spaceBetween: 10,
		keyboard: {
			enabled: true,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
			dynamicBullets: true,
		},

		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

	});


	//   ===============vertcal slider===============
	$(document).ready(function () {
		new Swiper(".swiper-vertical-slider", {

			direction: 'vertical',
			spaceBetween: 1,
			slidesPerView: 3,
			centeredSlides: true,
			roundLengths: true,
			loop: true,
			loopAdditionalSlides: 30,
			coverflowEffect: {
				rotate: 0,
				stretch: 270,
				depth: 150,
				modifier: 1,
				slideShadows: false
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
		});
	});

// ========see bulk pricing slidetoggle==============
$(document).ready(function() {
	$('.learn_more_wrapper .lm_container .lm_top_row h4 a span').click(function(e) {
		e.preventDefault()
	  $('.learn_more_wrapper .lm_container .lm_middle_row').slideToggle('slow');
	});
//   ------------------------------demo_sc-main---------------------
	$('.demo_sc_toggle').click(function() {
		$('.demo_sc_main_header .header_wrapper .demo_sc_nav').slideToggle(400);
	  });//end slide toggle

  });


}(jQuery));