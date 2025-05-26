<?php
// Iniciar sesión al principio del archivo
session_start();

require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Online</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/Esti.css" rel="stylesheet">
  <style>
    .nav-user {
      color: #fff !important;
      font-weight: bold;
    }
    .nav-logout {
      color: #ccc !important;
    }
    .nav-logout:hover {
      color: #fff !important;
    }
  </style>
</head>

<body class="d-flex flex-column h-100">
  <!--Barra de navegación-->
  <header>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="Index.php" class="navbar-brand">
          <strong>Tienda Online</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarHeader">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="/Index.php">Ir al inicio</a>
            </li>
            <li class="nav-item">
            </li>
          </ul>
          
          <ul class="navbar-nav mb-2 mb-lg-0">
            <?php if(isset($_SESSION['usuario_nombre'])): ?>
              <li class="nav-item">
                <span class="nav-link nav-user"><?= htmlspecialchars($_SESSION['usuario_nombre']) ?></span>
              </li>
              <li class="nav-item">
                <a href="Registro/logout.php" class="nav-link nav-logout">Cerrar sesión</a>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a href="Registro/index.php" class="nav-link">Registrarse</a>
              </li>
              <li class="nav-item">
                <a href="Registro/Index2.php" class="nav-link">Ingresar</a>
              </li>
            <?php endif; ?>
          </ul>
          
          <a href="#" class="btn btn-primary ms-3">Carrito</a>
        </div>
      </div>
    </div>
  </header>

  <!--Contenido-->
  <main class="flex-shrink-0">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-6">
        <?php foreach($resultado as $row): 
          $id = $row['id'];
          $imagen = "Imagenes/Producto/$id/principal.jpg";
          if (!file_exists($imagen)) {
            $imagen = "Imagenes/Consultas.png";
          }
        ?>
        <div class="col">
          <div class="card w-100 shadow-sm">
            <img src="<?= $imagen ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?= $row['nombre'] ?></h5>
              <p class="card-text">S/ <?= number_format($row['precio'], 2, '.', ',') ?></p>
              <div id="Cre">
                <div class="btn-group">
                </div>
                <a href="#" id="btn-success">Agregar</a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>