<?php
/**
 * Plugin Name:     WP Embeddables
 * Plugin URI:      https://github.com/JosephusPaye/wp-embeddables
 * Description:     Create and embed any content from your WordPress site into posts, pages, or other sites.
 * Author:          Josephus Paye II
 * Author URI:      https://twitter.com/JosephusPaye
 * Text Domain:     wp-embeddables
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wp_Embeddables
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

require(plugin_dir_path(__FILE__) . 'php/setup.php');
