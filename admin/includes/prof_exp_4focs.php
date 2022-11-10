<?php
/**
 * File Name: prof_exp_4focs.php
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
            <p class="info-prof-exp"><?php esc_html_e( 'June 2014 - December 2017', 'ipanema-cv-csg' ); ?></p>
            <p class="info-prof-exp"><?php esc_html_e( 'Cornellà del Terri', 'ipanema-cv-csg' ); ?></p>
        </Div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <p class="info-prof-exp"><?php esc_html_e( 'Restaurant 4 Focs', 'ipanema-cv-csg' ); ?></p>
            <a class="no-shadow" 
               target="_blank"
               href="<?php esc_html_e( $url_4focs, 'ipanema-cv-csg'); ?>">
                <img class="prf_4focs" 
                     alt="<?php esc_html_e( 'Restaurant 4 Focs', 'ipanema-cv-csg' ); ?>"                    
                     src="<?php echo plugins_url( '../images/companies/4focs.png', __FILE__ ); ?>" />
            </a>
        </div>
    </div>
    <div class="col-4 col-t-4">
        <div class="item">
            <ul class="tasks">
                <li><strong>
                    <?php esc_html_e( 'Greeted, seated, and served customers in the dining room and terrace', 'ipanema-cv-csg' ); ?>
                    </strong>
                    </li>    
                <li><strong>
                    <?php esc_html_e( 'Shared and explained specials to guests', 'ipanema-cv-csg' ); ?>
                    </strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'Took food orders and drink orders from customers as needed', 'ipanema-cv-csg' ); ?></li>
                    </ul>
                </li>
                <li><strong>
                    <?php esc_html_e( 'Wine pairing suggestion', 'ipanema-cv-csg' ); ?>
                    </strong>
                </li>
                <li><strong>
                    <?php esc_html_e( 'Teamwork', 'ipanema-cv-csg' ); ?>
                    </strong>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">   
                        <img class="img-testimonial"
                             alt="<?php esc_html_e( 'Multi-Tasking', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/task_min.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Multi-Tasking', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#multitasking', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#focus', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">    
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'Wine Culture', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/wine_min.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Wine Culture', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#wine', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#culture', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#history', 'ipanema-cv-csg' ); ?>
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