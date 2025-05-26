<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Registro/css/Estilos.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="Post">
        <form id="formLogin" action="/Registro/procesar_login.php" method="POST">
            <div class="Nom">
                <h2>Iniciar Sesión</h2>
            </div>
            
            <div class="campo-formulario">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" placeholder="Ej: usuario@dominio.com" required>
            </div>
            
            <div class="campo-formulario">
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" id="contraseña" placeholder="Ingresa tu contraseña" required>
            </div>
            
            <div class="Boton">
                <button type="submit" id="btn">Iniciar sesión</button>
            </div>
            
            <div class="opciones-adicionales">
                <div class="recordar">
                    <input type="checkbox" id="recordar" name="recordar">
                    <label for="recordar">Recordar mi sesión</label>
                </div>
                <a href="/Registro/recuperar.php" class="olvido">¿Olvidaste tu contraseña?</a>
            </div>
            
            <div class="Descrip">
                <p>¿No tienes cuenta? <a href="/Registro/Index.php">Crea una</a></p>
            </div>
        </form>
    </div> 
</body>
</html>