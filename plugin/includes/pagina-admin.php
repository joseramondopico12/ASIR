<div class="wrap">
    <h1>Bienvenido al Panel de Configuración</h1>
    <form method="post" action="options.php">
        <input type="text" name="nombre_empresa" value="<?php echo esc_attr(get_option('nombre_empresa')); ?>" />
        <label for="nombre_empresa">Nombre de la Empresa</label>
        <input type="submit" value="Guardar Cambios" />
    </form>
</div>
