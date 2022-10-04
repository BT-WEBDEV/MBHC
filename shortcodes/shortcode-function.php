<?php

// Testimonials
function gka_testimonials() {
    $html = get_template_part( 'shortcodes/sections/testimonials' );
    return $html;
} 
add_shortcode('gka_testimonials', 'gka_testimonials');


// Portfolio
function gka_portfolio() {
    $html = get_template_part( 'shortcodes/sections/portfolio' );
    return $html;
} 
add_shortcode('gka_portfolio', 'gka_portfolio');