<?php
/*
Plugin Name: DW Replace Open Sans
Plugin URI: http://devework.com/replace-open-sans.html
Description: 将WordPress 后台中的open-sans字体加载源从Google Fonts替换为360的CDN加载源。
Author: Jeff
Author URI: http://devework.com/
Version: 1.1
Text Domain: dw-replace-open-sans
@Thanks: https://gist.github.com/MikeNGarrett/8462474#
*/

function devework_replace_open_sans() {
	wp_deregister_style('open-sans');
	wp_register_style( 'open-sans', '//fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,300,400,600' );
	wp_enqueue_style( 'open-sans');
		wp_register_style( 'open-sans-css', '//fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,300,400,600' );
	wp_enqueue_style( 'open-sans-css');
}
//前台加载，看需要注释之；
add_action( 'wp_enqueue_scripts', 'devework_replace_open_sans' );
//后台加载，应该都需要的了
add_action('admin_enqueue_scripts', 'devework_replace_open_sans');
//登陆页面加载，貌似不工作
add_action( 'login_enqueue_scripts', 'devework_replace_open_sans', 1);
?>