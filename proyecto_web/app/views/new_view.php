<main class="contenedor principal">
    <div class="titulo-noticia">
        <h2><?php echo $parametres["TITLE"]; ?></h2>
    </div>
    <img src="<?php echo $parametres["IMAGEN"]; ?>" alt="ejemplo" type="image/jpeg">
    <div class="contenido-meta">
        <!--<p class="autor">Creado Por: Julanito de tal</p>-->
        <!--<p class="origen">Desde Xataka México</p>-->
        <p class="fecha"><?php echo $parametres["DATE"]; ?></p>
    </div>
    <div class="linea"></div>
    <div class="contenido-noticia">
        <?php echo $parametres["DESCRIPTION"]; ?>
    </div>
</main>