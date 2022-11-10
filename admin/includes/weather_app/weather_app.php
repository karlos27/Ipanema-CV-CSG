<?php
/**
 * File Name: weather_app.php
 * Folder Path: /admin/includes/weather_app
 * Plugin Name : Ipanema CV CSG
 * 
 * Resources:
 * https://developer.wordpress.org/reference/functions/sanitize_option/
 * https://stackoverflow.com/questions/14821998/translate-dated-f-y-hi-function-php
 * https://www.w3schools.com/php/func_date_date.asp
 * 
 * 
 **/

$url_oweather = sanitize_url( 'https://openweathermap.org/' );

$lang  = get_locale();
//print $lang;
$today = "";
if( $lang == "ca" || $lang == "es_ES" ){
    $today = sanitize_option( 'date_format', ucfirst( date_i18n( 'l, j M Y - g:i A', false, false ) ) );
} else {
    $today = sanitize_option( 'date_format', ucfirst( date_i18n( 'l, jS \of F Y - g:i A', false, false ) ) );
}

?>

<div class="weather-container montserrat">
    <div class="row">
        <div class="col">
            <div id="alert-info"></div>
            <input type="text" 
                   class="form-control get-location middle-cursor" 
                   placeholder="<?php esc_html_e( 'Enter city name', 'ipanema-cv-csg'); ?>"
                   id="location">
            <div class="weather-separator" id="weather-separator"></div>
            <button type="submit" 
                    class="btn btn-warning get-location"
                    onclick="Position();"
                    id="get-device"><?php esc_html_e( 'Get Device Location', 'ipanema-cv-csg'); ?></button>
            <div class="time-separator"></div>
            <div class="today"><?php esc_html_e( $today, 'ipanema-cv-csg'); ?></div>
        </div>
    </div>
    <div class="row tothetop_app">
        <div class="col limit-col">
            <img class="w-image"
                alt="<?php esc_html_e( 'Weather Icon', 'ipanema-cv-csg'); ?>"
                title="<?php esc_html_e( 'Weather Icon', 'ipanema-cv-csg'); ?>"
                id="weather-icon">
            <div class="w-param w-temp" id="numb"></div>                            
            <div class="w-param w-desc" id="weather-description"></div>
        </div>
        <div class="col">
            <div class="row more-data-box">
                <div class="col data-box">
                    <i class="fa-solid fa-location-dot fa-xl w-icon-loc"></i>
                    <div class="location" id="mylocation"></div>
                </div>
            </div>
            <div class="row more-data-box">
                <div class="col data-box">
                    <i class="fa-solid fa-location-crosshairs fa-xl w-icon-coo"></i>
                    <div class="location" id="mycoords"></div>
                </div>
            </div>
            <div class="row more-data-box">
                <div class="col data-box">
                    <i class="fa-solid fa-temperature-three-quarters fa-xl w-icon-temp"></i>
                    <div class="feeling w-details" id="feel"></div>
                    <p class="data-detail"><?php esc_html_e( 'Feels like', 'ipanema-cv-csg'); ?></p>
                </div>
                <div class="col data-box">
                    <i class="fa-solid fa-droplet fa-xl w-icon-hum"></i>
                    <div class="humidity w-details" id="humidity"></div><br>
                    <p class="data-detail"><?php esc_html_e( 'Humidity', 'ipanema-cv-csg'); ?></p>
                </div>
            </div>
            <div class="row more-data-box">
                <div class="col data-box">
                    <i class="fa-solid fa-wind fa-xl w-icon-wind"></i>
                    <div class="wind w-details" id="wind"></div>
                    <p class="data-detail"><?php esc_html_e( 'Wind', 'ipanema-cv-csg'); ?></p>
                </div>
                <div class="col data-box">
                    <i class="fa-solid fa-arrows-down-to-line fa-xl w-icon-press"></i>
                    <div class="pressure w-details" id="pressure"></div>                    
                    <p class="data-detail"><?php esc_html_e( 'Atm. Pressure', 'ipanema-cv-csg'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="no-link-oweather oweather"
               target="_blank"
               href="<?php esc_html_e( $url_oweather, 'ipanema-cv-csg'); ?>">
               <?php esc_html_e( 'Visit OpenWeather', 'ipanema-cv-csg'); ?>
            </a>
        </div>
    </div>
    <div class="row fromthetop">
        <div class="col">
            <iframe
                class="iframe-maps"
                frameborder="0" style="border:0"
                referrerpolicy="no-referrer-when-downgrade"                
                id="iframe-location"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
