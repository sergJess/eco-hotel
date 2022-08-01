<?php

function eco_hotel_scripts() {
    // Theme stylesheet.
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css' );
			 wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/css/swiper-bundle.min.css' );
				wp_enqueue_style( 'pop-up-store-style', get_template_directory_uri() . '/css/pop-up-store.css' );
				//scripts js style

				wp_enqueue_script( 'anime-min-js',	get_template_directory_uri() . '/js/anime.min.js', array(), null, true);
				wp_enqueue_script( 'swiper-bundle-min-js',	get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);
				wp_enqueue_script( 'script-js',	get_template_directory_uri() . '/js/script.js', array(), null, true);
				wp_enqueue_script( 'pop-up-store-js',	get_template_directory_uri() . '/js/pop-up-store.js', array(), null, true);
				wp_enqueue_script( 'pop-up-submit-js',	get_template_directory_uri() . '/js/pop-up-submit.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'eco_hotel_scripts' );
?>