<?php
/**
 * Plugin Name: Contrib & Custom plugins
 * Plugin URI:  https://github.com/fariasf/contrib-custom-plugins
 * Description: Keep custom and third-party plugins separate in their own folder
 * Version:     0.0.1
 * Author:      Facundo Farias
 * Author URI:  https://facundofarias.com
 * Text Domain: contrib-custom-plugins
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_filter( 'all_plugins', 'contrib_custom_plugins_all_plugins' );
function contrib_custom_plugins_all_plugins( $plugins ) {
	$prefix = WP_PLUGIN_DIR === untrailingslashit( WP_PLUGIN_DIR ) ? '/' : '';
	$contrib = get_plugins( $prefix . 'contrib' );
	$custom = get_plugins( $prefix . 'custom' );
	return array_merge( $plugins, $contrib, $custom );
}

register_theme_directory( 'contrib' );
register_theme_directory( 'custom' );