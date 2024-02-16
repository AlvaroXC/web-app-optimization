<?php 

foreach($noticias as $nota) {
    echo "<article>";
    echo "<h2>". $nota["nombre_notica"] ."</h2>";
    echo "<p>". $nota["descripcion"] ."</p>";
    echo "<i>". $nota["autor"] ."</i>";
    echo "</article>";
}
