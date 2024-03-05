<header class="header-noticia">
    <a href="/public">
        <h1>Feed<span>Burn</span></h1>
    </a>
</header>
<main class="contenedor principal">
    <div class="titulo-noticia">
        <h2><?php echo $noticia->titulo; ?></h2>
    </div>
    <img src="<?php echo $noticia->imagen; ?>" alt="imagen de la noticia" type="image/jpeg">
    <div class="contenido-meta">
        <p><?php echo $noticia->descripcion?></p>
        <p class="fecha"><?php echo $noticia->fecha; ?></p>
    </div>
    <div class="linea"></div>
    <div class="contenido-noticia">
        <p>
            <?php $noticia->descripcion;?>
        </p>
    </div>
</main>