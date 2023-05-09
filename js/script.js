jQuery( function ( $ ) {
	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

	let $window = $( window ),
		$body = $( 'body' );

	//NAVBAR
	$( ".navbar-icon" ).on( "click", function () {
		$( "body, #page" ).toggleClass( "on" );
		$( this ).toggleClass( "on" );
	} );

	$( ".overlay-wrap, .navbar-icon.on" ).on( "click", function () {
		$( "body, #page" ).removeClass( "on" );
		$( ".navbar-icon" ).removeClass( "on" );
	} );

	//Btn-search

	$( ".mobile-search .btn-search" ).on( "click", function () {
		$( this )
			.next()
			.slideToggle();
	} );

	// Allow hover to open menus in desktop screens
	$( ".dropdown" ).on( "mouseover", function ( e ) {
		if ( $window.width() > 992 ) $( this ).addClass( "open" );
	} );
	$( ".dropdown" ).on( "mouseout", function ( e ) {
		if ( $window.width() > 992 ) $( this ).removeClass( "open" );
	} );

	$( ".dropdown i" ).on( "click", function () {

		if ( $window.width() < 992 ) {
			if (
				!$( this )
					.parent()
					.hasClass( "open" )
			) {
				$( this )
					.parent()
					.addClass( "open" );
				$( this )
					.parent()
					.find( "a.dropdown-title" )
					.attr( "style", "color: #fff; font-weight: 700" );
				// $(this).parent().find('i').show();

			} else {
				$( this )
					.parent()
					.removeClass( "open" );
				$( this )
					.parent()
					.find( "a.dropdown-title" )
					.attr( "style", "color: #fff; font-weight: normal" );
				// $(this).parent().find('i').hide();

			}

		}

	} );
	function showMenu() {
		var nav = $( '.navbar' );
		$window.scroll( function () {
			if ( $( this ).scrollTop() > 90 ) {
				nav.addClass( "navbar-scroll-on" );
			} else {
				nav.removeClass( "navbar-scroll-on" );
			}
		} );
	}

	function slickSlide() {

		$( '.slider-main', ).owlCarousel( {
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 2000,
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

		$( '.slider-partner' ).owlCarousel( {
			loop: true,
			margin: 20,
			// navText: ['<img src="template/frontend/images/ar1-1.png" alt="">', '<img src="template/frontend/images/ar1.png" alt="">'],
			nav: false,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1500,
			responsive: {
				0: {
					items: 2,
					margin: 10,
				},
				600: {
					items: 3
				},
				1000: {
					items: 5
				}
			}
		} );

		$( '.video-home-bg', ).owlCarousel( {
			loop: true,
			margin: 10,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1500,
			nav: true,
			items: 1

		} );

	};

	// ===== Scroll to Top ====
	function ScrollTop() {
		$( '#totop' ).hide();
		$window.scroll( function () {
			"use strict";
			if ( $( this ).scrollTop() >= 150 ) {        // If page is scrolled more than 50px
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

	function popupVideo() {
		$( '.popup-video' ).magnificPopup( {
			disableOn: 800,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		} );
	}

	var popupForm = function () {
		setTimeout( function () {
			$body.addClass( 'has-popup' );
			$( '.box-popup' ).css( 'display', 'flex' );

			$( '.box-popup svg' ).on( 'click', function () {
				$( '.box-popup' ).hide();
				$body.removeClass( 'has-popup' );
			} );
		}, 0 );
	};
	function showpupup() {
		$( '.btn-clear' ).on( 'click', function () {
			console.log( 'sdas' );
			$( '.box-popup' ).css( 'display', 'none' );
		} );
		$( '.box-popup ' ).on( 'click', function () {
			$( this ).css( 'display', 'none' );
		} );
	};

	function fixMenu() {
		$window.scroll( function () {
			if ( matchMedia( 'only screen and (min-width: 1200px)' ).matches ) {
				if ( $window.scrollTop() >= 50 ) {
					$( '.ttm-stickable-header' ).addClass( 'fixed-header' );
					$( '.ttm-stickable-header' ).addClass( 'visible-title' );
				}
				else {
					$( '.ttm-stickable-header' ).removeClass( 'fixed-header' );
					$( 'ttm-stickable-header' ).removeClass( 'visible-title' );
				}
			}
		} );
		$( 'ul li:has(ul)' ).addClass( 'has-submenu' );
		$( 'ul li ul' ).addClass( 'sub-menu' );
		$( "ul.dropdown li a:after" ).on( {
			mouseover: function () {
				$( this ).addClass( "hover" );
			},
			mouseout: function () {
				$( this ).removeClass( "hover" );
			},
		} );
		if ( $window.width() <= 1024 ) {
			var $menu = $( '#menu' ), $menulink = $( '#menu-toggle-form' ), $menuTrigger = $( '.has-submenu > i' );
			$menulink.on( 'click', function ( e ) {
				$menulink.toggleClass( 'active' );
				$menu.toggleClass( 'active' );
			} );
			$menuTrigger.on( 'click', function ( e ) {
				e.preventDefault();
				var t = $( this );
				t.toggleClass( 'open' ).next( 'ul' ).toggleClass( 'open' );
			} );
		} else {
		}
		$( 'ul li:has(ul)' );
	}

	function tabTransfer() {
		$( '.tab-name' ).click( function () {
			let tab_id = $( this ).attr( 'data-tab' );
			console.log( 'eweqeq' );
			$( '.tab-name' ).removeClass( 'active' );
			$( '.tab-content' ).removeClass( 'active' );

			$( this ).addClass( 'active' );
			$( '#' + tab_id ).addClass( 'active' );
		} );
	}

	function btnSeeMore() {
		$( document ).ready( function () {
			$( "#toggle1" ).click( function () {
				var elem = $( "#toggle1" ).text();
				if ( elem == "Xem thêm" ) {
					//Stuff to do when btn is in the read more state
					$( "#toggle1" ).text( "Thu gọn" );
					$( "#text1" ).slideDown();
				} else {
					//Stuff to do when btn is in the read less state
					$( "#toggle1" ).text( "Xem thêm" );
					$( "#text1" ).slideUp();
				}
			} );

			$( "#toggle2" ).click( function () {
				var elem = $( "#toggle2" ).text();
				if ( elem == "Xem thêm" ) {
					//Stuff to do when btn is in the read more state
					$( "#toggle2" ).text( "Thu gọn" );
					$( "#text2" ).slideDown();
				} else {
					//Stuff to do when btn is in the read less state
					$( "#toggle2" ).text( "Xem thêm" );
					$( "#text2" ).slideUp();
				}
			} );

			$( "#toggle3" ).click( function () {
				var elem = $( "#toggle3" ).text();
				if ( elem == "Xem thêm" ) {
					//Stuff to do when btn is in the read more state
					$( "#toggle3" ).text( "Thu gọn" );
					$( "#text3" ).slideDown();
				} else {
					//Stuff to do when btn is in the read less state
					$( "#toggle3" ).text( "Xem thêm" );
					$( "#text3" ).slideUp();
				}
			} );

			$( "#toggle4" ).click( function () {
				var elem = $( "#toggle4" ).text();
				if ( elem == "Xem thêm" ) {
					//Stuff to do when btn is in the read more state
					$( "#toggle4" ).text( "Thu gọn" );
					$( "#text4" ).slideDown();
				} else {
					//Stuff to do when btn is in the read less state
					$( "#toggle4" ).text( "Xem thêm" );
					$( "#text4" ).slideUp();
				}
			} );

			$( "#toggle5" ).click( function () {
				var elem = $( "#toggle5" ).text();
				if ( elem == "Xem thêm" ) {
					//Stuff to do when btn is in the read more state
					$( "#toggle5" ).text( "Thu gọn" );
					$( "#text5" ).slideDown();
				} else {
					//Stuff to do when btn is in the read less state
					$( "#toggle5" ).text( "Xem thêm" );
					$( "#text5" ).slideUp();
				}
			} );
			$( "#toggle6" ).click( function () {
				var elem = $( "#toggle6" ).text();
				if ( elem == "Xem thêm" ) {
					//Stuff to do when btn is in the read more state
					$( "#toggle6" ).text( "Thu gọn" );
					$( "#text6" ).slideDown();
				} else {
					//Stuff to do when btn is in the read less state
					$( "#toggle6" ).text( "Xem thêm" );
					$( "#text6" ).slideUp();
				}
			} );
		} );
	}


	showMenu();
	slickSlide();
	ScrollTop();
	tabTransfer();
	fixMenu();
	btnSeeMore();
	popupVideo();
	popupForm();
	showpupup();
} );