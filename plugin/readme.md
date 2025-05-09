# Mi Plugin Personalizado

**Contributors**: tu_nombre  
**Tags**: wordpress, plugin, ejemplo  
**Requires at least**: 4.7  
**Tested up to**: 5.7  
**Stable tag**: 1.0  
**License**: GPLv2 or later

## Descripción

Mi Plugin Personalizado permite modificar los títulos de los posts, agregar una firma automática al final de los posts y añadir un enlace de administración en el panel de WordPress.

## Características

- Modifica el título de los posts para agregar un prefijo personalizado.
- Agrega una firma automática al final de cada post.
- Añade una página de administración desde donde puedes gestionar la configuración del plugin.

## Instalación

1. Subir el plugin a la carpeta `wp-content/plugins/`.
2. Activar el plugin desde el panel de administración de WordPress.
3. Acceder al menú de administración del plugin desde el panel de administración para configurar la firma automática y otras opciones.

## Uso

- Después de activar el plugin, todos los títulos de los posts tendrán el prefijo `Mi Empresa - `.
- En los posts individuales, se agregará una firma automática: **Firma Automática: Mi Empresa**.
- Puedes modificar estas configuraciones desde la página de administración del plugin en el menú del panel de WordPress.

## Personalización

Puedes personalizar el prefijo del título y la firma desde el archivo de configuración dentro del panel de administración. Si quieres modificar estos comportamientos, edita el archivo `includes/funciones.php`.

## Changelog

### 1.0
- Primera versión del plugin con las siguientes funcionalidades:
  - Modificación de títulos de posts.
  - Agregar firma automática a los posts.
  - Página de administración para configuración básica.

## Contribuciones

Si deseas contribuir a este plugin, por favor sigue los siguientes pasos:

1. Haz un fork del repositorio.
2. Crea una rama para tu nueva funcionalidad (`git checkout -b nueva-funcionalidad`).
3. Realiza tus cambios y haz un commit (`git commit -am 'Agregada nueva funcionalidad'`).
4. Haz un push a tu rama (`git push origin nueva-funcionalidad`).
5. Crea un nuevo Pull Request.

## Licencia

Este plugin está bajo la Licencia GPLv2 o posterior. Puedes ver más detalles en el archivo `LICENSE`.
