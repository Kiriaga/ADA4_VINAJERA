<?php $pagina = 'index'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sitio educativo sobre la evolución y las tecnologías de la Web.">
  <title>Inicio | Evolución de la Web</title>
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/validacion.js" defer></script>
</head>
<body>
  <?php include 'include/header.php'; ?>
  <main class="contenedor">
    <section class="hero">
      <p class="sobrelinea">Desarrollo de aplicaciones web</p>
      <h1>La evolución de la World Wide Web</h1>
      <p>La <strong>World Wide Web</strong> transformó la manera en que las personas consultan información, se comunican y utilizan servicios digitales. Desde sus primeras páginas hasta las aplicaciones actuales, la Web ha evolucionado gracias a nuevos estándares y tecnologías.</p>
      <a class="boton" href="historia.php">Explorar la línea del tiempo</a>
    </section>
    <section class="tarjetas">
      <article class="tarjeta">
        <h2>Una web conectada</h2>
        <p>Los enlaces permiten navegar entre documentos y recursos relacionados, formando una red de información.</p>
      </article>
      <article class="tarjeta">
        <h2>Diseño y estructura</h2>
        <p><em>HTML</em> define el contenido, CSS controla la presentación y JavaScript aporta comportamiento e interactividad.</p>
      </article>
      <article class="tarjeta">
        <h2>Una evolución constante</h2>
        <p>La Web continúa incorporando accesibilidad, seguridad, experiencias móviles e inteligencia artificial.</p>
      </article>
    </section>
    <section class="panel">
      <h2>¿Qué encontrarás en este sitio?</h2>
      <ol>
        <li>Una línea del tiempo con los principales momentos de la evolución web.</li>
        <li>Una explicación breve de tecnologías esenciales.</li>
        <li>Una tabla comparativa de herramientas y sus funciones.</li>
        <li>Un formulario con validación mediante JavaScript.</li>
      </ol>
      <p>Consulta también la documentación del <a href="https://www.w3.org/" target="_blank" rel="noopener noreferrer">World Wide Web Consortium (W3C)</a>, organización que desarrolla estándares para la Web.</p>
    </section>
  </main>
  <?php include 'include/footer.php'; ?>
</body>
</html>