<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $contraseña = $_POST['contraseña'];
    $confirmar_contraseña = $_POST['confirmar_contraseña'];

    // Validaciones
    if (empty($nombre) || empty($email) || empty($contraseña)) {
        die("Todos los campos son obligatorios");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("El email no es válido");
    }

    if ($contraseña !== $confirmar_contraseña) {
        die("Las contraseñas no coinciden");
    }

    if (strlen($contraseña) < 8) {
        die("La contraseña debe tener al menos 8 caracteres");
    }

    // Verificar si el email ya existe
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    
    if ($stmt->rowCount() > 0) {
        die("Este email ya está registrado");
    }

    // Hash de la contraseña
    $hash_contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    // Insertar nuevo usuario
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, contraseña) VALUES (?, ?, ?)");
    $stmt->execute([$nombre, $email, $hash_contraseña]);

    // Redirigir al login
    header("Location:Index2.php?registro=exitoso");
    exit;
}
?>