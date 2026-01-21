// Desplazamiento del carrusel de gelatinas
function deslizar(boton, direccion) {
    const contenedor = boton.parentElement.querySelector('.contenedor-fila');
    const anchoTarjeta = 240; // Ancho tarjeta + gap
    contenedor.scrollBy({
        left: direccion * anchoTarjeta,
        behavior: 'smooth'
    });
}

// Abrir modal y cargar datos
function abrirModal(info) {
    const modal = document.getElementById('modal-receta');
    
    document.getElementById('titulo-detalle').innerText = info.nombre;
    document.getElementById('ingredientes-detalle').innerText = info.ingredientes;
    document.getElementById('instrucciones-detalle').innerText = info.instrucciones;
    document.getElementById('foto-detalle').src = info.imagen;
    
    modal.style.display = 'block';
}

// Cerrar modal al hacer clic fuera del cuadro rosa
function cerrarAlClicarFuera(evento) {
    const modal = document.getElementById('modal-receta');
    // Si el clic fue en el fondo oscuro y no en el contenido
    if (evento.target === modal) {
        modal.style.display = 'none';
    }
}