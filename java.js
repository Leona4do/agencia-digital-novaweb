// 1. Captura DOM
const formulario = document.getElementById('formularioContacto');
const mensajeEstado = document.getElementById('mensajeEstado');

// 2. Programación a eventos
formulario.addEventListener('submit', (evento) => {
    evento.preventDefault(); 
    
    mensajeEstado.innerText = "";
    
    // 3. Verificación
    const nombre = document.getElementById('nombre').value.trim();
    const email = document.getElementById('email').value.trim();
    const mensaje = document.getElementById('mensaje').value.trim();

    // 4. Validación RegExp
    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const regexNombre = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/; 

    // Validación Dinámica
    if (!regexNombre.test(nombre)) {
        mensajeEstado.innerText = "El nombre solo debe contener letras.";
        mensajeEstado.style.color = "red";
        return; 
    }

    if (!regexEmail.test(email)) {
        mensajeEstado.innerText = "Error: Formato de correo no válido.";
        mensajeEstado.style.color = "red";
        return;
    }

    // Si todo va bien, llamar a función
    ejecutarEnvioAsincrono(nombre);

}); // Cierre evento submit

// 5. Promesa
function ejecutarEnvioAsincrono(usuario) {
    mensajeEstado.innerText = "Enviando datos... por favor espere.";
    mensajeEstado.style.color = "blue";

    const promesaEnvio = new Promise((resolve, reject) => {
        setTimeout(() => {
            const exito = Math.random() > 0.3; 
            if (exito) {
                resolve(`Mensaje de ${usuario} enviado correctamente.`);
            } else {
                reject("Error: No se pudo completar el envío.");
            }
        }, 2000);
    });

    promesaEnvio
        .then((respuesta) => {
            mensajeEstado.innerText = respuesta;
            mensajeEstado.style.color = "green";
            formulario.reset(); 
        })
        .catch((error) => {
            mostrarError(error); 
        });
}

// Función auxiliar de errores
function mostrarError(mensaje) {
    mensajeEstado.innerText = mensaje; //
    mensajeEstado.style.color = "red";
}
