<?php
/**
 * File Name: tech_skills.php
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
            <div class="container">
                <div id="wp-bar" class="skills wp"></div>
            </div>
            <div class="container">
                <div id="joo-bar" class="skills joo"></div>
            </div>
            <div class="container">
                <div id="dj-bar" class="skills dj"></div>
            </div>
            <div class="container">
                <div id="crud-bar" class="skills crud"></div>
            </div>
            <div class="container">
                <div id="iot-bar" class="skills iot"></div>
            </div>
            <div class="container">
                <div id="gimp-bar" class="skills gimp"></div>
            </div>
            <div class="container">
                <div id="off-bar" class="skills off"></div>
            </div>
            <div class="container">
                <div id="gis-bar" class="skills gis"></div>
            </div>
            <div class="container">
                <div id="gmc-bar" class="skills gmc"></div>
            </div>
        </div>
    </div>
    <div class="col-6 col-t-6">
        <div class="row">
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_cms_wp, 'ipanema-cv-csg'); ?>">    
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'WordPress', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/wp_min.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_cms_joo, 'ipanema-cv-csg'); ?>">
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'Joomla', 'ipanema-cv-csg' ); ?>" 
                             src="<?php echo plugins_url( '../images/testimonials/joo_min.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_django, 'ipanema-cv-csg'); ?>">    
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'Django', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/django.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-6 col-t-6">
                <!-- buit -->
            </div>
        </div>
        <div class="row">
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <img class="tech-img"
                         alt="<?php esc_html_e( 'Create, Read, Update & Delete', 'ipanema-cv-csg' ); ?>" 
                         src="<?php echo plugins_url( '../images/testimonials/crud.png', __FILE__ ); ?>" />
                </div>
            </div>
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_get_php, 'ipanema-cv-csg'); ?>">
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'PHP & MySQL', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/php_mysql.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_get_boots, 'ipanema-cv-csg'); ?>">    
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'Bootstrap', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/boots_min.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <img class="tech-img"
                         alt="<?php esc_html_e( 'HTML5', 'ipanema-cv-csg' ); ?>" 
                         src="<?php echo plugins_url( '../images/testimonials/html5_min.png', __FILE__ ); ?>" />
                </div>
            </div>
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <img class="tech-img"
                         alt="<?php esc_html_e( 'CSS3', 'ipanema-cv-csg' ); ?>" 
                         src="<?php echo plugins_url( '../images/testimonials/css3_min.png', __FILE__ ); ?>" />
                </div>
            </div>
            <div class="col-2 col-t-2">
                <!-- buit -->
            </div>
        </div>
        <div class="row">
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_iot, 'ipanema-cv-csg'); ?>">    
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'Internet of Things', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/iot.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>    
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_nodered, 'ipanema-cv-csg'); ?>">    
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'Node-RED', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/nodered_min.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_ubidots, 'ipanema-cv-csg'); ?>">
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'Ubidots', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/ubidots_min.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-6 col-t-6">
                <!-- buit -->
            </div>
        </div>
        <div class="row">
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_gimp, 'ipanema-cv-csg'); ?>">    
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'GIMP', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/gimp_min.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>  
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_off, 'ipanema-cv-csg'); ?>">
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'Microsoft Office', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/office_min.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <img class="tech-img"
                         alt="<?php esc_html_e( 'GIS', 'ipanema-cv-csg' ); ?>"
                         src="<?php echo plugins_url( '../images/testimonials/gis_min.png', __FILE__ ); ?>" />
                </div>
            </div>
            <div class="col-6 col-t-6">
                <!-- buit -->
            </div>
        </div>
        <div class="row">
            <div class="col-2 col-t-2">
                <div class="tech-testimonial">
                    <a class="no-shadow" 
                       target="_blank"
                       href="<?php esc_html_e( $url_gimp, 'ipanema-cv-csg'); ?>">    
                        <img class="tech-img"
                             alt="<?php esc_html_e( 'Google Merchant Center', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/gmc_min.png', __FILE__ ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-10 col-t-10">
                <!-- buit -->
            </div>
        </div>
    </div>
</div>