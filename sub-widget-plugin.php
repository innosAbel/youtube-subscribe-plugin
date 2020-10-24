<?php
/*
Plugin name: YouTube Subscribe Widget
Plugin URI: https://github.com/innosAbel
Description: Display youtube subscribe as a widget button count
Version: 1.0.0
Author: Innos Abel Tamara
Author URI: https://github.com/innosAbel
*/

//Exit if accessed directly
if (!defined('ABSPATH')){
    exit;
}

//Load scripts
require_once(plugin_dir_path(__FILE__). '/includes/sub-widget-plugin-scripts.php');
//Load class
require_once(plugin_dir_path(__FILE__). '/includes/sub-widget-plugin-class.php');

//Register widgets
function register_swp_widgets(){
    register_widget('Youtube_swp_Widget');
}

//Hook in function
add_action('widgets_init', 'register_swp_widgets');

