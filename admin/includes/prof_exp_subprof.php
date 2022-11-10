<?php
/**
 * File Name: prof_exp_subprof.php
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
            <p class="info-prof-exp"><?php esc_html_e( 'November 2017 - June 2018', 'ipanema-cv-csg' ); ?></p>
            <p class="info-prof-exp"><?php esc_html_e( 'Cassà de la Selva', 'ipanema-cv-csg' ); ?></p>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <p class="info-prof-exp"><?php esc_html_e( 'Subprof, SL', 'ipanema-cv-csg' ); ?></p>
            <img class="logos" 
                 alt="<?php esc_html_e( 'Subprof logo', 'ipanema-cv-csg' ); ?>" 
                 src="<?php echo plugins_url( '../images/companies/subprof.png', __FILE__ ); ?>" />
        </div>
    </div>
    <div class="col-4 col-t-4">
        <div class="item">
            <ul class="tasks">
                <li><strong>
                    <?php esc_html_e( 'Set up Google Merchant Center.', 'ipanema-cv-csg' ); ?>
                    </strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'Follow the product data specification', 'ipanema-cv-csg' ); ?></li></ul>
                </li>
                <li><strong>
                    <?php esc_html_e( 'Online store stock management.', 'ipanema-cv-csg' ); ?></strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'Photo editing with GIMP', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Product characteristics', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Database management', 'ipanema-cv-csg' ); ?></li>
                    </ul>
                </li>
                <li><strong>
                    <?php esc_html_e( 'CSS animations/effects in Christmas period. ', 'ipanema-cv-csg' ); ?></strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'Create a holiday mood', 'ipanema-cv-csg' ); ?></li>
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
                        <a class="no-shadow" 
                           target="_blank"
                           href="<?php esc_html_e( $url_gmc, 'ipanema-cv-csg'); ?>">
                            <img class="img-testimonial"
                                 alt="<?php esc_html_e( 'Google Merchant Center', 'ipanema-cv-csg' ); ?>" 
                                 src="<?php echo plugins_url( '../images/testimonials/gmc_min.png', __FILE__ ); ?>" />
                        </a>
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'G Merchant Center', 'ipanema-cv-csg' ); ?></strong>
                            </span>
                            <br>
                            <span class="hashtag">
                                <?php esc_html_e( '#googlemerchant', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>                
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'CSS3', 'ipanema-cv-csg' ); ?>" 
                             src="<?php echo plugins_url( '../images/testimonials/css3_min.png', __FILE__ ); ?>" />
                        <div class="carousel-css testimonial-title-top">
                            <h4 id="css-title">
                                <span><strong><?php esc_html_e( 'Let\'s play&nbsp;', 'ipanema-cv-csg' ); ?></strong></span>
                                <div>
                                    <ul class="flip">
                                        <li><strong><?php esc_html_e( 'music', 'ipanema-cv-csg' ); ?></strong></li>
                                        <li><strong><?php esc_html_e( 'sports', 'ipanema-cv-csg' ); ?></strong></li>
                                        <li><strong><?php esc_html_e( 'snap', 'ipanema-cv-csg' ); ?></strong></li>
                                        <li><strong><?php esc_html_e( 'theatre', 'ipanema-cv-csg' ); ?></strong></li>
                                        <li><strong><?php esc_html_e( 'bingo', 'ipanema-cv-csg' ); ?></strong></li>
                                    </ul>
                                </div>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>                   
        </div>
    </div>
</div>