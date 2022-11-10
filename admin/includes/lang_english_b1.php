<?php
/**
 * File Name: lang_english_b1.php
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
            <p class="info-edu"><?php esc_html_e( 'June 2022', 'ipanema-cv-csg' ); ?></p>
            <p class="info-edu"><?php esc_html_e( 'Banyoles', 'ipanema-cv-csg' ); ?></p>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <p class="info-edu"><?php esc_html_e( 'EOI Banyoles', 'ipanema-cv-csg' ); ?></p>
            <a class="no-shadow"
               target="_blank"
               href="<?php esc_html_e( $url_eoi, 'ipanema-cv-csg'); ?>">
                <img class="lg_eoi" 
                     alt="<?php esc_html_e( 'EOI Banyoles', 'ipanema-cv-csg' ); ?>" 
                     src="<?php echo plugins_url( '../images/languages/eoi_banyoles_min.png', __FILE__ ); ?>" />
            </a>
        </div>
    </div>
    <div class="col-4 col-t-4">
        <div class="item">
            <ul class="tasks">
                <li><strong>
                    <?php esc_html_e( 'According to the Common European Framework of Reference for Languages (CEFR) guidelines:', 'ipanema-cv-csg' ); ?>
                    </strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'Can understand the main points of clear standard input on familiar matters regularly encountered in work, school, leisure, etc', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Can deal with most situations likely to arise while traveling in an area where the language is spoken', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Can produce simple connected text on topics that are familiar or of personal interest', 'ipanema-cv-csg' ); ?></li>
                    </ul>
                </li>
                <li>
                    <a class="no-link-in-black"
                        target="_blank"
                        href="<?php esc_html_e( $url_cefr, 'ipanema-cv-csg'); ?>">
                        <i class="fa-solid fa-link"></i>
                        <?php esc_html_e( 'CEFR Guidelines', 'ipanema-cv-csg' ); ?>
                    </a></li>
            </ul>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">   
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'Languages', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/eng.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Languages', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#languages', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#english', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="testimonial">   
                        <img class="img-testimonial" 
                             alt="<?php esc_html_e( 'Communication', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/testimonials/lang.png', __FILE__ ); ?>" />
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Communication', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#communication', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

