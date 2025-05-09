<?php
/*
Plugin Name: Mi Plugin Personalizado
Plugin URI: http://tusitio.com
Description: Personaliza los títulos de los posts, agrega una firma automática, y más.
Version: 1.0
Author: Tu Nombre
Author URI: http://tusitio.com
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Evitar el acceso directo al archivo
}

// Cargar funciones principales
require_once plugin_dir_path( __FILE__ ) . 'includes/funciones.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/funciones-administracion.php';

// Activar el plugin
function mpp_activar_plugin() {
    // Aquí puedes hacer tareas de configuración o creación de opciones
}
register_activation_hook( __FILE__, 'mpp_activar_plugin' );

// Desactivar el plugin
function mpp_desactivar_plugin() {
    // Eliminar configuraciones o limpiar registros
}
register_deactivation_hook( __FILE__, 'mpp_desactivar_plugin' );
