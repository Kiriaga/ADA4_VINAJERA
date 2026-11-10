<?php $pagina = 'tecnologias'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Tecnologías principales para construir sitios web.">
  <title>Tecnologías | Evolución de la Web</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <?php include 'include/header.php'; ?>
  <main class="contenedor">
    <section class="titulo-pagina">
      <p class="sobrelinea">Fundamentos</p>
      <h1>Tecnologías esenciales</h1>
      <p>Un sitio web combina estructura, presentación y comportamiento para ofrecer una experiencia útil.</p>
    </section>
    <section class="panel">
      <h2>Las tres tecnologías básicas</h2>
      <h3>1. HTML: estructura y significado</h3>
      <p><strong>HTML</strong> organiza el contenido mediante elementos semánticos como encabezados, párrafos, listas, tablas, enlaces y formularios.</p>
      <h3>2. CSS: presentación visual</h3>
      <p><strong>CSS</strong> controla colores, tipografía, distribución y adaptación a diferentes pantallas. También permite crear menús interactivos mediante selectores como <code>:hover</code> y <code>:focus-visible</code>, sin depender de imágenes.</p>
      <h3>3. JavaScript: comportamiento</h3>
      <p><strong>JavaScript</strong> permite validar datos, responder a acciones y actualizar el contenido. En este sitio se utiliza para revisar los controles del formulario de contacto.</p>
    </section>
    <section class="tarjetas">
      <article class="tarjeta">
        <h2>Accesibilidad</h2>
        <p>Usar etiquetas semánticas, textos alternativos y controles accesibles facilita el uso del sitio a más personas.</p>
      </article>
      <article class="tarjeta">
        <h2>Diseño adaptable</h2>
        <p>Las reglas CSS responsivas permiten que el contenido se acomode a teléfonos, tabletas y computadoras.</p>
      </article>
    </section>
    <p class="nota">Recurso externo: consulta la guía de <a href="https://developer.mozilla.org/es/docs/Learn_web_development" target="_blank" rel="noopener noreferrer">aprendizaje de desarrollo web de MDN</a>.</p>
  </main>
  <?php include 'include/footer.php'; ?>
</body>
</html>