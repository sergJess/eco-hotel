<?php

function eco_hotel_scripts() {
    // Theme stylesheet.
    wp_enqueue_style( 'main-style', get_template_directory() . '/css/style.css' );
			 wp_enqueue_style( 'swiper-style', get_template_directory() . '/css/swiper-bundle.min.css' );
				wp_enqueue_style( 'pop-up-store-style', get_template_directory() . '/css/pop-up-store.css' );
				
}
add_action( 'wp_enqueue_scripts', 'eco_hotel_scripts' );
?>