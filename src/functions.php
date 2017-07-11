<?php

function borabora_setup() {

	load_theme_textdomain( 'borabora' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 825, 510, true );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'borabora' ),
		'social'  => __( 'Social Links Menu', 'borabora' ),
        'special' => __( 'Special Links Menu', 'borabora' )
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
}

add_action( 'after_setup_theme', 'borabora_setup' );

function borabora_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'borabora' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'borabora' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'borabora_widgets_init' );

function borabora_scripts() {
    wp_enqueue_style( 'external-style', get_template_directory_uri() . '/css/external.css' );
    wp_enqueue_style( 'form-styler-style', 'https://cdn.jsdelivr.net/jquery.formstyler/1.7.8/jquery.formstyler.css', array( 'external-style' ) );
    wp_enqueue_style( 'borabora-style', get_stylesheet_uri(), array( 'external-style' ) );

	wp_enqueue_style( 'borabora-ie', get_template_directory_uri() . '/css/ie.css', array( 'borabora-style' ), '20141010' );
	wp_style_add_data( 'borabora-ie', 'conditional', 'lt IE 9' );

	wp_enqueue_style( 'borabora-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'borabora-style' ), '20141010' );
	wp_style_add_data( 'borabora-ie7', 'conditional', 'lt IE 8' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'external-scripts', get_template_directory_uri() . '/js/external.js', array( 'jquery' ), true);
    wp_enqueue_script( 'external-scripts' );

    wp_register_script( 'form-styler-scripts', 'https://cdn.jsdelivr.net/jquery.formstyler/1.7.8/jquery.formstyler.min.js', array( 'external-scripts' ), true);
    wp_enqueue_script( 'form-styler-scripts' );

    wp_register_script( 'internal-scripts', get_template_directory_uri() . '/js/internal.js', array( 'external-scripts' ), true);
    wp_enqueue_script( 'internal-scripts' );

}
add_action( 'wp_enqueue_scripts', 'borabora_scripts' );


require get_template_directory() . '/inc/customizer.php';
