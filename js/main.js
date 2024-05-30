/* =====================================
Template Name: 	Quick Fly.
Author Name: Rakibul Hasan Joy
Version:	1.1
========================================*/
/*=======================================
[Start Activation Code]
=========================================
* Sticky Header JS
* Search JS
* Mobile Menu JS
* Hero Slider JS
* Testimonial Slider JS
* Portfolio Slider JS
* Clients Slider JS
* Single Portfolio Slider JS
* Accordion JS
* Nice Select JS
* Date Picker JS
* Counter Up JS
* Checkbox JS
* Right Bar JS
* Video Popup JS
* Wow JS
* Scroll Up JS
* Animate Scroll JS
* Stellar JS
* Google Maps JS
* Preloader JS
=========================================
[End Activation Code]
=========================================*/
/*=================================
Cart Text Limit
===================================*/
document.addEventListener('DOMContentLoaded', function () {
	var AllcardText = document.querySelectorAll("#card-text");
	var maxLength = 150; // Maximum number of characters to display
	AllcardText.forEach(function (cardText) {
		var originalText = "";
		originalText = cardText.textContent;
		if (originalText.length > maxLength) {
			var truncatedText = originalText.substring(0, maxLength) + '...';
			cardText.textContent = truncatedText;
		}
	});
});
/*=================================
Blog Text Limit
===================================*/
document.addEventListener('DOMContentLoaded', function () {
	var AllcardText = document.querySelectorAll("#blog-text");
	var maxLength = 300; // Maximum number of characters to display
	AllcardText.forEach(function (cardText) {
		var originalText = "";
		originalText = cardText.textContent;
		if (originalText.length > maxLength) {
			var truncatedText = originalText.substring(0, maxLength) + '...';
			cardText.textContent = truncatedText;
		}
	});
});

/*===============================
		Holiday Slider Filter
=================================*/
document.addEventListener('DOMContentLoaded', function () {
	const buttons = document.querySelectorAll('#middle-tab');
	const cards = document.querySelectorAll('.country-card');

	buttons.forEach(button => {
		button.addEventListener('click', function () {
			const continent = this.getAttribute('data-continent');

			cards.forEach(card => {
				if (continent === 'all' || card.getAttribute('data-continent') === continent) {
					card.classList.remove('hidden');
				} else {
					card.classList.add('hidden');
				}
			});
		});
	});
});
/*=========================================*/
(function ($) {
	"use strict";
	$(document).on('ready', function () {
		jQuery(window).on('scroll', function () {
			if ($(this).scrollTop() > 150) {
				$('#header .header-inner').addClass("sticky");
			} else {
				$('#header .header-inner').removeClass("sticky");
			}
		});

		/*====================================
			Sticky Header JS
		======================================*/
		jQuery(window).on('scroll', function () {
			if ($(this).scrollTop() > 50) {
				$('.header').addClass("sticky");
			} else {
				$('.header').removeClass("sticky");
			}
		});

		$('.pro-features .get-pro').on("click", function () {
			$('.pro-features').toggleClass('active');
		});

		/*====================================
			Mobile Menu
		======================================*/
		$(document).ready(function(){
			$('.menu').slicknav({
				prependTo: ".mobile-nav",
				duration: 300,
				closeOnClick: true,
			});

			// Manually remove specific classes after SlickNav initialization
			$('.slicknav_nav .sparkle').removeClass('sparkle');
			$('.slicknav_nav .sparkle-blink').removeClass('sparkle-blink');
		});

		/*===============================
			Hero Slider JS
		=================================*/
		$(".hero-slider").owlCarousel({
			loop: true,
			autoplay: true,
			smartSpeed: 500,
			autoplayTimeout: 3500,
			singleItem: true,
			autoplayHoverPause: true,
			items: 1,
			nav: true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots: false,
		});

		/*===============================
			Holiday Slider JS
		=================================*/
		$('.holiday-slider').owlCarousel({
			autoplay: false,
			autoplayTimeout: 3000,
			margin: 10,
			smartSpeed: 1000,
			fluidSpeed: true,
			autoplayHoverPause: true,
			loop: false,
			nav: true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots: true,
			responsive: {
				300: {
					items: 1,
				},
				480: {
					items: 2,
				},
				768: {
					items: 2,
				},
				1170: {
					items: 4,
				},
			}
		});




		/*===============================
			Portfolio Slider JS
		=================================*/
		$('.portfolio-slider').owlCarousel({
			autoplay: true,
			autoplayTimeout: 4000,
			margin: 15,
			smartSpeed: 300,
			autoplayHoverPause: true,
			loop: true,
			nav: true,
			dots: false,
			responsive: {
				300: {
					items: 1,
				},
				480: {
					items: 2,
				},
				768: {
					items: 2,
				},
				1170: {
					items: 4,
				},
			}
		});



		/*===============================
			Clients Slider JS
		=================================*/
		$('.clients-slider').owlCarousel({
			items: 5,
			autoplay: true,
			autoplayTimeout: 1000,
			margin: 15,
			smartSpeed: 1500,
			autoplayHoverPause: true,
			loop: true,
			nav: false,
			dots: false,
			responsive: {
				300: {
					items: 2,
				},
				480: {
					items: 3,
				},
				768: {
					items: 4,
				},
				1170: {
					items: 6,
				},
			}
		});

		/*====================================
			Single Portfolio Slider JS
		======================================*/
		$('.pf-details-slider').owlCarousel({
			items: 1,
			autoplay: false,
			autoplayTimeout: 5000,
			smartSpeed: 400,
			autoplayHoverPause: true,
			loop: true,
			merge: true,
			nav: true,
			dots: false,
			navText: ['<i class="icofont-rounded-left"></i>', '<i class="icofont-rounded-right"></i>'],
		});

		/*===================
			Accordion JS
		=====================*/
		$('.accordion > li:eq(0) a').addClass('active').next().slideDown();
		$('.accordion a').on('click', function (j) {
			var dropDown = $(this).closest('li').find('p');
			$(this).closest('.accordion').find('p').not(dropDown).slideUp(300);
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			} else {
				$(this).closest('.accordion').find('a.active').removeClass('active');
				$(this).addClass('active');
			}
			dropDown.stop(false, true).slideToggle(300);
			j.preventDefault();
		});

		/*====================================
			Nice Select JS
		======================================*/
		$('select').niceSelect();

		/*=====================================
			Date Picker JS
		======================================*/
		$(function () {
			$("#datepicker").datepicker();
		});



		/*===============================
			Checkbox JS
		=================================*/
		$('input[type="checkbox"]').change(function () {
			if ($(this).is(':checked')) {
				$(this).parent("label").addClass("checked");
			} else {
				$(this).parent("label").removeClass("checked");
			}
		});

		/*===============================
			Right Bar JS
		=================================*/
		$('.right-bar .bar').on("click", function () {
			$('.sidebar-menu').addClass('active');
		});
		$('.sidebar-menu .cross').on("click", function () {
			$('.sidebar-menu').removeClass('active');
		});

		/*=====================
			Video Popup JS
		=======================*/
		$('.video-popup').magnificPopup({
			type: 'video',
		});

		/*================
			Wow JS
		==================*/
		var window_width = $(window).width();
		if (window_width > 767) {
			new WOW().init();
		}

		/*===================
			Scroll Up JS
		=====================*/
		$.scrollUp({
			scrollText: '<span><i class="fa fa-angle-up"></i></span>',
			easingType: 'easeInOutExpo',
			scrollSpeed: 900,
			animation: 'fade'
		});

		/*=======================
			Animate Scroll JS
		=========================*/
		$('.scroll').on("click", function (e) {
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top - 100
			}, 1000);
			e.preventDefault();
		});

		/*=======================
			Stellar JS
		=========================*/
		$.stellar({
			horizontalOffset: 0,
			verticalOffset: 0
		});

		/*====================
			Google Maps JS
		======================*/
		var map = new GMaps({
			el: '#map',
			lat: 23.011245,
			lng: 90.884780,
			scrollwheel: false,
		});
		map.addMarker({
			lat: 23.011245,
			lng: 90.884780,
			title: 'Marker with InfoWindow',
			infoWindow: {
				content: '<p>welcome to Medipro</p>'
			}

		});
	});

	/*====================
		Preloader JS
	======================*/
	$(window).on('load', function () {
		$('.preloader').addClass('preloader-deactivate');
	});

})(jQuery);

/*===============================
	Form Registration Validity
=================================*/
document.getElementById('registration-form').addEventListener('submit', function (e) {
	let nameInput = document.getElementById('name');
	if (!nameInput.value.trim()) {
		e.preventDefault();
		document.getElementById('name-error').textContent = 'Please enter your full name.';
		nameInput.focus();
	} else {
		document.getElementById('name-error').textContent = '';
	}

	let phoneInput = document.getElementById('phone');
	if (phoneInput.value.length !== 10 || !phoneInput.value.match(/^\d{10}$/)) {
		e.preventDefault();
		document.getElementById('phone-error').textContent = 'Please enter a valid phone number with exactly 10 digits.';
		phoneInput.focus();
	} else {
		document.getElementById('phone-error').textContent = '';
	}

	let emailInput = document.getElementById('email');
	let emailValue = emailInput.value;
	let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!emailPattern.test(emailValue)) {
		e.preventDefault();
		document.getElementById('email-error').textContent = 'Please enter a valid email address.';
		emailInput.focus();
	} else {
		document.getElementById('email-error').textContent = '';
	}

	let passwordInput = document.getElementById('password');
	if (passwordInput.value.length < 8) {
		e.preventDefault();
		document.getElementById('password-error').textContent = 'Password must be at least 8 characters long.';
		passwordInput.focus();
	} else {
		document.getElementById('password-error').textContent = '';
	}
});