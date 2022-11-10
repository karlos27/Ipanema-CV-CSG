<?php
/**
 * File Name: prof_exp_icon.php
 * Folder Path: /admin/includes
 * Plugin Name : Ipanema CV CSG
 * 
 *  Resources:
 * 
 * 
 **/

require __DIR__ . '/icv_config.php';

?>

<div class="row tothetop montserrat">
    <div class="col-2 col-t-2">
        <div class="item">
            <p class="info-prof-exp"><?php esc_html_e( 'October 2017', 'ipanema-cv-csg' ); ?></p>
            <p class="info-prof-exp"><?php esc_html_e( 'Figueres', 'ipanema-cv-csg' ); ?></p>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <p class="info-prof-exp"><?php esc_html_e( 'ICON, SL', 'ipanema-cv-csg' ); ?></p>
            <a class="no-shadow" 
               target="_blank"
               href="<?php esc_html_e( $url_icon, 'ipanema-cv-csg'); ?>">
                <img class="logos" 
                     alt="<?php esc_html_e( 'ICON logo', 'ipanema-cv-csg' ); ?>"                     
                     src="<?php echo plugins_url( '../images/companies/iconsl.png', __FILE__ ); ?>" />
            </a>
        </div>
    </div>
    <div class="col-4 col-t-4">
        <div class="item">
            <ul class="tasks">
                <li><strong>
                    <?php esc_html_e( 'WordPress Website Development', 'ipanema-cv-csg' ); ?>
                    </strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'HTML5 & CSS3', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Basic GIMP', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Business Skills', 'ipanema-cv-csg' ); ?></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">
                        <a class="no-shadow" 
                           target="_blank"
                           href="<?php esc_html_e( $url_cms_wp, 'ipanema-cv-csg'); ?>">    
                            <img class="img-testimonial" 
                                 alt="<?php esc_html_e( 'WordPress', 'ipanema-cv-csg' ); ?>"
                                 src="<?php echo plugins_url( '../images/testimonials/wp_min.png', __FILE__ ); ?>" />
                        </a>
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'WordPress', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#wordpress', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#cms', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#webdesign ', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">   
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'HTML5 & CSS3', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/html_css.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'HTML5 & CSS3', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#HTML5', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#CSS3', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#webdesign', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">
                        <a class="no-shadow" 
                           target="_blank"
                           href="<?php esc_html_e( $url_gimp, 'ipanema-cv-csg'); ?>">    
                            <img class="img-testimonial" 
                                 alt="<?php esc_html_e( 'GIMP', 'ipanema-cv-csg' ); ?>"
                                 src="<?php echo plugins_url( '../images/testimonials/gimp.png', __FILE__ ); ?>" />
                        </a>
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'GIMP', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#gimp', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#design', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#creative', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">   
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'Business Skills', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/chart.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Business Skills', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#business', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#branding', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
