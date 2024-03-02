<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBurn</title>
    <link rel="stylesheet" href=".../../public/build/css/app.css">
</head>

<body>
    <header class="header">
        <a href="index.html">
            <h1>Feed<span>Burn</span></h1>
        </a>
        <form action="#" class="feeds">
            <input class="boton-header" type="button" value="Actualizar">
            <input class="boton-header" type="button" value="Agregar Feed">
            <input class="feed-entrada" type="text" placeholder="Inserte un URL...">
        </form>
    </header>
    <div class="contenedor">
        <div class="contenedor-barra-buscar">
            <form class="barra-buscar" action="">
                <input type="text" placeholder="Buscar Título..." class="texto-buscar">
                <button type="submit" class="boton-buscar">
                    <img src=".../../public/build/img/search.png" width="30" height="30" alt="Buscar">
                </button>
            </form>
        </div>
        <div class="barra-filtros">
            <p>Ordenar por:</p>
            <!-- Filtro por categoría -->
            <select class="select">
                <option value="" disabled selected hidden>Categoría:</option>
                <option value="categoria1">Categoría 1</option>
                <option value="categoria2">Categoría 2</option>
                <option value="categoria3">Categoría 3</option>
            </select>
            <!-- Filtro por URL -->
            <select class="select">
                <option value="" disabled selected hidden>URL:</option>
                <option value="categoria1">Feed 1</option>
                <option value="categoria2">Feed 2</option>
                <option value="categoria3">Feed 3</option>
            </select>
            <!-- Filtro por título -->
            <button onclick="filtrarPorTitulo()">Filtrar por título</button>
            <!-- Filtro por fecha -->
            <button onclick="filtrarPorFecha()">Filtrar por fecha</button>
        </div>

        <?php echo $content ?>

    </div>
    <div class="gotop-container">
        <div class="gotop-btn" id="up">
            <img src=".../../public/build/img/up.png" alt="arrow-up" height="100" width="100">
        </div>
    </div>
    <footer class="footer">
        <h1>Feed<span>Burn</span></h1>
    </footer>
    <script src=".../../public/build/js/bundle.min.js"></script>
</body>

</html>