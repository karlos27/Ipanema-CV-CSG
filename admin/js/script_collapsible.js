/**
 * File Name: script_collapsible.js
 * Folder Path: include/admin/js
 * Plugin Name : Ipanema CV CSG
 * 
 * Resources: 
 * Collapsible:
 * https://www.w3schools.com/howto/howto_js_collapsible.asp
 * 
 * 
 **/

/*** Collapsible ***/
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
            content.style.maxHeight = null;

        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}