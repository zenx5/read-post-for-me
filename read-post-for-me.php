<?php

/**
 * @package read-post-for-me
 * @version 1.0.0
 */
/*
Plugin Name: Read Post For Me by Kavav
Plugin URI: https://kavavdigital.com
Description: ...
Author: Octavio Martinez
Version: 1.0.0
Author URI: https://wa.me/58
*/

require 'classes/class-read-post.php';

register_activation_hook(__FILE__, array('ReadPost', 'active'));
register_deactivation_hook(__FILE__, array('ReadPost', 'deactive'));
add_action('init', array('ReadPost', 'init'));