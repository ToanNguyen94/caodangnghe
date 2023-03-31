jQuery( function ( $ ) {
	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

	let $window = $( window ),
		$body = $( 'body' );

	function slickSlide() {

		$( '.slider-main' ).owlCarousel( {
			loop: true,
			margin: 10,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1500,
			nav: true,
			items: 1

		} );

		$( '.slider-event' ).owlCarousel( {
			loop: true,
			margin: 20,
			nav: true,
			// navText: ['<img src="template/frontend/images/ar1-1.png" alt="">', '<img src="template/frontend/images/ar1.png" alt="">'],
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 4
				}
			}
		} );

	};

	// ===== Scroll to Top ====
	function ScrollTop() {

		$( '#totop' ).hide();

		$window.scroll( function () {

			"use strict";

			if ( $( this ).scrollTop() >= 100 ) {        // If page is scrolled more than 50px

				$( '#totop' ).fadeIn( 200 );    // Fade in the arrow

				$( '#totop' ).addClass( 'top-visible' );

			} else {

				$( '#totop' ).fadeOut( 200 );   // Else fade out the arrow

				$( '#totop' ).removeClass( 'top-visible' );

			}

		} );

		$( '#totop' ).on( 'click', function () {      // When arrow is clicked

			$( 'body,html' ).animate( {

				scrollTop: 0                       // Scroll to top of body

			}, 500 );

			return false;

		} );
	}

	function counterNumber() {
		var run = false;
		if ( !$body.hasClass( 'page-template-home-page' ) ) {
			return;
		}

		$window.scroll( function () {
			var top = $( '.number-home' ).offset().top - window.innerHeight;

			if ( run || $window.scrollTop() <= top ) {
				return;
			}

			$( '.count' ).each( function () {
				$( this ).prop( 'Counter', 0 ).animate( {
					Counter: $( this ).text()
				}, {
					duration: 4000,
					easing: 'swing',
					step: function ( now ) {
						$( this ).text( Math.ceil( now ) );
					}
				} );
			} );

			run = true;
		} );
	}

	function popupLogout() {
		$( '.popup-modal' ).magnificPopup( {
			type: 'inline',
			preloader: false,
			modal: true
		} );
		$( document ).on( 'click', '.popup-modal-dismiss', function ( e ) {
			e.preventDefault();
			$.magnificPopup.close();
		} );
	}

	function toggleMenu() {
		const nav = document.querySelector( '.header__menu' );
		const bg = document.querySelector( '.bgDart' );
		if ( !nav ) {
			return;
		}
		const menu = nav.querySelector( 'ul' ),
			button = document.querySelector( '.menu-toggle' );

		menu.setAttribute( 'aria-expanded', 'false' );
		button.addEventListener( 'click', () => {
			nav.classList.toggle( 'is-open' );
			bg.classList.toggle( 'open' );
		} );
		bg.addEventListener( 'click', () => {
			nav.classList.remove( 'is-open' );
			bg.classList.remove( 'open' );
		} );
	}


	$( window ).scroll( function () {
		if ( matchMedia( 'only screen and (min-width: 1200px)' ).matches ) {
			if ( $( window ).scrollTop() >= 50 ) {
				$( '.ttm-stickable-header' ).addClass( 'fixed-header' );
				$( '.ttm-stickable-header' ).addClass( 'visible-title' );
			}
			else {
				$( '.ttm-stickable-header' ).removeClass( 'fixed-header' );
				$( 'ttm-stickable-header' ).removeClass( 'visible-title' );
			}
		}
	} );



	slickSlide();
	ScrollTop();
	// counterNumber();
	// popupLogout();
	// toggleMenu();
	// fixedMenu();
} );