<?php
/**
 * Enqueue scripts and styles.
 */
function cafinitybs4_scripts() {
	wp_enqueue_style( 'Cafinitybs4-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0' );

        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '3.2.1', true );

        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0.0', true );

        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '4.4.5.', true );

	    wp_enqueue_script( 'Cafinitybs4-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cafinitybs4_scripts' );