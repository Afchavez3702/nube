<?php
    include('./php/conexion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Formulario</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#nuevo">Agregar Producto</a></li>
        </ul>
    </nav>
    <header>
        <h1>Control de inventario</h1>
    </header>
    <section>
        <div class="form-header">
            <label for="">Buscar producto</label>
            <input type="search" name="buscar" id="buscar" placeholder="Ej, agua enbotellada, manzanas, etc">            <button type="submit">Buscar</button>
        </div>
        <div class="tabla-articulos">
            <table>
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Descripción</td>
                        <td>Cantidad</td>
                        <td>Ubicacion</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="nuevo">
            <form action="./php/guardar.php" method="post" class="nuevo-form">
                <div class="form-header">
                    <h2>Ingresa un producto nuevo.</h2>
                </div>
                <div class="input">
                    <label for="">Descripcion</label>
                    <input type="text" name="articulo" id="articulo">
                </div>
                <div class="input">
                    <label for="">Cantidad disponible</label>
                    <input type="number" name="cantidad" id="cantidad">
                </div>
                <div class="input">
                    <label for="">Gondola</label>
                    <input type="text" name="ubicacion" id="ubicacion">
                </div>
                <div class="input">
                    <button type="submit" class="agregar">Agregar</button>
                </div>

            </form>
        </div>
    </section>
    <footer>
        <p>Andrés Felipe Chávez Cruz &copy;2025</p>
        <p>Crue desarrollado para desplegarse conforme a lo solicitado en el ACA del área Computación en la nube</p>
        <p>ficha 53341/ primer bloque 25v03</p>
        <p>Corporación Unificada Nacional de Educación Superior CUN</p>
    </footer>
</body>
</html>