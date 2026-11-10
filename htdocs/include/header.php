<?php if (!isset($pagina)) $pagina = ''; ?>
<header class="encabezado">
  <div class="contenedor">
    <p class="marca">Evolución de la Web</p>
    <nav class="navegacion" aria-label="Menú principal">
      <a <?php echo ($pagina == 'index') ? 'class="activo"' : ''; ?> href="index.php">Inicio</a>
      <a <?php echo ($pagina == 'historia') ? 'class="activo"' : ''; ?> href="historia.php">Línea del tiempo</a>
      <a <?php echo ($pagina == 'tecnologias') ? 'class="activo"' : ''; ?> href="tecnologias.php">Tecnologías</a>
      <a <?php echo ($pagina == 'recursos') ? 'class="activo"' : ''; ?> href="recursos.php">Recursos</a>
      <a <?php echo ($pagina == 'contacto') ? 'class="activo"' : ''; ?> href="contacto.php">Contacto</a>
      <a <?php echo ($pagina == 'galeria') ? 'class="activo"' : ''; ?> href="galeria.php">Galeria</a>
    </nav>
  </div>
</header>