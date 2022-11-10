<?php
/**
 * File Name: ipanema-cv-csg-admin.php
 * Folder Path: /admin
 * Plugin Name : Ipanema CV CSG
 * 
 * Resources:
 * https://fontawesome.com/
 * https://wordpress.stackexchange.com/questions/317035/how-to-add-crossorigin-and-integrity-to-wp-register-style-font-awesome-5
 * https://stackoverflow.com/questions/44827134/wordpress-script-with-integrity-and-crossorigin
 * https://developer.wordpress.org/reference/functions/wp_script_add_data/#parameters
 * https://sellingplugins.com/create-translation-files-using-poedit-free/
 * 
 * 
 * */

if( !defined( 'is_ipanema_cvcsg_admin' ) ) {
	exit;
}

add_action( 'admin_enqueue_scripts', 'icvcsg_mn_css_js_admin_page' );
function icvcsg_mn_css_js_admin_page() {   
    $google_fonts  = sanitize_url( 'https://fonts.googleapis.com/css2?family=Anton&family=Bubblegum+Sans&family=Merriweather:wght@300;400;700;900&family=Montserrat&display=swap' );
    $bootstrap_css = sanitize_url( 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' );
    $font_awesome  = sanitize_url( 'https://kit.fontawesome.com/09f235b5ab.js' );
        
    // Afegeix Google Fonts
    wp_enqueue_style( 'google-fonts', $google_fonts, array(), false, true  );
    // Afegeix CSS    
    wp_enqueue_style( 'bootstrap-css', $bootstrap_css, array(), false, true  );
    wp_enqueue_style( 'stylesheet', plugins_url( 'css/style.css', __FILE__ ) );
    wp_enqueue_style( 'stylesheet_letter', plugins_url( 'css/style_letter.css', __FILE__ ) );
    wp_enqueue_style( 'weatherapp-stylesheet', plugins_url( 'includes/weather_app/css/style.css', __FILE__ ) );
    // Afegeix Font Awesome
    wp_register_script( 'font-awesome', $font_awesome, array(), false, true );
    wp_enqueue_script( 'font-awesome' );
    // Afegeix Bootstrap
    $bootstrap_js = sanitize_url( 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' );
    wp_register_script('bootstrap-js', $bootstrap_js, array(), false, true);
    wp_enqueue_script('bootstrap-js');
    wp_script_add_data( 'bootstrap-js', 
                            array( 'integrity', 'crossorigin' ) , 
                            array( 'sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8', 'anonymous' ) ); 
    
}

add_filter( 'style_loader_tag', 'add_bootstrap_cdn_attributes', 10, 2 );
function add_bootstrap_cdn_attributes( $html, $handle ) {
    if ( 'bootstrap-css' === $handle ) {
        $integrity = 'sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT';
        return str_replace( "media='1'", "media='all' integrity='" . $integrity . "' crossorigin='anonymous'", $html );
    }
    return $html;
}

// Crear menú de la extensió en el back-end del WP
add_action( 'admin_menu', 'icvcsg_add_menu_page' );
function icvcsg_add_menu_page() {
    // Menú nivell superior     
    global $menu_page;
    $menu_page =
        add_menu_page(
            esc_html__( 'Curriculum vitae', 'ipanema-cv-csg' ),
            esc_html__( 'Curriculum vitae', 'ipanema-cv-csg' ),
            'manage_options',
            'ipanema-menu-item-cvcsg',
            'run_myCV',
            'dashicons-format-gallery',
            16, // Posició després de Links en el menú principal
        );

    // Sub-menú sota nivell superior
	add_submenu_page(
        'ipanema-menu-item-cvcsg',
        esc_html__( 'Cover Letter', 'ipanema-cv-csg' ),
        esc_html__( 'Cover Letter', 'ipanema-cv-csg' ),
        'manage_options', 
        'ipanema-menu-item-cvcsg-carta',
        'run_myLetter' );
    
    // Sub-menú amb enllaços cap a fora de WP    
	global $submenu;
    global $url_github;
    global $url_linkedin;
    $url_github     = sanitize_url( 'https://github.com/karlos27' );
	$url_linkedin   = sanitize_url( 'www.linkedin.com/in/carlossegarragonzalez' );
	$submenu['ipanema-menu-item-cvcsg'][] = array( 'GitHub', 'manage_options', $url_github );
    $submenu['ipanema-menu-item-cvcsg'][] = array( 'LinkedIn', 'manage_options', $url_linkedin );

    if( !empty( $menu_page ) ) {
        add_action( 'load-' . $menu_page, 'icv_help_tabs' );
    }
}

// Funcions relacionades amb els items del menú
function run_myCV(){
    $empty_option = '';
    global $menu_page;
    ?>
    
    <div id="icv-general-cv" class="wrap">
        <h1><?php esc_html_e( 'Curriculum vitae', 'ipanema-cv-csg' ); ?></h1><br>
    </div>
    <div id="poststuff" class="metabox-holder"> 
      <div id="post-body"> 
        <div id="post-body-content"> 
         <?php do_meta_boxes( $menu_page, 'normal', $empty_option ); ?>     
        </div> 
      </div> 
      <br class="clear"/> 
    </div>
    
    <script type="text/javascript">  
    //<![CDATA[  
    jQuery( document ).ready( function( $ ) { 
      // Tanca postboxes que haurien d'estar tancats
      $( '.if-js-closed' ) .removeClass( 'if-js-closed' ).
         addClass( 'closed' ); 
 
      // Configuració propia dels postboxes 
      postboxes.add_postbox_toggles
         ( '<?php echo $menu_page; ?>' ); 
            }); 
 
    //]]>  
    </script>
    <?php
}

function run_myLetter(){
    ?>
    <!-- <div id="icv-general-letter" class="wrap">
        <h1><?php esc_html_e( 'Cover Letter', 'ipanema-cv-csg' ); ?></h1><br>
    </div> -->
    <div class="row">
        <div class="col-12 col-t-12">
            <?php
            // Carta de presentació
            include plugin_dir_path( __FILE__ ) . 'includes/cover_letter.php';
            ?>
        </div>
    </div>
    <?php
}

// Pestanyes d'ajuda personalitzades
function icv_help_tabs() {
    $screen = get_current_screen();
    
	$screen->add_help_tab( array(
		'id'       => 'icv-help-music',
		'title'    => esc_html__( 'Music', 'ipanema-cv-csg' ),
		'callback' => 'icv_help_music',
	) );

    $screen->add_help_tab( array(
		'id'       => 'icv-help-resources',
		'title'    => esc_html__( 'Resources', 'ipanema-cv-csg' ),
		'callback' => 'icv_help_resources',
	) );

    $pluginsName    = esc_html__( 'Curriculum vitae ', 'ipanema-cv-csg' );
    $pluginsObject  = esc_html__( 'I decided to add the music I love and the resources that I use to work with.', 'ipanema-cv-csg' );

	$screen->set_help_sidebar( '<p><strong>' . $pluginsName . '</strong><br>' . $pluginsObject . '</p><br>' );

    // Definim  meta_boxes
    global $menu_page;
    add_meta_box( 
		'icvcsg_contact_details_meta_box',
         esc_html__( 'Personal Details', 'ipanema-cv-csg' ),
        'icvcsg_main_display_contact_details_meta_box',
        $menu_page, 'normal', 'high' );
    
    add_meta_box( 
        'icvcsg_work_experience_meta_box',
        esc_html__( 'Experience', 'ipanema-cv-csg' ),
        'icvcsg_main_display_work_experience_meta_box',
        $menu_page, 'normal', 'high' );

    add_meta_box( 
        'icvcsg_education_meta_box',
        esc_html__( 'Education', 'ipanema-cv-csg' ),
        'icvcsg_main_display_education_meta_box',
        $menu_page, 'normal', 'high' );

    add_meta_box( 
        'icvcsg_languages_meta_box',
        esc_html__( 'Languages', 'ipanema-cv-csg' ),
        'icvcsg_main_display_languages_meta_box',
        $menu_page, 'normal', 'high' );

    add_meta_box( 
        'icvcsg_tech_skills_meta_box',
        esc_html__( 'Skills', 'ipanema-cv-csg' ),
        'icvcsg_main_display_tech_skills_meta_box',
        $menu_page, 'normal', 'high' );
}

// Funcions per a les pestanyes personalitzades d'ajuda
function icv_help_music(){
    ?>
    <div class="row tothetop">
        <div class="col-12 col-t-12">
            <?php
            // La meva música
            include plugin_dir_path( __FILE__ ) . 'includes/tab_music.php';
            ?>
        </div>
    </div>
    <?php
}

function icv_help_resources(){
    ?>
    <div class="row tothetop">
        <div class="col-12 col-t-12">
            <?php
            // Recursos
            include plugin_dir_path( __FILE__ ) . 'includes/tab_resources.php';
            ?>
        </div>
    </div>
    <?php
}

// Carrega scripts en cua
add_action( 'admin_enqueue_scripts', 'icvcsg_load_admin_scripts' );
function icvcsg_load_admin_scripts() {
    global $current_screen;
    global $menu_page;

    if ( $current_screen->id == $menu_page ) {
        wp_enqueue_script( 'common' );
        wp_enqueue_script( 'wp-lists' );
        wp_enqueue_script( 'postbox' );        
    }
}

function icvcsg_main_display_contact_details_meta_box() {  
    // Informació Personal
    include plugin_dir_path( __FILE__ ) . 'includes/personal_info.php';    
}

function icvcsg_main_display_work_experience_meta_box() {     
    // Experiència Professional
    ?>
    <div class="row">
        <div class="col-12 col-t-12 diff-collapsible">
            <button type="button" class="collapsible">
                <i class="fa-brands fa-envira fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Technical officer', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // I2L Research
                include plugin_dir_path( __FILE__ ) . 'includes/prof_exp_i2l.php';
                ?>
            </div>
        </div>
        <div class="col-12 col-t-12">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-code fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Front-end Web Developer', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // Matic Enginyeria Informàtica
                include plugin_dir_path( __FILE__ ) . 'includes/prof_exp_matic.php';
                ?>
            </div>
        </div>
        <div class="col-12 col-t-12 diff-collapsible">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-code fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Front-end Web Developer', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // Subprof
                include plugin_dir_path( __FILE__ ) . 'includes/prof_exp_subprof.php';
                ?>
            </div>
        </div>
        <div class="col-12 col-t-12">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-code fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Front-end Web Developer (internship)', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // ICON
                include plugin_dir_path( __FILE__ ) . 'includes/prof_exp_icon.php';
                ?>
            </div>
        </div>
        <div class="col-12 col-t-12 diff-collapsible">
            <button type="button" class="collapsible">
                <i class="fa-brands fa-envira fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Environmental educator', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // Spora
                include plugin_dir_path( __FILE__ ) . 'includes/prof_exp_spora.php';
                ?>
            </div>
        </div>
        <div class="col-12 col-t-12">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-utensils fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Waiter / Barman', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // 4Focs
                include plugin_dir_path( __FILE__ ) . 'includes/prof_exp_4focs.php';
                ?>
            </div>
        </div>
        <div class="col-12 col-t-12 diff-collapsible">
            <button type="button" class="collapsible">
                <i class="fa-brands fa-envira fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Volunteer', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // WWOOF
                include plugin_dir_path( __FILE__ ) . 'includes/prof_exp_wwoof.php';
                ?>
            </div>
        </div>
    </div>
    
    <?php
    // Afegeix javascript
    wp_register_script( 'collapsible', plugins_url( 'js/script_collapsible.js', __FILE__ ) );
    wp_enqueue_script( 'collapsible' );
}

function icvcsg_main_display_education_meta_box() {  
    // Estudis
    ?>
    <div class="row">
        <div class="col-12 col-t-12 diff-collapsible">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-graduation-cap fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Master\'s degree in Renewable Energies and Energy Sustainability', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // UNIBA
                include plugin_dir_path( __FILE__ ) . 'includes/edu_uniba.php';
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-t-12">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-graduation-cap fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Web development Professional Standards Certificate', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // ADAMS
                include plugin_dir_path( __FILE__ ) . 'includes/edu_adams.php';
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-t-12 diff-collapsible">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-graduation-cap fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Bachelor degree in Environmental Science', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // UdG
                include plugin_dir_path( __FILE__ ) . 'includes/edu_udg.php';
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-t-12">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-graduation-cap fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'GFGS in Environmental chemistry', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // Mercè Rodoreda
                include plugin_dir_path( __FILE__ ) . 'includes/edu_rodoreda.php';
                ?>
            </div>
        </div>
    </div>
    <?php
    // Afegeix javascript
    wp_register_script( 'weatherapp', plugins_url( 'includes/weather_app/js/script_weather.js', __FILE__ ) );
    wp_enqueue_script( 'weatherapp' );
}

function icvcsg_main_display_languages_meta_box() {
    // Languages
    ?>
    <div class="row">
        <div class="col-12 col-t-12 diff-collapsible">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-globe fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'English B2 Level Certificate', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // EOI-B2
                include plugin_dir_path( __FILE__ ) . 'includes/lang_english_b2.php';
                ?>
            </div>
        </div>
    </div>   
    <div class="row">
        <div class="col-12 col-t-12">
            <button type="button" class="collapsible">
                <i class="fa-solid fa-globe fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'English B1 Level Certificate', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                // EOI-B1
                include plugin_dir_path( __FILE__ ) . 'includes/lang_english_b1.php';
                ?>
            </div>
        </div>
    </div>
  <?php }

function icvcsg_main_display_tech_skills_meta_box() {  
    // Technical & Software Skills
    ?>
    <div class="row">
        <div class="col-12 col-t-12 diff-collapsible">
            <button type="button" id="skillbar" class="collapsible">
                <i class="fa-brands fa-uncharted fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Technical & Software', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                include plugin_dir_path( __FILE__ ) . 'includes/tech_skills.php';
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-t-12">
            <button type="button" class="collapsible">
                <i class="fa-brands fa-uncharted fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Professional', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                include plugin_dir_path( __FILE__ ) . 'includes/prof_skills.php';
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-t-12 diff-collapsible">
            <button type="button" class="collapsible">
                <i class="fa-brands fa-wordpress-simple fa-lg"></i>
                <strong>
                    <?php esc_html_e( 'Plugin Developer', 'ipanema-cv-csg' ); ?>
                </strong></button>
            <div class="content">
                <?php 
                include plugin_dir_path( __FILE__ ) . 'includes/wp_skills.php';
                ?>
            </div>
        </div>
    </div>
        
    <?php
    // Afegeix javascript   
    wp_register_script( 'skillbar', plugins_url( 'js/script_skillbar.js', __FILE__ ) );
    wp_enqueue_script( 'skillbar' );
}

