<h1>Lista</h1>
<?php foreach($parametres as $new): ?>
<h2><?php echo $new["title"];?></h2>
<p><?php echo $new["description"];?></p>
<p><strong><?php echo $new['img'];?></strong></p>
<?php endforeach; ?>