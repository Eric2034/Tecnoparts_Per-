<?php
require 'config/config.php';
require 'config/database2.php';
$db = new Database();
$con = $db->conectar();

$token = $_GET['token'] ?? '';
$error = '';
$exito = '';

// Verificar token
$sql = $con->prepare("SELECT usuario_id FROM recuperacion_tokens WHERE token = ? AND usado = 0 AND expiracion > NOW()");
$sql->execute([$token]);
$token_valido = $sql->fetch(PDO::FETCH_ASSOC);

if (!$token_valido) {
    $error = "El enlace de recuperación no es válido o ha expirado.";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $token_valido) {
    $nueva_contraseña = $_POST['contraseña'];
    $confirmar_contraseña = $_POST['confirmar_contraseña'];
    
    if ($nueva_contraseña !== $confirmar_contraseña) {
        $error = "Las contraseñas no coinciden.";
    } elseif (strlen($nueva_contraseña) < 8) {
        $error = "La contraseña debe tener al menos 8 caracteres.";
    } else {
        // Actualizar contraseña
        $hash = password_hash($nueva_contraseña, PASSWORD_DEFAULT);
        $sql = $con->prepare("UPDATE usuarios SET contraseña = ? WHERE id = ?");
        $sql->execute([$hash, $token_valido['usuario_id']]);
        
        // Marcar token como usado
        $sql = $con->prepare("UPDATE recuperacion_tokens SET usado = 1 WHERE token = ?");
        $sql->execute([$token]);
        
        $exito = "Tu contraseña ha sido actualizada correctamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Nueva Contraseña</h2>
                        
                        <?php if ($error): ?>
                            <div class="alert alert-danger"><?= $error ?></div>
                        <?php endif; ?>
                        
                        <?php if ($exito): ?>
                            <div class="alert alert-success"><?= $exito ?></div>
                            <div class="text-center">
                                <a href="Index2.php" class="btn btn-primary">Iniciar Sesión</a>
                            </div>
                        <?php elseif ($token_valido): ?>
                            <form method="post">
                                <div class="mb-3">
                                    <label for="contraseña" class="form-label">Nueva Contraseña</label>
                                    <input type="password" class="form-control" id="contraseña" name="contraseña" minlength="8" required>
                                </div>
                                <div class="mb-3">
                                    <label for="confirmar_contraseña" class="form-label">Confirmar Contraseña</label>
                                    <input type="password" class="form-control" id="confirmar_contraseña" name="confirmar_contraseña" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Actualizar Contraseña</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>