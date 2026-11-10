<?php $pagina = 'recursos'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Tabla comparativa de tecnologías y recursos web.">
  <title>Recursos | Evolución de la Web</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <?php include 'include/header.php'; ?>
  <main class="contenedor">
    <section class="titulo-pagina">
      <p class="sobrelinea">Consulta</p>
      <h1>Recursos y funciones</h1>
      <p>La tabla resume tecnologías habituales en el desarrollo de sitios y aplicaciones web.</p>
    </section>
    <div class="tabla-contenedor">
      <table>
        <caption>Tabla 1. Tecnologías fundamentales de la Web</caption>
        <thead>
          <tr><th scope="col">Tecnología</th><th scope="col">Función principal</th><th scope="col">Ejemplo de uso</th></tr>
        </thead>
        <tbody>
          <tr><th scope="row">HTML</th><td>Organiza el contenido y su significado.</td><td>Títulos, párrafos, enlaces y formularios.</td></tr>
          <tr><th scope="row">CSS</th><td>Define el aspecto y la distribución visual.</td><td>Colores, menú de navegación y diseño adaptable.</td></tr>
          <tr><th scope="row">JavaScript</th><td>Agrega lógica e interactividad.</td><td>Validación de los datos introducidos en un formulario.</td></tr>
          <tr><th scope="row">HTTP/HTTPS</th><td>Permite la comunicación entre cliente y servidor.</td><td>Solicitar páginas y transmitir recursos.</td></tr>
          <tr><th scope="row">W3C Validator</th><td>Comprueba la conformidad del marcado HTML.</td><td>Detectar errores de sintaxis y estructura.</td></tr>
        </tbody>
        <tfoot>
          <tr><td colspan="3">Fuente: https://www.w3schools.com/.</td></tr>
        </tfoot>
      </table>
    </div>
    <section class="panel">
      <h2>Lista de verificación</h2>
      <ul class="lista-verificacion">
        <li>Comprobar los enlaces internos entre páginas.</li>
        <li>Revisar que la imagen de la línea del tiempo cargue correctamente.</li>
        <li>Probar el formulario con campos vacíos y datos válidos.</li>
        <li>Ejecutar el sitio en distintos tamaños de pantalla.</li>
        <li>Validar el HTML con el <a href="https://validator.w3.org/" target="_blank" rel="noopener noreferrer">validador del W3C</a>.</li>
      </ul>
    </section>
  </main>
  <?php include 'include/footer.php'; ?>
</body>
</html>