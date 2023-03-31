<?php

namespace Titanweb\cdn;

class Loader {


	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'widgets_init', array( $this, 'tmt_widgets_init' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
	}
	public function setup() {
		load_theme_textdomain( 'cdn', get_template_directory() . '/languages' );

		register_nav_menus(array(
			'primary'    => esc_html__( 'Primary Menu', 'cdn' ),
			'container'  => 'ul',
			'menu_class' => 'menu1',
		));

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'responsive-embeds' );
	}

	function tmt_widgets_init() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'sidebar', 'cdn' ),
				'id'            => 'sidebar-1',
				'before_widget' => '<aside class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}

	public function enqueue_assets() {
		Assets::js( 'script', array( 'jquery' ), array( 'url' => admin_url( 'admin-ajax.php' ) ) );
		wp_enqueue_style( 'st-theme', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) );

		Assets::js( 'carousel', array(), array( 'jquery' ) );
		Assets::css( 'carousel' );

		Assets::js( 'fancybox', array(), array( 'jquery' ) );
		Assets::css( 'fancybox' );

		Assets::css( 'animate' );

		// wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css', [], '5.0.1');

		wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

		// wp_enqueue_style( 'magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', [], '1.1.0' );
		// wp_enqueue_script( 'magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', [ 'jquery' ], '1.1.0', true );

		// wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', [], '1.8.1');
		// wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', ['jquery'], '1.8.1', true);

		// wp_enqueue_style('carousel', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css', [], '1.3.3');
		// wp_enqueue_script('carousel', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js', ['jquery'], '1.3.3', true);

		// wp_enqueue_script( 'listjs', 'https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js', [ 'jquery' ], '2.3.1', true );
		// wp_enqueue_script( 'animejs', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js', [ 'jquery' ], '3.2.1', true );

		// Thêm style cho template
		// Assets::template_css( 'page-templates/home-page.php', 'home' );
	}
}
