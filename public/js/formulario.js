var nombre = document.getElementById('nombre');
var apellido = document.getElementById('apellido');
var telefono = document.getElementById('telefono');
var correo = document.getElementById('correo');
var correo2 = document.getElementById('correo2');
var dni = document.getElementById('dni');
var error = document.getElementById('error');

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]{3}$/,
    telefono: /^(6|7)([0-9]){8}$/,
    dni: /^\d{8}[a-zA-Z]$/
}


/**
 * Enviar informacion por AJAX nuevo metodo POST
 * https://developer.mozilla.org/es/docs/Web/API/Fetch_API/Using_Fetch
 *
 * @param {*} url
 * @param {*} data
 * @returns
 */
async function postData(url = '', data = {}) {
    // Opciones por defecto estan marcadas con un *
    const response = await fetch(url, {
      method: 'POST', // *GET, POST, PUT, DELETE, etc.
      mode: 'cors', // no-cors, *cors, same-origin
      cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
      credentials: 'same-origin', // include, *same-origin, omit
      headers: {
        'Content-Type': 'application/json'
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      redirect: 'follow', // manual, *follow, error
      referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
      body: JSON.stringify(data) // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

function validarFormulario() {    
    var mensajesError = [];

    if (nombre.value === null || nombre.value === '') {
        mensajesError.push('Ingresa tu nombre');
    } else if (!expresiones.nombre.test(nombre.value)) {
        mensajesError.push('Formato de nombre invalido');
    }

    if (apellido.value === null || apellido.value === '') {
        mensajesError.push('Ingresa tu apellido')
    } else if (!expresiones.nombre.test(apellido.value)) {
        mensajesError.push('Formato de apellido invalido');
    }

    if (correo.value === null || correo.value === '') {
        mensajesError.push('Ingresa tu correo')
    } else if (!expresiones.correo.test(correo.value)) {
        mensajesError.push('Formato de correo invalido');
    }

    if (correo2.value === null || correo2.value === '') {
        mensajesError.push('Ingresa tu correo')
    } else if (correo.value !== correo2.value) {
        mensajesError.push('Ambos correos deben coincidir');
    }

    if (telefono.value === null || telefono.value === '') {
        mensajesError.push('Ingresa tu móvil')
    } else if (!expresiones.telefono.test(telefono.value)) {
        mensajesError.push('Formato de móvil invalido');
    }

    if (dni.value === null || dni.value === '') {
        mensajesError.push('Ingresa tu dni')
    } else if (expresiones.dni.test(dni.value)) {
        //Se separan los números de la letra
        var letraDNI = dni.value.substring(8, 9).toUpperCase();
        var numDNI = parseInt(dni.value.substring(0, 8));

        //Se calcula la letra correspondiente al número
        var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
        var letraCorrecta = letras[numDNI % 23];

        if (letraDNI != letraCorrecta) {
            mensajesError.push("La letra del DNI es incorrecta");
        }
    } else {
        mensajesError.push('Formato de dni invalido');
    }

    error.innerHTML = mensajesError.join(', ');

    if(mensajesError.length == 0) {

        let datos = {
            "nombre" : nombre.value,
            "apellido" : apellido.value,
            "dni" : dni.value,
            "correo"  : correo.value,
            "telefono" : telefono.value
        };

        postData('/api/contacto', datos)
        .then(data => {
        console.log(data); // JSON data parsed by `data.json()` call
        });
        alert('Formulario Enviado');
    }

    return false;
}
