<?php
// Modificar el título de los posts
function mpp_modificar_titulo($titulo) {
    return 'Mi Empresa - ' . $titulo;
}
add_filter('the_title', 'mpp_modificar_titulo');

// Agregar firma al contenido
function mpp_agregar_firma($contenido) {
    if (is_single()) {
        $firma = '<p class="mpp-firma">Firma Automática: Mi Empresa</p>';
        return $contenido . $firma;
    }
    return $contenido;
}
add_filter('the_content', 'mpp_agregar_firma');
