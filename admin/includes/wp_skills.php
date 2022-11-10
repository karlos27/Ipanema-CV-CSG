<?php
/**
 * File Name: wp_skills.php
 * Folder Path: /admin/includes
 * Plugin Name : Ipanema CV CSG
 * 
 * Resources:
 * 
 * 
 **/

require __DIR__ . '/icv_config.php';

?>

<div class="row tothetop montserrat">
    <div class="col-6 col-t-6">
        <div class="item">
            <div class="row">
                <div class="col-12 col-t-12">
                    <a class="no-shadow" 
                        target="_blank"
                        href="<?php esc_html_e( $url_ifr, 'ipanema-cv-csg'); ?>">
                        <img class="plugins_img"  
                             alt="<?php esc_html_e( 'Ipanema Film Reviews', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/plugins/film_reviews.png', __FILE__ ); ?>" /></a>
                </div>
                <div class="col-4 col-t-4"></div>
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <p class="plugin_resume">
                        <?php esc_html_e( 'This plugin lets you add a film review system to your WordPress site. 
                                            Using custom post types, administrators will be able to 
                                            create and edit film reviews to be published on your site.', 'ipanema-cv-csg' );?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-t-6">
    <div class="item">
            <div class="row">
                <div class="col-12 col-t-12">
                    <a class="no-shadow" 
                        target="_blank"
                        href="<?php esc_html_e( $url_itf, 'ipanema-cv-csg'); ?>">
                        <img class="plugins_img"    
                             alt="<?php esc_html_e( 'Ipanema Twitter Feed', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/plugins/twitter_feed.png', __FILE__ ); ?>" /></a>
                </div>
                <div class="col-4 col-t-4"></div>
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <p class="plugin_resume">
                        <?php esc_html_e( 'This plugin lets you add various twitter feeds into your WordPress site. 
                                            Using a shortcode, administrators will be able to add twitter feeds 
                                            in any page or post.', 'ipanema-cv-csg' );?>
                    </p>
                </div>
            </div>
        </div>
    </div>        
</div>