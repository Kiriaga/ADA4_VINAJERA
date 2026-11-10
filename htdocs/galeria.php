<?php 
$pagina = 'galeria'; // Para marcar activo en el menú

// Conexión centralizada
include 'include/conexion.php';

try {
    $stmt = $conexion->query("SELECT * FROM galeria ORDER BY id DESC");
    $imagenes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $imagenes = [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Galería comunitaria de la Evolución de la Web.">
  <title>Galería | Evolución de la Web</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <?php include 'include/header.php'; ?>
  
  <main class="contenedor">
    <section class="titulo-pagina">
      <p class="sobrelinea">Comunidad</p>
      <h1>Galería de imágenes</h1>
      <p>Sube tu aporte visual relacionado con la historia y tecnologías de la Web.</p>
    </section>

    <!-- Alertas universales -->
    <?php include 'include/alertas.php'; ?>

    <!-- Formulario para subir imágenes -->
    <section class="panel" style="margin-bottom: 30px;">
      <h2>Subir nueva imagen</h2>
      <form action="scripts/procesar_galeria.php" method="POST" enctype="multipart/form-data" class="formulario" style="max-width: 100%;">
        <div class="campo">
          <label for="titulo">Título de la imagen</label>
          <input id="titulo" name="titulo" type="text" required>
        </div>
        <div class="campo">
          <label for="descripcion">Descripción</label>
          <textarea id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="campo">
          <label for="imagen">Seleccionar archivo de imagen</label>
          <input id="imagen" name="imagen" type="file" accept="image/png, image/jpeg, image/webp" required>
        </div>
        <button class="boton" type="submit">Subir a la galería</button>
      </form>
    </section>

    <!-- Contenedor de la Galería (Imagen izquierda, Texto derecha) -->
    <section class="galeria-contenedor">
      <h2>Aportes de la comunidad</h2>
      <?php if (empty($imagenes)): ?>
        <p>Aún no hay imágenes en la galería. ¡Sé el primero en subir una!</p>
      <?php else: ?>
        <div style="display: flex; flex-direction: column; gap: 20px; margin-top: 20px;">
          <?php foreach ($imagenes as $img): ?>
            <div class="tarjeta-galeria" style="display: flex; flex-wrap: wrap; background: white; border: 1px solid var(--borde); border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
              <!-- Imagen a la izquierda -->
              <div style="flex: 1; min-width: 280px; max-width: 400px; background: #000;">
                <img src="<?php echo htmlspecialchars($img['imagen']); ?>" alt="<?php echo htmlspecialchars($img['titulo']); ?>" style="width: 100%; height: 100%; object-fit: cover; display: block;">
              </div>
              <!-- Título y descripción a la derecha -->
              <div style="flex: 2; padding: 24px; display: flex; flex-direction: column; justify-content: center;">
                <h3 style="margin-top: 0; color: var(--azul-oscuro); font-size: 1.4rem;"><?php echo htmlspecialchars($img['titulo']); ?></h3>
                <p style="color: var(--texto); margin-bottom: 10px;"><?php echo nl2br(htmlspecialchars($img['descripcion'])); ?></p>
                <small style="color: var(--muted);">Subido el: <?php echo $img['fecha']; ?></small>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </section>
  </main>

  <?php include 'include/footer.php'; ?>
</body>
</html>