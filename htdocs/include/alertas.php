<?php
// include/alertas.php
if (isset($_GET['enviado']) && $_GET['enviado'] == '1'): 
?>
  <div style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #c3e6cb; font-family: inherit;">
    <strong>¡Éxito!</strong> Mensaje enviado y guardado en la base de datos correctamente.
  </div>
<?php endif; ?>

<?php if (isset($_GET['error']) && !empty($_GET['error'])): ?>
  <div style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #f5c6cb; font-family: inherit;">
    <strong>Atención:</strong> <?php echo htmlspecialchars($_GET['error']); ?>
  </div>
<?php endif; ?>