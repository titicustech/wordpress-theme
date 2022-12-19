<?php
if ( ! function_exists( 'twotest_setup' ) ) :
function twotest_setup()
{
    # code...
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', '' ),
		)
	);
add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'html5', array( 'style','script' ) );
add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
endif;
?>
