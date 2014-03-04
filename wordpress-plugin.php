<?php
/*
	Plugin Name: Wordpress Plugin
	Description: Sample Wordpress Plugin
	Plugin URI: https://github.com/buzzfishmedia/wordpress-plugin
	Author: Frank McCoy
	Author URI: http://github.com/fmccoy/
	License: GNU General Public License v2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
	Version: 0.0.1
	Text Domain: wordpress-plugin
*/

if( defined('WP_COMPOSER') and WP_COMPOSER == false ){
	// Fallback files here...
}

/**
 * Define Constants
 */
//define( 'SAMPLEWORDPRESSPLUGIN_DIR', dirname( __FILE__ ) );
//define( 'SAMPLEWORDPRESSPLUGIN_URL', WP_PLUGIN_URL . '/wordpress-plugin' );


/**
 * Add Plugin page to menu
 * 
 * @uses WordPress\AddMenuPage()
 * @package wordpress-plugin
 */
if ( class_exists( 'WordPress\AddMenuPage') ) :

	$page = array( 'parent_slug' => 'tools.php' );
	$sections = $sections = array( array( 'title' => 'Section 1' ) );
	$fields = array(
		array(
			'title' => 'Field 1',
			'type' => 'text',
			'section' => 'Section 1'
			)
	);

	$samplewp = new WordPress\AddMenuPage( 'Sample Wordpress Plugin', $page );
	$samplewp->setSections($sections);
	$samplewp->setFields($fields);

endif;



    