<?php
/**
 * File Name: prof_exp_matic.php
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
            <p class="info-prof-exp"><?php esc_html_e( 'July 2018 - August 2020', 'ipanema-cv-csg' ); ?></p>
            <p class="info-prof-exp"><?php esc_html_e( 'Girona', 'ipanema-cv-csg' ); ?></p>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <p class="info-prof-exp"><?php esc_html_e( 'Ingreda System, SL', 'ipanema-cv-csg' ); ?></p>
            <a class="no-shadow" 
               target="_blank"
               href="<?php esc_html_e( $url_matic, 'ipanema-cv-csg'); ?>">
                <img class="logos"
                     alt="<?php esc_html_e( 'Matic logo', 'ipanema-cv-csg' ); ?>" 
                     src="<?php echo plugins_url( '../images/companies/matic.png', __FILE__ ); ?>" />
            </a>
        </div>
    </div>
    <div class="col-4 col-t-4">
        <div class="item">
            <ul class="tasks">
                <li><strong>
                    <?php esc_html_e( 'Install, set up and maintain web pages', 'ipanema-cv-csg' ); ?></strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'WP plugins', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'e-commerce (woocommerce)', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Copywriting', 'ipanema-cv-csg' ); ?></li>
                    </ul></li>
                <li><strong>
                    <?php esc_html_e( 'CRUD applications development:', 'ipanema-cv-csg' ); ?></strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'User synchronization', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Random gift for user registration', 'ipanema-cv-csg' ); ?></li>
                    </ul>
                </li>
                <li><strong>
                    <?php esc_html_e( 'Customer service and support', 'ipanema-cv-csg' ); ?>
                    </strong></li>
                <li><strong>
                    <?php esc_html_e( 'Teamwork', 'ipanema-cv-csg' ); ?>
                    </strong></li>
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
                           href="<?php esc_html_e( $url_cms_joo, 'ipanema-cv-csg'); ?>">
                            <img class="img-testimonial"
                                 alt="<?php esc_html_e( 'Joomla', 'ipanema-cv-csg' ); ?>" 
                                 src="<?php echo plugins_url( '../images/testimonials/joo_min.png', __FILE__ ); ?>" />
                        </a>
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Joomla', 'ipanema-cv-csg' ); ?></strong>
                            </span>
                            <br>
                            <span class="hashtag">
                                <?php esc_html_e( '#joomla', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#cms', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#webdevelopment', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>                
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'Create, Read, Update & Delete', 'ipanema-cv-csg' ); ?>" 
                             src="<?php echo plugins_url( '../images/testimonials/crud_min.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'CRUD', 'ipanema-cv-csg' ); ?></strong>
                            </span>
                            <br>
                            <span class="hashtag">
                                <?php esc_html_e( '#php', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#mysql', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#javascript', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial"> 
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'Customer service', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/support_min.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Customer service', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#customerservice', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">    
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'Teamwork', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/teamwork.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Teamwork', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#teamwork', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#success', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>                
            </div>                    
        </div>
    </div>
</div>
        