<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Hexa
 */

function hexa_jetpack_setup() {
	/**
	 * Add theme support for Infinite Scroll.
	 * See: http://jetpack.me/support/infinite-scroll/
	 */
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'content',
	) );

	/**
	 * Add theme support for Responsive Videos.
	 */
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'hexa_jetpack_setup' );
