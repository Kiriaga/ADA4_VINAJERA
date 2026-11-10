<?php $pagina = 'contacto'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Formulario de contacto con validación JavaScript.">
  <title>Contacto | Evolución de la Web</title>
  <link rel="stylesheet" href="/css/estilos.css">
  <script src="js/validacion.js" defer></script>
</head>
<body>
  <?php include 'include/header.php'; ?>
  <main class="contenedor">
    <section class="titulo-pagina">
      <p class="sobrelinea">Participa</p>
      <h1>Formulario de contacto</h1>
      <p>Completa los controles. JavaScript revisará los datos antes de mostrar la confirmación local.</p>
    </section>
    <?php include 'include/alertas.php'; ?>
    <form id="formulario-contacto" class="formulario" action="scripts/procesar_contacto.php" method="POST" novalidate>
      <div class="campo">
        <label for="nombre">Nombre completo</label>
        <input id="nombre" name="nombre" type="text" autocomplete="name" minlength="3" required>
        <small class="error" id="error-nombre"></small>
      </div>
      <div class="campo">
        <label for="correo">Correo electrónico</label>
        <input id="correo" name="correo" type="email" autocomplete="email" required>
        <small class="error" id="error-correo"></small>
      </div>
      <div class="campo">
        <label for="edad">Edad</label>
        <input id="edad" name="edad" type="number" min="15" max="100" required>
        <small class="error" id="error-edad"></small>
      </div>
      <div class="campo">
        <label for="tema">Tema de interés</label>
        <select id="tema" name="tema" required>
          <option value="">Selecciona una opción</option>
          <option value="historia">Historia de la Web</option>
          <option value="html-css">HTML y CSS</option>
          <option value="javascript">JavaScript</option>
          <option value="accesibilidad">Accesibilidad</option>
        </select>
        <small class="error" id="error-tema"></small>
      </div>
      <fieldset class="campo opciones">
        <legend>¿Recomendarías este sitio?</legend>
        <label><input type="radio" name="recomendacion" value="si" required> Sí</label>
        <label><input type="radio" name="recomendacion" value="no"> No</label>
        <small class="error" id="error-recomendacion"></small>
      </fieldset>
      <div class="campo">
        <label for="comentario">Comentario (mínimo 10 caracteres)</label>
        <textarea id="comentario" name="comentario" rows="5" minlength="10" required></textarea>
        <small class="error" id="error-comentario"></small>
      </div>
      <div class="campo check">
        <label><input id="acepto" name="acepto" type="checkbox" required> Confirmo que la información proporcionada es correcta.</label>
        <small class="error" id="error-acepto"></small>
      </div>
      <button class="boton" type="submit">Validar formulario</button>
      <p id="resultado-formulario" class="resultado" role="status" aria-live="polite"></p>
    </form>
  </main>
  <?php include 'include/footer.php'; ?>
</body>
</html>