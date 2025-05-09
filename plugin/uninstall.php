<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

// Eliminar opciones del plugin
delete_option('mpp_opciones');

// Eliminar cualquier otra configuración si es necesario
