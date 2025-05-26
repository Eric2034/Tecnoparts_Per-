<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoParts Perú</title>
    <link rel="stylesheet" href="css/Estilo.css">
</head>
<body>

    <header class="header" id="Head">

        <div class="menu contenedor">
            <a href="#" class="logo">Logo</a><input type="checkbox" id="menu"></font>
            <label for="menu">
                <img src="Imagenes/Menuicon.png" class="menu-icon">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#Inicio">Inicio</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#Consultas">Consultas</a></li>
            <?php
            // Inicia la sesión (debe ser lo primero en el archivo)
            session_start();

            // Verifica si hay una sesión activa
            if(isset($_SESSION['usuario_nombre'])) {
                // Si hay sesión, muestra el nombre y opción para cerrar sesión
                echo '<li><a style="color:rgb(255, 255, 255); font-weight: bold;">'.htmlspecialchars($_SESSION['usuario_nombre']).'</a></li>';
                echo '<li><a href="Registro/logout.php" style="color:rgb(77, 74, 74);">Cerrar sesión</a></li>';
            } else {
                // Si no hay sesión, muestra las opciones normales
                echo '<li><a href="Registro/index.php">Registrarse</a></li>';
                echo '<li><a href="Registro/Index2.php">Ingresar</a></li>';
            }
            ?>
                </ul>
            </nav>
        </div>
        <div class="Imag">
            <marquee><img class="M1" src="Imagenes/img1.jpg">,<img class="M2" src="Imagenes/img2.jpg">,<img class="M3" src="Imagenes/img3.jpg"></marquee>
            
        </div>
        <div class="header-content contenedor">

            <h1>TecnoParts Perú</h1>
            <p>
            “TecnoParts Perú — Soluciones en hardware, ensamblaje y actualización
             de computadoras. ¡Calidad y soporte garantizados!”
            </p>
       </div>
    </header>


    <section class="Inicio" id="Inicio">

        <img class="Inicio-img" src="Imagenes/Menu2.jpg" alt="">

        <div class="Inicio-content contenedor">

            <h2>Lo que hacemos</h2>
            <p class="txt-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam, excepturi in? Aspernatur dolorum ut magnam unde natus
                deleniti dignissimos modi illum at. Fugiat reiciendis
                assumenda ratione labore aut voluptas corporis.
            </p>

            <div class="Inicio-group">
                <div class="Inicio-1">
                    <img src="Imagenes/Ensamblaje.jpg">
                    <h3>Ensamblage de PC</h3>
                    <P>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Qui enim voluptatibus quaerat in voluptatum perferendis
                        veniam alias illum neque minus, assumenda quae maxime
                        dolorem quasi consequuntur autem. Quas, cumque fugiat?
                    </P>
                </div>

            </div>
            <a href="#Head" class="btn-1">Ir a inicio</a>
        </div>
    </section>

     <main class="productos" id="productos">
        <div class="productos-content contenedor">
            <h2>Productos para PC</h2>
            <a href="Productos.php" class="btn-1">Productos</a>        
            <main>
        </main>
        </div>

    </main>

    <section class="general">

        <div class="general-1">
            <h2>Instalación de Windous</h2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Accusantium, ullam quis at a hic quisquam molestias,
                temporibus explicabo modi soluta odit culpa veritatis est
                itaque mollitia repellat natus pariatur non.
            </p>
            <a href="#Head" class="btn-1" >Ir a inicio</a>
        </div>
<div class="general-2">
</div>

    </section>

    <section class="general">
        <div class="general-3">
            <style>
                .general-2 {
                    background-image: url(/Imagenes/general-2.png);
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    width: 50%;
                }
                .general-3 {
                    background-image: url(/Imagenes/general-3.jpg);
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    width: 50%;
                }
            </style>

        </div>
        <div class="general-1">
            <h2>Actualizacion para su PC</h2>  
    
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Accusantium, ullam quis at a hic quisquam molestias,
                temporibus explicabo modi soluta odit culpa veritatis est
                itaque mollitia repellat natus pariatur non.
            </p>
            <a href="#Head" class="btn-1" >Ir a inicio</a>
        </div>


    </section>

    <section class="Consultas contenedor" id="Consultas">

        <h2>Consultas y Cotiza</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

        <div class="Consultas-content">
            <div class="Consultas-1">
                <img src="Imagenes/Consultas.png">
                <h3>Consultas</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum cupiditate aliquam repellat, mollitia amet
                    molestias perspiciatis impedit nihil ut harum
                    architecto velit quidem. Autem, id. Cumque recusandae
                        nostrum vel blanditiis!
                </p>
                
            </div>
                
            <div class="Consultas-1">
                <img src="Imagenes/Cotiza.png">
                <h3>Cotiza</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum cupiditate aliquam repellat, mollitia amet
                    molestias perspiciatis impedit nihil ut harum
                    architecto velit quidem. Autem, id. Cumque recusandae
                        nostrum vel blanditiis!
                </p> 
               
            </div>
           
        </div>
        <a href="#Head" class="btn-1">Ir a inicio</a>
    </section>

    <footer class="footer">
        <div class="footer-content contenedor">
            <div class="link">
                <h3>Lorem</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Lorem</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Lorem</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Lorem</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>