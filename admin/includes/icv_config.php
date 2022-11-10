<?php
/**
 * File Name: icv_config.php
 * Folder Path: /admin/includes
 * Plugin Name : Ipanema CV CSG
 * 
 * 
 **/

// Informació personal
global $url_github;
global $url_linkedin;
$lang           = get_locale();

$email_to       = sanitize_email( 'jobscarlos27@gmail.com' );
$phone_to       = sanitize_text_field( '123456789' );
$maps_to        = sanitize_url( 'https://goo.gl/maps/1KhGZ415qpCr4BUZ9' );
$cv_to          = '';
if( $lang == "ca" ){
    $cv_to      = '../media/pdf/cat/CV_SegarraGonzalezCarlos.pdf';
} else if ( $lang == "es_ES" ){
    $cv_to      = '../media/pdf/es/CV_SegarraGonzalezCarlos.pdf';
} else {
    $cv_to      = '../media/pdf/en/CV_SegarraGonzalezCarlos.pdf';
}
$url_twitter    = sanitize_url( 'https://twitter.com/CarlosSegarra5' );
$url_wordpress  = sanitize_url( 'https://wordpress.org/' );
$url_i2l        = sanitize_url( 'https://cawood.co.uk/i2lresearch/' );
$url_matic      = sanitize_url( 'https://www.matic.cat/' );
$url_cms_wp     = sanitize_url( 'https://wordpress.com/' );
$url_cms_joo    = sanitize_url( 'https://www.joomla.org/' );
$url_gimp       = sanitize_url( 'http://www.gimp.org.es/' );
$url_gmc        = sanitize_url( 'https://www.google.com/intl/es_es/retail/solutions/merchant-center/?&fmp=1&utm_id=gfr&utm_source=google&utm_medium=ha&utm_campaign=es-es-bkws&mcsubid=es-es-ha-mc-bk-c-bkws!o3&gclid=Cj0KCQjwsrWZBhC4ARIsAGGUJuoeWduYM4_L75sDI-22Egx8E_MzQZiza6RcVHghUP3Cvqxt1hDIRrMaAgKhEALw_wcB' );
$url_icon       = sanitize_url( 'https://www.iconsl.com/' );
$url_wp         = sanitize_url( 'https://wordpress.com/' );
$url_gimp       = sanitize_url( 'http://www.gimp.org.es/' );
$url_spora      = sanitize_url( 'http://www.spora.es/' );
$url_recyc      = sanitize_url( 'https://residus.gencat.cat/en/ambits_dactuacio/recollida_selectiva/' );
$url_iot        = sanitize_url( 'https://www.oracle.com/es/internet-of-things/what-is-iot/' );
$url_4focs      = sanitize_url( 'http://www.quatrefocs.cat/' );
$url_wwoof      = sanitize_url( 'https://wwoof.net//' );
$url_uniba      = sanitize_url( 'https://www.unibarcelona.com/' );
$url_nodered    = sanitize_url( 'https://nodered.org/' );
$url_ubidots    = sanitize_url( 'https://ubidots.com/' );
$url_adams      = sanitize_url( 'https://www.adams.es/nuestros-centros/girona/1/944' );
$url_php        = sanitize_url( 'https://www.php.net/' );
$url_boots      = sanitize_url( 'https://getbootstrap.com/' );
$url_django     = sanitize_url( 'https://www.djangoproject.com/' );
$url_udg        = sanitize_url( 'https://www.udg.edu/ca/' );
$url_gis        = sanitize_url( 'https://www.arcgis.com/index.html' );
$url_off        = sanitize_url( 'https://www.microsoft.com/es-es/microsoft-365/free-office-online-for-the-web' );
$url_ins        = sanitize_url( 'https://agora.xtec.cat/ies-merce-rodoreda/' );
$url_eoi        = sanitize_url( 'https://agora-eoi.xtec.cat/eoibanyoles/' );
$url_cefr       = sanitize_url( 'https://www.coe.int/en/web/common-european-framework-reference-languages/table-1-cefr-3.3-common-reference-levels-global-scale' );
$url_dire_blog  = sanitize_url( 'https://direstraitsblog.com/' );
$url_dire_wiki  = sanitize_url( 'https://en.wikipedia.org/wiki/Dire_Straits_(album)#Recording' );
$url_pink_blog  = sanitize_url( 'https://www.pinkfloyd.com/home.php' );
$url_pink_wiki  = sanitize_url( 'https://en.wikipedia.org/wiki/Pink_Floyd#The_Dark_Side_of_the_Moon_(1973)' );
$url_acdc_blog  = sanitize_url( 'https://www.acdc.com/' );
$url_acdc_wiki  = sanitize_url( 'https://en.wikipedia.org/wiki/Highway_to_Hell#Recording' );
$url_wp         = sanitize_url( 'https://developer.wordpress.org/plugins/' );
$url_w3schools  = sanitize_url( 'https://www.w3schools.com/' );
$url_mdn        = sanitize_url( 'https://developer.mozilla.org/es/' );
$url_codepen    = sanitize_url( 'https://codepen.io/' );
$url_stack      = sanitize_url( 'https://stackoverflow.com/' );
$url_gimp       = sanitize_url( 'https://www.gimp.org/docs/' );
$url_PHP        = sanitize_url( 'https://www.php.net/docs.php' );
$url_boots      = sanitize_url( 'https://getbootstrap.com/docs/5.2/getting-started/introduction/' );
$url_font       = sanitize_url( 'https://fontawesome.com/' );
$url_wiki       = sanitize_url( 'https://en.wikipedia.org/wiki/Main_Page' );
$url_unsplash   = sanitize_url( 'https://unsplash.com/es' );
$url_cms_wp     = sanitize_url( 'https://wordpress.com/' );
$url_cms_joo    = sanitize_url( 'https://www.joomla.org/' );
$url_get_php    = sanitize_url( 'https://www.php.net/' );
$url_get_boots  = sanitize_url( 'https://getbootstrap.com/' );
$url_django     = sanitize_url( 'https://www.djangoproject.com/' );
$url_ifr        = sanitize_url( 'https://wordpress.org/plugins/ipanema-film-reviews/' );
$url_itf        = sanitize_url( 'https://wordpress.org/plugins/ipanema-twitter-feed/' );

$week_day       = sanitize_option( 'date_format', ucfirst( date_i18n( 'l, ', false, false ) ) );
$date_number    = sanitize_option( 'date_format', date_i18n( 'j ', false, false ) );
$date_number_en = sanitize_option( 'date_format', date_i18n( 'jS \of ', false, false ) );
$date_month     = sanitize_option( 'date_format', ucfirst( date_i18n('F ', false, false ) ) );
$date_year      = sanitize_option( 'date_format', date_i18n( 'Y', false, false ) );
$full_date      = '';
$company        = 'Croscat, SL';
$comany_url     = sanitize_text_field( 'exemple.exemple' );
$comany_mail    = sanitize_text_field( 'exemple@exemple.com' );
$company_loc    = 'Banyoles (17820)';

if( $lang == "ca" || $lang == "es_ES"){
    $full_date  = $week_day . $date_number . $date_month . $date_year;
} else {
    $full_date  = $week_day . $date_number_en . $date_month . $date_year;
}