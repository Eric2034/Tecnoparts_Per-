<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Registro/css/Estilos.css">
    <title>Registro de Usuario</title>
</head>
<body>
    <div class="Post">
        <form id="formRegistro" action="/Registro/procesar_registro.php" method="POST">
            <div class="Nom">
                <h2>Registrarse</h2> 
            </div>
            
            <div class="campo-formulario">
                <label for="nombre">Nombre completo:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ej: Juan Pérez" required>
            </div>
            
            <div class="campo-formulario">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" placeholder="Ej: usuario@dominio.com" required>
            </div>
            
            <div class="campo-formulario">
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" id="contraseña" placeholder="Mínimo 8 caracteres" minlength="8" required>
            </div>
            
            <div class="campo-formulario">
                <label for="confirmar_contraseña">Confirmar contraseña:</label>
                <input type="password" name="confirmar_contraseña" id="confirmar_contraseña" placeholder="Repite tu contraseña" required>
            </div>
            
            <div class="Boton">
                <button type="submit" id="btn">Registrarse</button>
            </div>
            
            <div class="Descrip">
                <p>
                    ¿Ya tienes una cuenta? <a href="/Registro/Index2.php">Iniciar sesión</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>