// Función para mostrar un mensaje de éxito al ingresar
function mostrarMensajeExito() {
    alert("Ingreso exitoso!");
}

// Función para mostrar un mensaje de error al ingresar
function mostrarMensajeError() {
    alert("Error en el ingreso. Por favor, intente nuevamente.");
}

// Event listener para el botón de ingreso
document.getElementById('btn-ingreso')?.addEventListener('click', function() {
    // Aquí se ejecutaría el código para verificar el ingreso
    // Por ahora, solo mostramos un mensaje aleatorio
    const random = Math.random();
    if (random > 0.5) {
        mostrarMensajeExito();
    } else {
        mostrarMensajeError();
    }
});

// Función para registrar propietarios/residentes
function registrarPropietario(residente) {
    const lista = document.getElementById('lista-propietarios');
    const item = document.createElement('li');
    item.textContent = residente;
    lista.appendChild(item);
}

// Event listener para el formulario de registro de propietarios
document.getElementById('formulario-registro-propietarios')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const nombre = this.nombre_propietario.value;
    const residencia = this.residencia.value;
    const notas = this.notas.value;

    registrarPropietario(`${nombre} - ${residencia} - ${notas}`);
    this.reset();
});

// Función para agregar mascotas
function agregarMascota(nombre, tipo) {
    const listaMascotas = document.getElementById('lista-mascotas');
    const item = document.createElement('li');
    item.textContent = `${nombre} (${tipo})`;
    listaMascotas.appendChild(item);
}

// Event listener para el formulario de registro de mascotas
document.getElementById('formulario-mascotas')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const nombre = this.nombre_mascota.value;
    const tipo = this.tipo_mascota.value;

    agregarMascota(nombre, tipo);
    this.reset();
});

// Validación del formulario de registro de propietarios/residentes
document.getElementById('formulario-registro')?.addEventListener('submit', function(e) {
    e.preventDefault(); // Prevenir envío del formulario

    if (!this.checkValidity()) {
        // Si hay campos sin llenar, se mostrarán advertencias nativas del navegador
        alert("Por favor, completa todos los campos requeridos en el formulario de Propietarios.");
    } else {
        alert("Propietario registrado exitosamente.");
    }
});

// Validación del formulario de ingreso de vehículos
document.getElementById('formulario-vehiculos')?.addEventListener('submit', function(e) {
    e.preventDefault();

    if (!this.checkValidity()) {
        alert("Por favor, completa todos los campos requeridos en el formulario de Vehículos.");
    } else {
        alert("Ingreso de vehículo registrado exitosamente.");
    }
});

// Validación del formulario de control de vehículos (ingreso y salida)
document.getElementById('formulario-control-vehiculos')?.addEventListener('submit', function(e) {
    e.preventDefault();

    if (!this.checkValidity()) {
        alert("Por favor, completa todos los campos requeridos en el formulario de Control de Vehículos (Ingreso/Salida).");
    } else {
        alert("Registro de control de vehículo exitoso.");
    }
});

// Validación del formulario de registro de propietarios/residentes
document.getElementById('formulario-registro-propietarios')?.addEventListener('submit', function(e) {
    e.preventDefault();

    if (!this.checkValidity()) {
        alert("Por favor, completa todos los campos requeridos en el formulario de Registro de Propietarios.");
    } else {
        const nombre = this.nombre_propietario.value;
        const residencia = this.residencia.value;
        const notas = this.notas.value;

        registrarPropietario(`${nombre} - ${residencia} - ${notas}`);
        this.reset();
    }
});

// Validación del formulario de registro de mascotas
document.getElementById('formulario-mascotas')?.addEventListener('submit', function(e) {
    e.preventDefault();

    if (!this.checkValidity()) {
        alert("Por favor, completa todos los campos requeridos en el formulario de Mascotas.");
    } else {
        const nombre = this.nombre_mascota.value;
        const tipo = this.tipo_mascota.value;

        agregarMascota(nombre, tipo);
        this.reset();
    }
});