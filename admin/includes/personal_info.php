<?php
/**
 * File Name: personal_info.php
 * Folder Path: /admin/includes
 * Plugin Name : Ipanema CV CSG
 * 
 * Resources:
 * https://fontawesome.com/
 * 
 * 
 **/

require __DIR__ . '/icv_config.php';
   
?>

<!-- Informació Personal -->
<div class="row tothetop">
    <div class="col-3 col-t-3">
        <div class="item" id="photo">
            <img class="photo" 
                 alt="<?php esc_html_e( 'Photo', 'ipanema-cv-csg' ); ?>" 
                 src="<?php esc_html_e( plugins_url( '../images/cv/CV_picture.png', __FILE__ ), 'ipanema-cv-csg' );  ?>" />
        </div>
        <div class="item anton">
            <p class="name center">
                <?php esc_html_e( 'Carlos Segarra González', 'ipanema-cv-csg' ); ?></p>
        </div>
        <div class="item bubblegum">
            <p class="title center" 
                class="shine"><strong>
                <?php esc_html_e( 'Front-end Web Developer', 'ipanema-cv-csg' ); ?></strong></p>
        </div>
    </div>
    <div class="col-6 col-t-6">
        <div class="item montserrat">
            <p class="resume">
                <?php 
                esc_html_e( 'I\'m a web developer since 2017. I currently live in Banyoles and my short-medium term goal 
                            is to find a job that allows me to work as a web developer in WordPress-based applications.', 'ipanema-cv-csg' ); 
                ?>
            </p>
        </div>
        <div class="item montserrat">
            <p class="resume">
                <?php 
                esc_html_e( 'About my studies, I completed a course that accredits me professionally as a web developer 
                            at Adams Girona academy. On the other hand, and in relation to my work experience, I had 
                            the opportunity to work as a web developer in an online shop dedicated to spearfishing products and also, 
                            in an IT engineering shop performing tasks related to website installation and maintenance, and customer service 
                            (usually WordPress or Joomla applications).', 'ipanema-cv-csg' );
                ?>
            </p>
        </div>
        <div class="item montserrat">
            <p class="resume">
                <?php
                esc_html_e( 'Despite not being a pure programmer, I know WordPress and Joomla CMS very well. I enjoy working with CSS and JavaScript, 
                            although I also have fun with PHP. If I had to choose 3 WordPress plugins, they would be the 
                            "Contact Form 7" plugin because its versatility constructing forms, the "UpdraftPlus - Backup/Restore" plugin 
                            considering that allows you create backups so, it\'s very easy to accomplish the website import/export task 
                            and finally, the "Ipanema Twitter Feed" plugin owing you to add till five different twitter feeds in a website. 
                            Precisely, during the last weeks I\'ve been working on a couple of WordPress plugins. And after watching the result, 
                            I decided to do my CV in a plugin format. I know it\'s a non conventional way to do it but, at least it\'s a 
                            different way to present it and perhaps, an original one. I hope you like it.', 'ipanema-cv-csg' );
                ?>
            </p>
        </div>
    </div>
    <div class="col-3 col-t-3">
        <div class="menu montserrat">
            <ul>
                <a class="no-link no-shadow"
                    href="mailto:<?php esc_html_e( $email_to, 'ipanema-cv-csg' ); ?>?subject=Awesome Ipanema CV, Carlos!">
                    <li>
                        <i class="fa-solid fa-paper-plane fa-lg"></i>
                        <?php esc_html_e( 'jobscarlos27@gmail.com', 'ipanema-cv-csg' ); ?>
                    </li></a>
                <!-- <a class="no-link no-shadow"  
                    href="tel:<?php esc_html_e( $phone_to, 'ipanema-cv-csg' ); ?>">
                    <li>
                        <i class="fa-solid fa-phone fa-lg"></i>
                        <?php esc_html_e( '123456789', 'ipanema-cv-csg' ); ?>
                    </li></a> -->
                <a class="no-link no-shadow" 
                    target="_blank"
                    href="<?php esc_html_e( $maps_to, 'ipanema-cv-csg' ); ?>">
                    <li>
                        <i class="fa-solid fa-map-location-dot fa-lg"></i>
                        <?php esc_html_e( 'Banyoles&nbsp;(17820)', 'ipanema-cv-csg' ); ?>
                    </li></a>
                <a class="no-link no-shadow"
                    target="_blank"                        
                    href="<?php echo plugins_url( $cv_to, __FILE__ ); ?>" >
                    <li>
                        <i class="fa-solid fa-file-arrow-down fa-lg"></i>
                        <?php esc_html_e( 'Download CV', 'ipanema-cv-csg' ); ?>
                    </li></a>
            </ul>
        </div>
        <div class="empty-row"></div>
        <div class="profile-box">
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="social-buttons">
                        <a class="no-shadow" 
                           target="_blank"
                           href="<?php esc_html_e( $url_linkedin, 'ipanema-cv-csg'); ?>">
                            <img class="social" 
                                 alt="<?php esc_html_e( 'LinkedIn Profile', 'ipanema-cv-csg' ); ?>" 
                                 src="<?php echo plugins_url( '../images/social/linkedin/linkedin_button.png', __FILE__ ); ?>" />
                        </a>
                    </div>
                    <div class="social-buttons">
                        <a class="no-shadow" 
                           target="_blank"
                           href="<?php esc_html_e( $url_github, 'ipanema-cv-csg'); ?>">
                            <img class="social" 
                                 alt="<?php esc_html_e( 'GitHub Profile', 'ipanema-cv-csg' ); ?>" 
                                 src="<?php echo plugins_url( '../images/social/github/github_button.png', __FILE__ ); ?>" />
                        </a>
                    </div>
                    <div class="social-buttons">
                        <a class="no-shadow" 
                           target="_blank"
                           href="<?php esc_html_e( $url_twitter, 'ipanema-cv-csg'); ?>">
                            <img class="social" 
                                 alt="<?php esc_html_e( 'Twitter Profile', 'ipanema-cv-csg' ); ?>"  
                                 src="<?php echo plugins_url( '../images/social/twitter/twitter_button.png', __FILE__ ); ?>" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-row"></div>
        <div class="footer-box">
            <div class="row">
                <div class="col-12 col-t-12">
                    <div class="item">
                        <a class="no-shadow" 
                           target="_blank"
                           href="<?php esc_html_e( $url_wordpress, 'ipanema-cv-csg'); ?>">
                            <img id="wordpress-media" 
                                 alt="<?php esc_html_e( 'WordPress Media', 'ipanema-cv-csg' ); ?>" 
                                 src="<?php echo plugins_url( '../images/cv/wp_large.png', __FILE__ ); ?> " />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>