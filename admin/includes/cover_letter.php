<?php
/**
 * File Name: cover_letter.php
 * Folder Path: /admin/includes
 * Plugin Name : Ipanema CV CSG
 * 
 * Resources:
 * https://developer.wordpress.org/reference/functions/sanitize_option/
 * 
 **/

require __DIR__ . '/icv_config.php';

?>
<div class="container container-letter montserrat tothetop">
    <div class="row">
        <div class="col">
            <div class="letter-header-details">
                <h5><?php esc_html_e( 'Carlos Segarra González', 'ipanema-cv-csg'); ?></h5>
                <!-- <h6>
                    <a class="letter-header-phone-link"  
                       href="tel:<?php esc_html_e( $phone_to, 'ipanema-cv-csg' ); ?>">
                       <?php esc_html_e( '123456789', 'ipanema-cv-csg'); ?></a></h6> -->
                <h6>
                    <a class="letter-header-mail-link"
                       href="mailto:<?php esc_html_e( $email_to, 'ipanema-cv-csg' ); ?>?subject=Awesome Ipanema CV, Carlos!">
                       <?php esc_html_e( 'jobscarlos27@gmail.com', 'ipanema-cv-csg'); ?></a></h6>
                <h6><?php esc_html_e( 'Banyoles (17820)', 'ipanema-cv-csg'); ?></h6><br>
                <div class="letter-header-date">
                    <?php echo $full_date; ?>
                </div>
            </div>
        </div>
    </div><br>
    <!-- <div class="row">
        <div class="col">
            <div class="letter-header-company-details">
                <h5><?php esc_html_e( $company, 'ipanema-cv-csg'); ?></h5>
                <h6><?php esc_html_e( $comany_url, 'ipanema-cv-csg'); ?></h6>
                <h6><?php esc_html_e( $comany_mail, 'ipanema-cv-csg'); ?></h6>                
                <h6><?php esc_html_e( $company_loc, 'ipanema-cv-csg'); ?></h6>
            </div>
        </div>
    </div><br> -->
    <div class="row">
        <div class="col">
            <div class="letter-body">
                <div class="letter-body-text">
                    <?php esc_html_e( 'Dear Ms./Mr.,', 'ipanema-cv-csg'); ?></div><br>
                <div class="letter-body-text">
                    <?php esc_html_e( 'I\'m so happy to present myself to you in this way, through my own WordPress plugin CV. To be honest,
                                      this is the result of many days of work, getting deep into the WordPress core and learning
                                      the process of a plugin creation.', 'ipanema-cv-csg'); ?></div><br>
                <div class="letter-body-text">
                    <?php esc_html_e( 'As you could see in my resume, I have developed two plugins. The first one, the "Ipanema Film Reviews" 
                                      plugin, gave me the opportunity to start over from another point of view. In fact, when I wanted to create 
                                      (or update) data in WordPress sites, I used to work from the "functions.php" file or adapting plugins from
                                      other developers but, I had never created any plugin or similar. The other one, the "Ipanema Twitter Feed"
                                      plugin, helped me to understand better how the functions are established in WordPress and how they work, 
                                      with its hooks and filters, saving data in the database, etc...', 'ipanema-cv-csg'); ?></div><br>
                <div class="letter-body-text">
                    <?php esc_html_e( 'On the other hand, the hosting process in wordpress.org helped me even more and I think is important
                                      to have in mind that there are people who check your code for the plugin approval, not machines or bots.
                                      They help you in many ways, giving you the opportunity to rewrite the code as many times as it
                                      needs or giving you advice to keep safe your code (i.e. data sanitization/escaping).', 'ipanema-cv-csg'); ?></div><br>
                <div class="letter-body-text">
                    <?php esc_html_e( 'The "Ipanema CV CSG" plugin it\'s not only my CV. It\'s the way that I want to tell you that I really
                                      like to work with WordPress applications. I enjoy developing new content or updating the existing one 
                                      and I have experience working with this kind of application. I\'m passionate about WordPress and I want
                                      to keep learning to be a better developer. If you are looking for a guy who likes to work with WordPress 
                                      and has some experience on the field... I\'m that guy.', 'ipanema-cv-csg'); ?></div><br>
                <div class="letter-body-text">
                    <?php esc_html_e( 'Thank you.', 'ipanema-cv-csg'); ?></div><br>
                <div class="letter-body-text">
                    <?php esc_html_e( 'Best regards,', 'ipanema-cv-csg'); ?></div><br>
                <div class="letter-body-text">
                    <?php esc_html_e( 'Carlos', 'ipanema-cv-csg'); ?></div><br>
            </div> 
        </div>
    </div>
</div>


<?php
 
