// script.js

document.addEventListener("DOMContentLoaded", function() {
    // Mostrar un mensaje en el panel de administración cuando el plugin está activado
    console.log("Mi Plugin Personalizado activado correctamente");

    // Si necesitas manejar eventos en el frontend, como botones o formularios, puedes añadir código aquí.
    const exampleButton = document.querySelector("#example-button");

    if (exampleButton) {
        exampleButton.addEventListener("click", function() {
            alert("¡Botón del plugin pulsado!");
        });
    }
});
