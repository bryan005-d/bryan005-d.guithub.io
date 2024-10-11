// Función para mostrar un mensaje de éxito
function mostrarMensajeExito(mensaje) {
    alert(mensaje);
}

// Función para mostrar un mensaje de error
function mostrarMensajeError(mensaje) {
    alert(mensaje);
}

// Función para registrar propietarios/residentes
function registrarPropietario(e) {
    e.preventDefault();
    const nombre = document.getElementById('nombre').value;
    const apellido = document.getElementById('apellido').value;
    const documento = document.getElementById('numero-documento').value;
    const apartamento = document.getElementById('numero-apartamento').value;
    const tipo = document.getElementById('tipo-residente').value;
    const telefono = document.getElementById('telefono').value;
    const correo = document.getElementById('correo').value;

    if (nombre && apellido && documento && apartamento && tipo && telefono && correo) {
        mostrarMensajeExito("Propietario/Residente registrado con éxito!");
        this.reset();
    } else {
        mostrarMensajeError("Por favor, completa todos los campos.");
    }
}

// Función para registrar acceso de residentes
function registrarAcceso(e) {
    e.preventDefault();
    const residenteId = document.getElementById('residente-id').value;
    const tipoIngreso = document.getElementById('tipo-ingreso').value;
    const fechaHoraIngreso = document.getElementById('fecha-hora-ingreso').value;

    if (residenteId && tipoIngreso && fechaHoraIngreso) {
        mostrarMensajeExito("Acceso registrado con éxito!");
        this.reset();
    } else {
        mostrarMensajeError("Por favor, completa todos los campos requeridos.");
    }
}

// Función para registrar vehículos
function registrarVehiculo(e) {
    e.preventDefault();
    const placa = document.getElementById('placa').value;
    const tipoVehiculo = document.getElementById('tipo-vehiculo').value;
    const horaIngreso = document.getElementById('hora-ingreso').value;

    if (placa && tipoVehiculo && horaIngreso) {
        mostrarMensajeExito("Vehículo registrado con éxito!");
        this.reset();
    } else {
        mostrarMensajeError("Por favor, completa todos los campos requeridos.");
    }
}

// Función para registrar mascotas
function registrarMascota(e) {
    e.preventDefault();
    const nombreMascota = document.getElementById('nombre-mascota').value;
    const tipoMascota = document.getElementById('tipo-mascota').value;
    const vacunado = document.getElementById('vacunas').checked;

    if (nombreMascota && tipoMascota) {
        mostrarMensajeExito("Mascota registrada con éxito!");
        this.reset();
    } else {
        mostrarMensajeError("Por favor, completa todos los campos requeridos.");
    }
}

// Event listeners
document.getElementById('formulario-registro').addEventListener('submit', registrarPropietario);
document.getElementById('formulario-acceso').addEventListener('submit', registrarAcceso);
document.getElementById('formulario-vehiculo').addEventListener('submit', registrarVehiculo);
document.getElementById('formulario-mascotas').addEventListener('submit', registrarMascota);
