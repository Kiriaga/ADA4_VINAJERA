'use strict';

document.addEventListener('DOMContentLoaded', () => {
  const formulario = document.getElementById('formulario-contacto');
  if (!formulario) return;

  const campos = {
    nombre: document.getElementById('nombre'),
    correo: document.getElementById('correo'),
    edad: document.getElementById('edad'),
    tema: document.getElementById('tema'),
    comentario: document.getElementById('comentario'),
    acepto: document.getElementById('acepto')
  };
  const resultado = document.getElementById('resultado-formulario');

  function mostrarError(id, mensaje) {
    document.getElementById(`error-${id}`).textContent = mensaje;
  }

  formulario.addEventListener('submit', (evento) => {
    evento.preventDefault();
    let valido = true;
    Object.keys(campos).forEach((id) => mostrarError(id, ''));

    const nombre = campos.nombre.value.trim();
    if (nombre.length < 3) {
      mostrarError('nombre', 'Escribe al menos 3 caracteres.');
      valido = false;
    }

    const correo = campos.correo.value.trim();
    const patronCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
    if (!patronCorreo.test(correo)) {
      mostrarError('correo', 'Introduce un correo electrónico válido.');
      valido = false;
    }

    const edad = Number(campos.edad.value);
    if (!campos.edad.value || !Number.isInteger(edad) || edad < 15 || edad > 100) {
      mostrarError('edad', 'La edad debe ser un número entero entre 15 y 100.');
      valido = false;
    }

    if (!campos.tema.value) {
      mostrarError('tema', 'Selecciona un tema de interés.');
      valido = false;
    }

    if (!formulario.querySelector('input[name="recomendacion"]:checked')) {
      mostrarError('recomendacion', 'Selecciona Sí o No.');
      valido = false;
    }

    if (campos.comentario.value.trim().length < 10) {
      mostrarError('comentario', 'Escribe un comentario de al menos 10 caracteres.');
      valido = false;
    }

    if (!campos.acepto.checked) {
      mostrarError('acepto', 'Debes confirmar la información para continuar.');
      valido = false;
    }

    if (valido) {
      resultado.textContent = 'Validación correcta. Enviando datos a la base de datos...';
      resultado.style.color = '#17613b';
      
      // Permite que el formulario continúe su envío por POST hacia procesar_contacto.php
      formulario.submit(); 
    } else {
      resultado.textContent = 'Revisa los campos señalados antes de continuar.';
      resultado.style.color = '#a21d2d';
      const primerError = formulario.querySelector('.error:not(:empty)');
      if (primerError) {
        const campo = primerError.id.replace('error-', '');
        const elemento = campos[campo] || formulario.querySelector('input[name="recomendacion"]');
        if (elemento) elemento.focus();
      }
    }
  });

  formulario.addEventListener('input', () => {
    resultado.textContent = '';
  });
});
