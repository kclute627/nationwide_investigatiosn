<?php


function load_styles(){
    wp_enqueue_style("tailwind_style_css", get_theme_file_uri("/dist/output.css"));
     wp_enqueue_style("othercss", get_theme_file_uri("/src/otherCss.css"));
}

function load_scripts(){
     wp_enqueue_script( 'mainJS', get_template_directory_uri().'/src/main.js', array(), '1.0', true );
     wp_enqueue_script( 'aos', get_template_directory_uri().'/src/animateOnScroll.js', array(), '1.0', true );

}
function custom_enqueue_google_maps() {
    // Adjust the condition to match when you want the script to load.
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyClHJVCnamkIsMqwW2W2D0NU9nJHEhBQds&callback=initMap', array(), null, true);
  
}
add_action('wp_enqueue_scripts', 'custom_enqueue_google_maps');

add_action("wp_enqueue_scripts", "load_styles"); 
add_action("wp_enqueue_scripts", "load_scripts"); 