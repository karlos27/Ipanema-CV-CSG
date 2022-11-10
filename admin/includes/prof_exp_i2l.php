<?php
/**
 * File Name: prof_exp_i2l.php
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
            <p class="info-prof-exp"><?php esc_html_e( 'September 2022 - Present', 'ipanema-cv-csg' ); ?></p>
            <p class="info-prof-exp"><?php esc_html_e( 'Cornellà del Terri', 'ipanema-cv-csg' ); ?></p>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <p class="info-prof-exp"><?php esc_html_e( 'i2L Research', 'ipanema-cv-csg' ); ?></p>
            <a class="no-shadow" 
               target="_blank"
               href="<?php esc_html_e( $url_i2l, 'ipanema-cv-csg'); ?>">
                <img class="prf_i2l"
                     alt="<?php esc_html_e( 'I2L Research', 'ipanema-cv-csg' ); ?>" 
                     src="<?php echo plugins_url( '../images/companies/i2l.png', __FILE__ ); ?>" />
            </a>
        </div>
    </div>
    <div class="col-4 col-t-4">
        <div class="item">
            <ul class="tasks">
                <li><strong>
                    <?php esc_html_e( 'Polytunnel nursery', 'ipanema-cv-csg' ); ?></strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'Proper food plant care and treatment', 'ipanema-cv-csg' ); ?></li>
                    </ul></li>
                <li><strong>
                    <?php esc_html_e( 'Efficacy trials', 'ipanema-cv-csg' ); ?></strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'Design and implementation of efficacy trials of phytosanitary products and biocides', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Field work with plants, insects, chemical and biological applications combined with office and laboratory work', 'ipanema-cv-csg' ); ?></li>
                    </ul>
                </li>
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
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'Lab', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/lab.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Lab', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#lab', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#science', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">    
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'Agriculture', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/plants.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Agriculture', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#agriculture', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#phytosanitary', 'ipanema-cv-csg' ); ?>
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
        