<header class="header-noticia">
    <a href="index.html">
        <h1>Feed<span>Burn</span></h1>
    </a>
</header>
<main class="contenedor principal">
    <div class="titulo-noticia">
        <h2><?php $noticia->titulo; ?></h2>
    </div>
    <img src="<?php $noticia->imagen; ?>" alt="imagen de la noticia" type="image/jpeg">
    <div class="contenido-meta">
        <p class="autor">Creado Por: Julanito de tal</p>
        <p class="origen">Desde Xataka México</p>
        <p class="fecha"><?php $noticia->fecha; ?></p>
    </div>
    <div class="linea"></div>
    <div class="contenido-noticia">
        <p>
            <?php $noticia->descripcion;?>
        </p>
    </div>
</main>