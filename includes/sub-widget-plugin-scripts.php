<?php
//Add scripts
function swp_add_scripts(){
// Add Main CSS
wp_enqueue_style('swp_main_style', plugins_url(). '/sub-widget-plugin/css/style.css');
//Add Main JS
wp_enqueue_script('swp_main_script', plugins_url(). '/sub-widget-plugin/js/main.js');

//Register Scripts
wp_register_script('google', 'https://apis.google.com/js/platform.js');
wp_enqueue_script('google');
}
add_action('wp_enqueue_scripts', 'swp_add_scripts');
?>