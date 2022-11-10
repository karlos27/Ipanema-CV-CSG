/**
 * File Name: script_skillbar.js
 * Folder Path: include/admin/js
 * Plugin Name : Ipanema CV CSG
 * 
 * Resources:
 * Skill bar: 
 * https://www.w3schools.com/howto/howto_css_skill_bar.asp
 * https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_progressbar_label_js
 * 
 * 
 **/

/*** Skill Bar ***/
var skill = document.getElementById("skillbar");

var w  = 0;
var j  = 0;
var d  = 0;
var c  = 0;
var g  = 0;
var i  = 0;
var o  = 0;
var gi = 0;
var go = 0;

var wp_elem     = document.getElementById( "wp-bar" );
var joo_elem    = document.getElementById( "joo-bar" );
var django_elem = document.getElementById( "dj-bar" );
var crud_elem   = document.getElementById( "crud-bar" );
var iot_elem    = document.getElementById( "iot-bar" );
var gimp_elem   = document.getElementById( "gimp-bar" );
var off_elem    = document.getElementById( "off-bar" );
var gis_elem    = document.getElementById( "gis-bar" );
var gmc_elem    = document.getElementById( "gmc-bar" );


skill.addEventListener("click", function() {
    var active = skill.classList.contains('active');
    if ( active ) {  
        if ( w == 0 ) {
            w = 1;            
            var width_w = 0;
            var id_w = setInterval( frame, 10 );
            function frame() {
                if ( width_w >= 90 ) {
                    clearInterval( id_w );
                    w = 0;
                } else {
                    width_w++;
                    wp_elem.style.width = width_w + "%";
                    wp_elem.innerHTML = "WordPress&nbsp;-&nbsp;" + width_w  + "%&nbsp;";
                    
                }
            }
        }

        if ( j == 0 ) {
            j = 1;
            var width_j = 0;
            var id_j = setInterval( frame, 10 );
            function frame() {
                if ( width_j >= 90 ) {
                    clearInterval( id_j );
                    j = 0;
                } else {
                    width_j++;
                    joo_elem.style.width = width_j + "%";
                    joo_elem.innerHTML = "Joomla&nbsp;-&nbsp;" + width_j  + "%&nbsp;";
                }
            }
        }

        if ( d == 0 ) {
            d = 1;
            var width_d = 0;
            var id_d = setInterval( frame, 10 );
            function frame() {
                if ( width_d >= 50 ) {
                    clearInterval( id_d );
                    d = 0;
                } else {
                    width_d++;
                    django_elem.style.width = width_d + "%";
                    django_elem.innerHTML = "Django&nbsp;-&nbsp;" + width_d  + "%&nbsp;";
                }
            }
        }

        if ( c == 0 ) {
            c = 1;
            var width_c = 0;
            var id_c = setInterval( frame, 10 );
            function frame() {
                if ( width_c >= 85 ) {
                    clearInterval( id_c );
                    c = 0;
                } else {
                    width_c++;
                    crud_elem.style.width = width_c + "%";
                    crud_elem.innerHTML = "CRUD&nbsp;-&nbsp;" + width_c  + "%&nbsp;";
                }
            }
        }
        
        if ( i == 0 ) {
            i = 1;
            var width_i = 0;
            var id_i = setInterval( frame, 10 );
            function frame() {
                if ( width_i >= 70 ) {
                    clearInterval( id_i );
                    i = 0;
                } else {
                    width_i++;
                    iot_elem.style.width = width_i + "%";
                    iot_elem.innerHTML = "IoT&nbsp;-&nbsp;" + width_i  + "%&nbsp;";
                }
            }
        }

        if ( g == 0 ) {
            g = 1;
            var width_g = 0;
            var id_g = setInterval( frame, 10 );
            function frame() {
                if ( width_g >= 80 ) {
                    clearInterval( id_g );
                    g = 0;
                } else {
                    width_g++;
                    gimp_elem.style.width = width_g + "%";
                    gimp_elem.innerHTML = "GIMP&nbsp;-&nbsp;" + width_g  + "%&nbsp;";
                }
            }
        }

        if ( o == 0 ) {
            o = 1;
            var width_o = 0;
            var id_o = setInterval( frame, 10 );
            function frame() {
                if ( width_o >= 65 ) {
                    clearInterval( id_o );
                    o = 0;
                } else {
                    width_o++;
                    off_elem.style.width = width_o + "%";
                    off_elem.innerHTML = "Microsoft&nbsp;Office&nbsp;-&nbsp;" + width_o  + "%&nbsp;";
                }
            }
        }

        if ( gi == 0 ) {
            gi = 1;
            var width_gi = 0;
            var id_gi = setInterval( frame, 10 );
            function frame() {
                if ( width_gi >= 48 ) {
                    clearInterval( id_gi );
                    gi = 0;
                } else {
                    width_gi++;
                    gis_elem.style.width = width_gi + "%";
                    gis_elem.innerHTML = "GIS&nbsp;-&nbsp;" + width_gi  + "%&nbsp;";
                }
            }
        }

        if ( go == 0 ) {
            go = 1;
            var width_go = 0;
            var id_go = setInterval( frame, 10 );
            function frame() {
                if ( width_go >= 35 ) {
                    clearInterval( id_go );
                    go = 0;
                } else {
                    width_go++;
                    gmc_elem.style.width = width_go + "%";
                    gmc_elem.innerHTML = "GMC&nbsp;-&nbsp;" + width_go  + "%&nbsp;";
                }
            }
        }
    }
});