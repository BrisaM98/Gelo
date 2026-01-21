<?php include 'datos.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelo 2026 - Recetas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="barra-navegacion">
        <img src="img/logo.png" alt="Logo Gelo" class="logo-barra">
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#recetas">Recetas</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
        </ul>
    </nav>

    <section id="inicio" class="seccion-inicio">
        <div class="contenedor-logo-principal">
            <img src="img/logo.png" alt="Logo Principal" class="imagen-logo-grande">
        </div>
    </section>

    <section id="recetas" class="seccion-recetas">
        <?php foreach ($categorias as $categoria_nombre => $gelatinas): ?>
            <div class="bloque-categoria">
                <h2 class="titulo-seccion"><?php echo $categoria_nombre; ?></h2>
                <div class="deslizador-contenedor">
                    <button class="flecha-control anterior" onclick="deslizar(this, -1)">&#10094;</button>
                    <div class="contenedor-fila">
                        <?php foreach ($gelatinas as $gelatina): ?>
                            <div class="tarjeta-receta" onclick='abrirModal(<?php echo json_encode($gelatina); ?>)'>
                                <div class="receta-foto-marco">
                                    <img src="<?php echo $gelatina['imagen']; ?>" alt="<?php echo $gelatina['nombre']; ?>">
                                </div>
                                <p class="receta-nombre"><?php echo $gelatina['nombre']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="flecha-control siguiente" onclick="deslizar(this, 1)">&#10095;</button>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section id="nosotros" class="seccion-nosotros">
        <div class="nosotros-flex">
            <div class="nosotros-texto">
                <h2>¿Quiénes somos?</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus.</p>
            </div>
            <div class="nosotros-imagen">
                <img src="img/nosotros.jpg" alt="Nosotros">
            </div>
        </div>
    </section>

    <footer class="pie-pagina">
        <p>Gelo 2026</p>
    </footer>

    <div id="modal-receta" class="capa-modal" onclick="cerrarAlClicarFuera(event)">
        <div class="contenido-modal">
            <div class="modal-layout">
                <div class="modal-foto">
                    <img id="foto-detalle" src="" alt="Imagen de gelatina">
                </div>
                <div class="modal-datos">
                    <h2 id="titulo-detalle"></h2>
                    <h3>Ingredientes</h3>
                    <p id="ingredientes-detalle"></p>
                    <h3>Instrucciones</h3>
                    <p id="instrucciones-detalle"></p>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>