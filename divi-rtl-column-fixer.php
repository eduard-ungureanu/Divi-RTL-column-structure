<?php
/**
* Plugin Name: Divi RTL Column Fixer
* Plugin URI: https://divi.tech/
* Description: A plugin which fixes the RTL column structure
* Version: 1.0
* Author: Ungureanu Eduard
* Author URI: https://divi.tech/
**/


function dt_load_rtl_styles(){
	wp_enqueue_style( 'dt-rtl-columns-fix', '/css/dt-rtl.css' );
}

if (is_rtl()){
	add_action( 'get_footer', 'dt_load_rtl_styles' );
}