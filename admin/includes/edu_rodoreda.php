<?php
/**
 * File Name: edu_rodoreda.php
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
    <div class="col-2 col-t-2">
        <div class="item">
            <p class="info-edu"><?php esc_html_e( 'June 2006', 'ipanema-cv-csg' ); ?></p>
            <p class="info-edu"><?php esc_html_e( 'L\'Hospitalet del Llobregat', 'ipanema-cv-csg' ); ?></p>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <p class="info-edu"><?php esc_html_e( 'Mercè Rodoreda Secondary School', 'ipanema-cv-csg' ); ?></p>
            <a class="no-shadow" 
               target="_blank"
               href="<?php esc_html_e( $url_ins, 'ipanema-cv-csg'); ?>">
                <img class="logos" 
                     alt="<?php esc_html_e( 'Mercè Rodoreda Secondary School', 'ipanema-cv-csg' ); ?>" 
                     src="<?php echo plugins_url( '../images/schools/m_rodoreda_min.png', __FILE__ ); ?>" />
            </a>
        </div>
    </div>
    <div class="col-4 col-t-4">
        <div class="item">
            <ul class="tasks">
                <li><strong>
                    <?php esc_html_e( 'Air quality analysis', 'ipanema-cv-csg' ); ?>
                    </strong>
                </li>
                <li><strong>
                    <?php esc_html_e( 'Water quality analysis', 'ipanema-cv-csg' ); ?>
                    </strong>
                </li>
                <li><strong>
                    <?php esc_html_e( 'Soil quality analysis', 'ipanema-cv-csg' ); ?>
                    </strong>
                </li>
                <li><strong>
                    <?php esc_html_e( 'Microbiology', 'ipanema-cv-csg' ); ?>
                    </strong>
                </li>
                <li><strong>
                    <?php esc_html_e( 'Safe Lab practices', 'ipanema-cv-csg' ); ?>
                    </strong>
                </li>
                <li><strong>
                    <?php esc_html_e( 'Office productivity software', 'ipanema-cv-csg' ); ?>
                    </strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'Microsoft Word', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Microsoft Excel', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Microsoft Access', 'ipanema-cv-csg' ); ?></li>
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
                        <a class="no-shadow" 
                           target="_blank"
                           href="<?php esc_html_e( $url_off, 'ipanema-cv-csg'); ?>">    
                            <img class="img-testimonial" 
                                 alt="<?php esc_html_e( 'Microsoft Office', 'ipanema-cv-csg' ); ?>"
                                 src="<?php echo plugins_url( '../images/testimonials/office_min.png', __FILE__ ); ?>" />
                        </a>
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Microsoft Office', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#word', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#excel', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#access', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>