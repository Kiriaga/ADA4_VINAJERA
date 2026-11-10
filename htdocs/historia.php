<?php $pagina = 'historia'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Línea del tiempo de la evolución de la Web.">
  <title>Línea del tiempo | Evolución de la Web</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <?php include 'include/header.php'; ?>
  <main class="contenedor">
    <section class="titulo-pagina">
      <p class="sobrelinea">Historia</p>
      <h1>Línea del tiempo de la evolución web</h1>
      <p>La siguiente imágen es exactamente la misma que la proporcionada para la Actividad de Aprendizaje 1.</p>
    </section>
    <figure class="linea-tiempo">
      <img src="img/linea-tiempo.jpg" alt="Línea del tiempo gráfica con diez momentos de la evolución de la Web, desde el nacimiento de la World Wide Web entre 1989 y 1991 hasta Web3, inteligencia artificial generativa y WebAssembly en 2022 y actualidad.">
      <figcaption>Línea del tiempo de la evolución Web.</figcaption>
    </figure>
    <section class="panel">
      <h2>Cómo interpretar la línea del tiempo</h2>
      <p>Los hitos muestran cambios en la estructura, el diseño, la seguridad y las capacidades de la Web. La secuencia permite observar cómo pasó de documentos enlazados a experiencias dinámicas y aplicaciones distribuidas.</p>
      <h3>Una evolución acumulativa</h3>
      <p>Las tecnologías nuevas no siempre reemplazan por completo a las anteriores: con frecuencia se apoyan en estándares existentes y amplían sus posibilidades.</p>
    </section>
  </main>
  <?php include 'include/footer.php'; ?>
</body>
</html>