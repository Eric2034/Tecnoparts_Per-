<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $contraseña = $_POST['contraseña'];

    // Validaciones
    if (empty($email) || empty($contraseña)) {
        die("Email y contraseña son obligatorios");
    }

    // Buscar usuario
    $stmt = $conn->prepare("SELECT id, nombre, contraseña FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    if (!$usuario || !password_verify($contraseña, $usuario['contraseña'])) {
        die("Credenciales incorrectas");
    }

    // Iniciar sesión
    session_start();
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nombre'] = $usuario['nombre'];

    // Redirigir a área privada
    header("Location:/Index.php");
    exit;
}
?>