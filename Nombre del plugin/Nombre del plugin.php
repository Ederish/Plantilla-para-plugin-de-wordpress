<?php
/*
Plugin Name: [El nombre que has escogido para el nombre de tu plugin]
Plugin URI: [URL del plugin (si la va a tener, si no puedes poner la tuya)]
Description: [Una breve descripcion del plugin]
Version:[La versión del plugin]
Author:[Autor del plugin]
Author URI:[URL del autor del plugin]
License:[El tipo de licencia que le quieras poner. Por ejemplo: GPL]
*/
function wp_activate() {
    add_option('wp_opcion', 255);
}
function wp_deactivate() {
    delete_option('wp_opcion');
}
register_activation_hook(__FILE__, 'wpglassesar_activate');
register_deactivation_hook(__FILE__, 'wpglassesar_deactivate');
?>