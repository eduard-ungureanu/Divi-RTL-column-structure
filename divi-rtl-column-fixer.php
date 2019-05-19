<?php
/**
* Plugin Name: Divi RTL Column Fixer
* Plugin URI: https://divi.tech/
* Description: A plugin which fixes the RTL column structure
* Version: 1.0
* Author: Ungureanu Eduard
* Author URI: https://divi.tech/
**/



function enqueue_my_styles(){
    if ( is_rtl() ) {
        wp_enqueue_style('dt-rtl-columns-fix', plugin_dir_url( __FILE__ ) . 'css/dt-rtl.css' );
    }
}

add_action('get_footer','enqueue_my_styles', 9999);