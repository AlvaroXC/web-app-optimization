<?php foreach ($parametres as $new) : ?>
    <a href="Home/find?id=<?php echo $new["ID"]; ?>" class="contenedor-noticia">
        <img src="<?php echo $new["IMAGEN"]; ?>" alt="" type="">
        <div class="info-noticia">
            <h1 class="titulo-noticia"><?php echo $new["TITLE"]; ?></h1>
            <p class="categoria"><?php echo $new["CATEGORIA"]; ?></p>
            <p class="fecha-noticia"><?php echo $new["FECHA"]; ?></p>
        </div>
    </a>
<?php endforeach; ?>