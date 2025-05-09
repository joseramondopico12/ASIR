<?php
// Crear una página en el menú de administración
function mpp_agregar_menu() {
    add_menu_page(
        'Mi Plugin Personalizado',
        'Mi Plugin',
        'manage_options',
        'mpp_plugin',
        'mpp_pagina_administracion',
        'dashicons-admin-plugins',
        6
    );
}
add_action('admin_menu', 'mpp_agregar_menu');

// Mostrar la página de administración
function mpp_pagina_administracion() {
    ?>
    <div class="wrap">
        <h1>Configuración del Plugin</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('mpp_opciones');
            do_settings_sections('mpp_plugin');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
