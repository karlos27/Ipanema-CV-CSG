<?php
/**
 * Plugin Name: Ipanema CV CSG
 * Plugin URI: https://github.com/karlos27
 * Description: El meu curriculum vitae en format plugin. Espero que us agradi!
 * Author: segcgonz
 * Author URI: https://github.com/karlos27
 * Version: 1.0
 * Requires at least: 6.0
 * Tested up to: 6.1
 * Requires PHP: 7.0
 * Text Domain: ipanema-cv-csg
 * Domain Path: /languages
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


// Surt si s'hi accedeix directament
defined( 'ABSPATH' ) or die;


define( 'is_ipanema_cvcsg_admin', 1 );
define('ICV_TRANSLATION_TEXTDOMAIN', 'ipanema-cv-csg');


add_action( 'init', 'icv_mn_plugin_internationalization' );
function icv_mn_plugin_internationalization() {
	$locale = apply_filters( 'plugin_locale', get_locale(), ICV_TRANSLATION_TEXTDOMAIN );

	// Busca la Traducció a /wp-content/languages/plugin/
	if (file_exists( trailingslashit( WP_LANG_DIR ) . 'plugins' . ICV_TRANSLATION_TEXTDOMAIN . '-' . $locale . '.mo' ) ) {
		load_plugin_textdomain( ICV_TRANSLATION_TEXTDOMAIN, false, trailingslashit( WP_LANG_DIR ) );
	}
	// Busca la Traducció a /wp-content/languages/
	elseif (file_exists( trailingslashit( WP_LANG_DIR ) . ICV_TRANSLATION_TEXTDOMAIN . '-' . $locale . '.mo' ) ) {
		load_textdomain( ICV_TRANSLATION_TEXTDOMAIN, trailingslashit( WP_LANG_DIR ) . ICV_TRANSLATION_TEXTDOMAIN . '-' . $locale . '.mo' );
	// Busca la Traducció a /wp-content/plugins/ipanema-film-reviews/languages/
	} else {
		load_plugin_textdomain( ICV_TRANSLATION_TEXTDOMAIN, false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}

if ( is_admin() ) {
    // si és mode admin
    require_once __DIR__ . '/admin/ipanema-cv-csg-admin.php';
}
// Si és possible, modifica l'etiqueta meta generator (header)
include plugin_dir_path( __FILE__ ) . 'functions/functions.php';


/****************************************************************************
 * 
 * Thanks to:
 * Yannick Lefebvre  
 * Wordpress.org (Review team)
 * 
 * Sources:
 * WordPress Plugin Development CookBook (Second edition)
 * How to Internationalize Your Plugin (Plugin HandBook)
 * Plugin Readmes (Plugin HandBook)
 * Securing - Sanitizing / Escaping (Plugin HandBook)
 * TortoiseSVN (Support)
 * 
 ****************************************************************************/