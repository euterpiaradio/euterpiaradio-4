<?php

if ( ! function_exists( 'euterpiaradio_4_enqueue_scripts' ) ) {
	function euterpiaradio_4_enqueue_scripts() {
		wp_enqueue_script( 'euterpiaradio-4-script', get_template_directory_uri() . '/js/script.js', [
			'jquery',
			'wp-mediaelement'
		], '20170718', true );
		wp_enqueue_style( 'euterpiaradio-4-normalize', get_template_directory_uri() . '/node_modules/normalize.css/normalize.css', [ 'wp-mediaelement' ], '20170718', 'all' );
		wp_enqueue_style( 'euterpiaradio-4-style', get_template_directory_uri() . '/style.css', [ 'euterpiaradio-4-normalize' ], '20170718', 'all' );
		wp_enqueue_style( 'euterpiaradio-4-fonts', get_template_directory_uri() . '/fonts/fonts.css', [ 'euterpiaradio-4-style' ], '20170818', 'all' );
		wp_enqueue_style( 'euterpiaradio-4-fontawesome', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.css', [ 'euterpiaradio-4-style' ], '20170718', 'all' );
		wp_enqueue_style( 'euterpiaradio-4-socials-icons', get_template_directory_uri() . '/socials/socials.css', [ 'euterpiaradio-4-style' ], '20170718', 'all' );
		wp_enqueue_style( 'euterpiaradio-4-socials-style', get_template_directory_uri() . '/socials/style.css', [ 'euterpiaradio-4-style' ], '20170718', 'all' );
	}
}

add_action( 'wp_enqueue_scripts', 'euterpiaradio_4_enqueue_scripts' );

if ( ! function_exists( 'euterpiaradio_4_after_setup_theme' ) ) {
	function euterpiaradio_4_after_setup_theme() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat'
		) );
		register_nav_menu( 'header-menu', __( 'Navigation' ) );
		register_nav_menu( 'social-links', __( 'Réseaux sociaux' ) );
		register_nav_menu( 'directory-links', __( 'Annuaires' ) );
	}
}

add_action( 'after_setup_theme', 'euterpiaradio_4_after_setup_theme' );

if ( ! function_exists( 'euterpiaradio_4_create_chart_posttype' ) ) {
	function euterpiaradio_4_create_chart_posttype() {
		register_post_type( 'charts',
			[
				'labels'       => [
					'name'          => __( 'Charts' ),
					'singular_name' => __( 'Chart' )
				],
				'supports'     => array( 'title', 'editor', 'wpcom-markdown' ),
				'public'       => true,
				'has_archive'  => true,
				'rewrite'      => [ 'slug' => 'charts' ],
				'show_in_rest' => true,
			]
		);
	}
}

add_action( 'init', 'euterpiaradio_4_create_chart_posttype' );