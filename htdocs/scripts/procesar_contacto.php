<?php
include '../include/conexion.php';

// Si intentan acceder directamente por la URL (GET), los redirigimos al formulario
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../contacto.php");
    exit;
}

try {
    // Recoger y limpiar los datos del formulario
    $nombre = trim($_POST['nombre'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $edad = filter_var($_POST['edad'], FILTER_VALIDATE_INT);
    $tema = trim($_POST['tema'] ?? '');
    $recomendacion = trim($_POST['recomendacion'] ?? '');
    $comentario = trim($_POST['comentario'] ?? '');
    $acepto = isset($_POST['acepto']) ? true : false;

    // Validaciones de seguridad en el servidor
    $errores = [];

    if (mb_strlen($nombre) < 3) {
        $errores[] = "El nombre debe tener al menos 3 caracteres.";
    }
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no es válido.";
    }
    if ($edad === false || $edad < 15 || $edad > 100) {
        $errores[] = "La edad debe estar entre 15 y 100 años.";
    }
    $temas_validos = ['historia', 'html-css', 'javascript', 'accesibilidad'];
    if (!in_array($tema, $temas_validos)) {
        $errores[] = "Selecciona un tema válido.";
    }
    if (!in_array($recomendacion, ['si', 'no'])) {
        $errores[] = "Selecciona una opción de recomendación válida.";
    }
    if (mb_strlen($comentario) < 10) {
        $errores[] = "El comentario debe tener al menos 10 caracteres.";
    }
    if (!$acepto) {
        $errores[] = "Debes confirmar que la información es correcta.";
    }

    if (empty($errores)) {
        // Inserción segura utilizando una sentencia preparada (previene Inyección SQL)
        $sql = "INSERT INTO contactos (nombre, correo, edad, tema, recomendacion, comentario) 
                VALUES (:nombre, :correo, :edad, :tema, :recomendacion, :comentario)";
        
        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            ':nombre' => $nombre,
            ':correo' => $correo,
            ':edad' => $edad,
            ':tema' => $tema,
            ':recomendacion' => $recomendacion,
            ':comentario' => $comentario
        ]);

        // Redireccionar de vuelta a contacto.php con éxito
        header("Location: ../contacto.php?enviado=1");
        exit;
    } else {
        // Si hay errores, los devolvemos por la URL
        $errorString = urlencode(implode(" | ", $errores));
        header("Location: ../contacto.php?error=$errorString");
        exit;
    }

} catch (PDOException $e) {
    // Manejo de errores de base de datos o conexión
    $errorMsg = urlencode("Error en la base de datos al procesar la solicitud.");
    header("Location: ../contacto.php?error=$errorMsg");
    exit;
}