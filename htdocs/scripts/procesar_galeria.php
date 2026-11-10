<?php
include '../include/conexion.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../galeria.php");
    exit;
}

try {
    $titulo = trim($_POST['titulo'] ?? '');
    $descripcion = trim($_POST['descripcion'] ?? '');
    
    // Validaciones básicas
    if (empty($titulo) || empty($descripcion)) {
        header("Location: ../galeria.php?error=" . urlencode("El título y la descripción son obligatorios."));
        exit;
    }

    // Validar y procesar la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['imagen']['tmp_name'];
        $fileName = $_FILES['imagen']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Extensiones permitidas
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];

        if (in_array($fileExtension, $allowedExtensions)) {
            // Crear carpeta uploads si no existe en la raíz
            $uploadFileDir = '../uploads/';
            if (!is_dir($uploadFileDir)) {
                mkdir($uploadFileDir, 0755, true);
            }

            // Generar un nombre único para evitar que se sobrescriban archivos
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $dest_path = $uploadFileDir . $newFileName;
            $db_path = 'uploads/' . $newFileName; // Ruta que se guarda en la BD

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Guardar en la base de datos
                $sql = "INSERT INTO galeria (titulo, descripcion, imagen) VALUES (:titulo, :descripcion, :imagen)";
                $stmt = $conexion->prepare($sql);
                $stmt->execute([
                    ':titulo' => $titulo,
                    ':descripcion' => $descripcion,
                    ':imagen' => $db_path
                ]);

                header("Location: ../galeria.php?enviado=1");
                exit;
            } else {
                header("Location: ../galeria.php?error=" . urlencode("Error al mover la imagen al servidor."));
                exit;
            }
        } else {
            header("Location: ../galeria.php?error=" . urlencode("Formato de imagen no permitido. Usa JPG, PNG o WEBP."));
            exit;
        }
    } else {
        header("Location: ../galeria.php?error=" . urlencode("Selecciona una imagen válida."));
        exit;
    }

} catch (PDOException $e) {
    // Aquí es donde atrapa correctamente cualquier error de la base de datos
    header("Location: ../galeria.php?error=" . urlencode("Error de conexión a la base de datos."));
    exit;
}