<?php
/**
 * File Name: tab_music.php
 * Folder Path: /admin/includes
 * Plugin Name : Ipanema CV CSG
 *  
 * Resources:
 * 
 * 
 **/

require __DIR__ . '/icv_config.php';

?>
<div id="carouselCaptions" class="carousel slide montserrat" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" 
                data-bs-target="#carouselCaptions" 
                data-bs-slide-to="0" 
                class="active btt-in-black" 
                aria-current="true" 
                aria-label="Slide 1"></button>
        <button type="button" 
                data-bs-target="#carouselCaptions" 
                data-bs-slide-to="1" 
                class="btt-in-black" 
                aria-label="Slide 2"></button>
        <button type="button" 
                data-bs-target="#carouselCaptions" 
                data-bs-slide-to="2" 
                class="btt-in-black" 
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-4 col-t-12">
                    <h3><a class="no-link-in-black" 
                           target="_blank"
                           href="<?php esc_html_e( $url_dire_blog, 'ipanema-cv-csg' ); ?>" >
                            <?php esc_html_e( 'Dire Straits', 'ipanema-cv-csg' ); ?></a></h3>
                    <h5><?php esc_html_e( 'Mark Knopfler - vocals, lead and rhythm guitars', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'David Knopfler - rhythm guitar, backing vocals', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'John Illsley - bass guitar, backing vocals', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'Pick Withers - drums', 'ipanema-cv-csg' ); ?></h5>
                </div>
                <div class="col-4 col-t-12">
                    <picture>
                        <img class="d-block w-100 album" 
                             alt="<?php esc_html_e( 'Dire Straits', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/music/dire_straits.png', __FILE__ ); ?>" />
                        <!-- <audio controls class="broadcast">
                            <source type="audio/mp3" 
                                    src="<?php echo plugins_url( '../media/music/Dire_Straits_Full_Album_1978.mp3', __FILE__ ); ?>" />
                            <?php esc_html_e( 'Your browser does not support the audio element.', 'ipanema-cv-csg' ); ?>
                        </audio> --></picture>
                </div>
                <div class="col-4 col-t-12">    
                    <h3><?php esc_html_e( 'Recording', 'ipanema-cv-csg' ); ?></h3>
                    <a class="no-shadow"
                       target="_blank"
                       href="<?php esc_html_e( $url_dire_wiki, 'ipanema-cv-csg' ); ?>">
                        <?php esc_html_e( 'Read more', 'ipanema-cv-csg' ); ?></a>
                    <p><i><?php esc_html_e( 'Dire Straits was recorded at Basing Street Studios in London from 13 February to 5 March 1978. 
                                                Knopfler used a few guitars for the recording, 
                                                including a pair of red Fender Stratocasters — one from 1961 
                                                and one from 1962. He played his 1938 National Style O 14 fret guitar 
                                                on "Water of Love" and "Wild West End". 
                                                He also used a black Telecaster Thinline...', 'ipanema-cv-csg' ); ?></i></p>
                </div>
            </div>        
            <div class="carousel-caption d-none d-md-block">
                <h5 class="in-black"><?php esc_html_e( 'DIRE STRAIS (1978)', 'ipanema-cv-csg' ); ?></h5>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-4 col-t-12">
                    <h3><a class="no-link-in-black" 
                           target="_blank"
                           href="<?php esc_html_e( $url_pink_blog, 'ipanema-cv-csg' ); ?>" >
                            <?php esc_html_e( 'Pink Floyd', 'ipanema-cv-csg' ); ?></a></h3>
                    <h5><?php esc_html_e( 'Syd Barrett - lead and rhythm guitars, vocals', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'David Gilmour - lead and rhythm guitars, vocals, bass, keyboards, synthesisers', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'Roger Waters - bass, vocals, rhythm guitar, synthesisers', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'Richard Wright - keyboards, piano, organ, synthesisers, vocals', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'Nick Mason - drums, percussion, vocals', 'ipanema-cv-csg' ); ?></h5>
                </div>
                <div class="col-4 col-t-12">
                    <picture>
                        <img class="d-block w-100 album" 
                             alt="<?php esc_html_e( 'Pink Floyd', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/music/pink_floyd.png', __FILE__ ); ?>" />
                        <!-- <audio controls class="broadcast">
                            <source type="audio/mp3" 
                                    src="<?php echo plugins_url( '../media/music/The_Dark_Side_of_the_Moon_Full_Album_1973.mp3', __FILE__ ); ?>" />
                            <?php esc_html_e( 'Your browser does not support the audio element.', 'ipanema-cv-csg' ); ?>
                        </audio> --></picture>
                </div>
                <div class="col-4 col-t-12">    
                    <h3><?php esc_html_e( 'Recording', 'ipanema-cv-csg' ); ?></h3>
                    <a class="no-shadow"
                       target="_blank"
                       href="<?php esc_html_e( $url_pink_wiki, 'ipanema-cv-csg' ); ?>">
                        <?php esc_html_e( 'Read more', 'ipanema-cv-csg' ); ?></a>
                    <p><i><?php esc_html_e( 'Pink Floyd recorded The Dark Side of the Moon between May 1972 and January 1973 with
                                             EMI staff engineer Alan Parsons at Abbey Road. The title is an allusion to lunacy 
                                             rather than astronomy. The band had composed and 
                                             refined the material while touring the UK...', 'ipanema-cv-csg' ); ?></i></p>
                </div>
            </div>        
            <div class="carousel-caption d-none d-md-block">
                <h5 class="in-black"><?php esc_html_e( 'The Dark Side of the Moon (1973)', 'ipanema-cv-csg' ); ?></h5>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-4 col-t-12">
                    <h3><a class="no-link-in-black" 
                           target="_blank"
                           href="<?php esc_html_e( $url_acdc_blog, 'ipanema-cv-csg' ); ?>" >
                            <?php esc_html_e( 'AC&#9889;DC', 'ipanema-cv-csg' ); ?></a></h3>
                    <h5><?php esc_html_e( 'Bon Scott - lead vocals, bass, keyboards, synthesisers', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'Angus Young - lead guitar', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'Malcolm Young - rhythm guitar, backing vocals', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'Cliff Williams - bass, backing vocals', 'ipanema-cv-csg' ); ?></h5>
                    <h5><?php esc_html_e( 'Phil Rudd - drums', 'ipanema-cv-csg' ); ?></h5>
                </div>
                <div class="col-4 col-t-12">
                    <picture>
                        <img class="d-block w-100 album" 
                             alt="<?php esc_html_e( 'AC&#9889;DC', 'ipanema-cv-csg' ); ?>"
                             src="<?php echo plugins_url( '../images/music/acdc.png', __FILE__ ); ?>" />
                        <!-- <audio controls class="broadcast">
                            <source type="audio/mp3" 
                                    src="<?php echo plugins_url( '../media/music/Highway_to_Hell_Full_Album_1979.mp3', __FILE__ ); ?>" />
                            <?php esc_html_e( 'Your browser does not support the audio element.', 'ipanema-cv-csg' ); ?>
                        </audio> --></picture>
                </div>
                <div class="col-4 col-t-12">    
                    <h3><?php esc_html_e( 'Recording', 'ipanema-cv-csg' ); ?></h3>
                    <a class="no-shadow"
                       target="_blank"
                       href="<?php esc_html_e( $url_acdc_wiki, 'ipanema-cv-csg' ); ?>">
                            <?php esc_html_e( 'Read more', 'ipanema-cv-csg' ); ?></a>
                    <p><i><?php esc_html_e( 'Recording commenced at the Roundhouse Studios in Chalk Farm, north London in March 1979.
                                             In his book Highway to Hell, Clinton Walker writes, "The band virtually moved into the
                                             Roundhouse Studios in Chalk Farm, spending the best part of three months there. 
                                             That, to start with, was a shock to AC/DC, who had never previously spent more than three weeks on any one album... 
                                             Sessions for the album — 15 hours a day, day-in day-out, for over two months — were gruelling. 
                                             Songs were worked and reworked."...', 'ipanema-cv-csg' ); ?></i></p>
                </div>
            </div>        
            <div class="carousel-caption d-none d-md-block">
                <h5 class="in-black"><?php esc_html_e( 'HIGHWAY TO HELL (1979)', 'ipanema-cv-csg' ); ?></h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
