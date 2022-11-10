<?php
/**
 * File Name: edu_adams.php
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
            <p class="info-edu"><?php esc_html_e( 'October 2017', 'ipanema-cv-csg' ); ?></p>
            <p class="info-edu"><?php esc_html_e( 'Girona', 'ipanema-cv-csg' ); ?></p>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="item">
            <p class="info-edu"><?php esc_html_e( 'Adams Girona', 'ipanema-cv-csg' ); ?></p>
            <a class="no-shadow"
               target="_blank"
               href="<?php esc_html_e( $url_adams, 'ipanema-cv-csg'); ?>">
                <img class="sc-adams" 
                     alt="<?php esc_html_e( 'Adams Girona', 'ipanema-cv-csg' ); ?>"
                     src="<?php echo plugins_url( '../images/schools/adams.png', __FILE__ ); ?>" />
            </a>
        </div>
    </div>
    <div class="col-4 col-t-4">
        <div class="item">
            <ul class="tasks">
                <li><strong>
                    <?php esc_html_e( 'Three module course:', 'ipanema-cv-csg' ); ?>
                    </strong>
                    <ul>
                        <li class="custom-list">
                            <?php esc_html_e( 'HTML5 & CSS3', 'ipanema-cv-csg' ); ?></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'PHP & MySQL', 'ipanema-cv-csg' ); ?></li>
                            <li class="custom-list">
                        <!-- Button trigger modal -->
                        <button type="button" 
                                class="btn btn-outline-success btn-sm openBtn" 
                                data-bs-toggle="modal" 
                                data-bs-target="#Modal"
                                onclick="inGirona()">
                                <?php esc_html_e( 'Bootstrap', 'ipanema-cv-csg' ); ?>
                        </button></li>
                        <li class="custom-list">
                            <?php esc_html_e( 'Django & Web deployment', 'ipanema-cv-csg' ); ?></li>
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
                           href="<?php esc_html_e( $url_php, 'ipanema-cv-csg'); ?>">    
                            <img class="img-testimonial" 
                                 alt="<?php esc_html_e( 'PHP & MySQL', 'ipanema-cv-csg' ); ?>"
                                 src="<?php echo plugins_url( '../images/testimonials/php_mysql_min.png', __FILE__ ); ?>"  />
                        </a>
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'PHP & MySQL', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#php', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#mysql', 'ipanema-cv-csg' ); ?>
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
                           href="<?php esc_html_e( $url_boots, 'ipanema-cv-csg'); ?>">    
                            <img class="img-testimonial"  
                                 alt="<?php esc_html_e( 'Bootstrap', 'ipanema-cv-csg' ); ?>"
                                 src="<?php echo plugins_url( '../images/testimonials/boots_min.png', __FILE__ ); ?>" />
                        </a>
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Bootstrap', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#bootstrap', 'ipanema-cv-csg' ); ?>
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
                           href="<?php esc_html_e( $url_django, 'ipanema-cv-csg'); ?>">    
                            <img class="img-testimonial"
                                 alt="<?php esc_html_e( 'Django', 'ipanema-cv-csg' ); ?>"
                                 src="<?php echo plugins_url( '../images/testimonials/django.png', __FILE__ ); ?>" />
                        </a>
                        <p class="testimonial-title-top">
                            <span class="testimonial-title">
                                <strong><?php esc_html_e( 'Django', 'ipanema-cv-csg' ); ?></strong>
                            </span><br>
                            <span class="hashtag">
                                <?php esc_html_e( '#django', 'ipanema-cv-csg' ); ?>
                            </span>
                            <span class="hashtag">
                                <?php esc_html_e( '#python', 'ipanema-cv-csg' ); ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade montserrat" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-WeatherApp" id="ModalLabel">
            <?php esc_html_e( 'Weather App', 'ipanema-cv-csg' ); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php 
            // Weather App
            include plugin_dir_path( __FILE__ ) . 'weather_app/weather_app.php';
            ?> 
        </div>
      <div class="modal-footer">
        <button type="button" 
                class="btn btn-warning close-weatherapp"
                data-bs-dismiss="modal">
                <?php esc_html_e( 'Enjoy!', 'ipanema-cv-csg' ); ?></button>
      </div>
    </div>
  </div>
</div>
