<?php

require 'includes/app.php';

$rss_lector = new RSSLector("https://www.xataka.com.mx/feedburner.xml");
$processed_feed = $rss_lector->process_feed(); //Esto esta mal implementado pero sirve
$news = $processed_feed['news'];
include_template('header', true);

debuguear($news);
?>



<?php foreach ($news as $new) : ?>
  <a href="noticia.html" class="contenedor-noticia">
    <img src="<?php echo $new["img"]?>" alt="ejemplo" type="image/jpeg">
    <div class="info-noticia">
      <h1 class="titulo-noticia"><?php echo $new["title"];?></h1>
      <p class="categoria"><?php echo $new["categories"]; ?></p>
      <p class="fecha-noticia"><?php echo $new["date"]; ?></p>
    </div>
  </a>
<?php endforeach; ?>
