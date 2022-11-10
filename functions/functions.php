<?php
/**
 * File Name: functions.php
 * Folder Path: /include/functions
 * Plugin Name : Ipanema CV CSG
 * 
 * 
 **/

add_filter( 'the_generator', 'icv_hdr_generator_filter', 10, 2 );

function icv_hdr_generator_filter ( $html, $type ) {
	if ( $type == 'xhtml' ) {
		$html = preg_replace( '("WordPress.*?")', '"Ipanema CV CSG 1.0"', $html );
	}
    
	return $html;
}
