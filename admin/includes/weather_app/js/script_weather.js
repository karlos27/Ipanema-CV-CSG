/**
 * File Name: script_weather.js
 * Folder Path: include/admin/section/weather_app/js
 * Plugin Name : Ipanema CV CSG
 * 
 * Resources:
 * https://www.codingnepalweb.com/build-weather-app-html-javascript/
 * https://phppot.com/php/forecast-weather-using-openweathermap-with-php/
 * https://openweathermap.org/current
 * https://stackoverflow.com/questions/10495243/how-change-content-value-of-pseudo-before-element-by-javascript/42000085#42000085
 * https://wordpress.org/support/topic/get-page-language-in-javascript/
 * https://developer.mozilla.org/en-US/docs/Web/API/Geolocation/getCurrentPosition
 * https://developers.google.com/maps/documentation/embed/embedding-map
 * 
 * 
 **/

/*** Weather App ***/

let api;
let appid = "58fa009d5f2b21fc824248f3928cc477";
let mapid = "AIzaSyAcw7gwWRo_OjF1IEBrTJA2OSwAGE4LCr8";

// Idioma
var lang = document.getElementsByTagName("html")[0].getAttribute("lang");
//console.log(lang);

// Missatges
var non_geo_supp     = "";
var non_position     = "";
var err_details      = "";
var cat              = "";
// Element CSS
var element = document.getElementById("weather-separator");

if( lang == "ca" ) {
    non_geo_supp     = ( "Aquest navegador no admet la geolocalització." );
    non_position     = ( "No hi ha geolocalització disponible." );
    err_details      = ( "Alguna cosa no va bé. Prova-ho una altra vegada." );

    element.setAttribute("data-before", "o");

} else if ( lang == "es" ) {
    non_geo_supp     = ( "Este navegador no admite la geolocalización." );
    non_position     = ( "No hay geolocalización disponible." );
    err_details      = ( "Algo no va bien. Pruébalo de nuevo." );

    element.setAttribute("data-before", "o");
} else {
    non_geo_supp     = ( "Geolocation is not supported by this browser." );
    non_position     = ( "No geolocation available." );
    err_details      = ( "Something went wrong. Try again." );

    element.setAttribute("data-before", "or");
}

// Variables
var inLocation       = document.getElementById("location");

// Caixes necessaries
var text             = document.getElementById("alert-info");
var wIcon            = document.getElementById("weather-icon");
var main_temp        = document.getElementById("numb");
var main_description = document.getElementById("weather-description");
var main_location    = document.getElementById("mylocation");
var main_coods       = document.getElementById("mycoords");
var main_feeling     = document.getElementById("feel");
var main_humidity    = document.getElementById("humidity");
var main_wind        = document.getElementById("wind");
var main_pressure    = document.getElementById("pressure");
var main_iframe      = document.getElementById("iframe-location");

function inGirona() {
    // Carrega per defecte
    inLocation.value = "Catalunya";
    requestApi(inLocation.value); 
}

inLocation.addEventListener("keyup", e =>{
    // Si el camp no és buit i prem enter
    if( e.key === "Enter" && inLocation.value != "" ){
        requestApi(inLocation.value);
        text.removeAttribute("class");
        text.innerHTML = "";
    }
});

function requestApi(city) {
    api = `https://api.openweathermap.org/data/2.5/weather?q=${city}&lang=${lang}&units=metric&appid=` + appid;
    //console.log(api);
    fetchData();
}

function Position() {
    if( navigator.geolocation ){
        // Si el navegador suporta la geolocalització mitjançant la api
        navigator.geolocation.getCurrentPosition(onSuccess, onError, options);
    }else{
        text.setAttribute("class", "alert alert-info");
        text.innerHTML = non_geo_supp;
    }
}

function onSuccess(position) {
    const {latitude, longitude} = position.coords; // obté lat i long del dispositiu de l'usuari
    api = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&lang=${lang}&units=metric&appid=` + appid;
    text.removeAttribute("class");
    text.innerHTML = "";
    fetchData();
}

function onError(error) {
    // Si qualsevol error succeeix mostra missatge
    text.setAttribute("class", "alert alert-info");
    text.innerHTML = non_position;
}

const options = {
    enableHighAccuracy: true,
    maximumAge: 30000,
    timeout: 27000
};
  
function fetchData(){
    fetch(api).then(res => res.json()).then(result => weatherDetails(result)).catch(() =>{
        text.setAttribute("class", "alert alert-info");
        text.innerHTML = err_details;
    });
}

function weatherDetails(info){
    // Obté les propietats per al valor cercat
    const city = info.name;
    const {lat, lon} = info.coord;
    const country = info.sys.country;
    const {description, id} = info.weather[0];
    const {temp, feels_like, humidity, pressure} = info.main;
    const {speed} = info.wind;   
    
    // Carrega imatges temps
    if(id == 800){
        wIcon.src = "../wp-content/plugins/ipanema-cv-csg/admin/includes/weather_app/icons/clear.svg";
    }else if(id >= 200 && id <= 232){
        wIcon.src = "../wp-content/plugins/ipanema-cv-csg/admin/includes/weather_app/icons/storm.svg";  
    }else if(id >= 600 && id <= 622){
        wIcon.src = "../wp-content/plugins/ipanema-cv-csg/admin/includes/weather_app/icons/snow.svg";
    }else if(id >= 701 && id <= 781){
        wIcon.src = "../wp-content/plugins/ipanema-cv-csg/admin/includes/weather_app/icons/haze.svg";
    }else if(id >= 801 && id <= 804){
        wIcon.src = "../wp-content/plugins/ipanema-cv-csg/admin/includes/weather_app/icons/cloud.svg";
    }else if((id >= 500 && id <= 531) || (id >= 300 && id <= 321)){
        wIcon.src = "../wp-content/plugins/ipanema-cv-csg/admin/includes/weather_app/icons/rain.svg";
    }
    
    // Informació
    main_temp.innerHTML = Math.floor( temp ) + "°C";
    main_description.innerHTML = description.toUpperCase();
    main_location.innerHTML = city + "&nbsp;(" + country + ")";
    main_coods.innerHTML = lat + "°-&nbsp;" + lon + "°";
    main_feeling.innerHTML = Math.floor( feels_like ) + "°C";
    main_humidity.innerHTML = humidity + "%";
    main_wind.innerHTML = speed + "Km/h";
    main_pressure.innerHTML = pressure + "hPa";
    main_iframe.src = "https://www.google.com/maps/embed/v1/place?key=" + mapid + "&q=" + city + "&language=" + lang + "&maptype=satellite";
    text.innerText = "";
    inLocation.value = "";
    
}