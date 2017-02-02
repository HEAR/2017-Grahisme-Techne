<div class="caroussel">
    

    <?php 

    $i = 0;
    foreach($pages->visible() as $item): ?>
      

    	<div id="conf<?php echo $i++; ?>" class="cadre">
			<div class="colorBlock"></div>
			<div class="content">
				<h1><?= $item->title()->html() ?></h1>
				<h3><?= $item->date() ?></h3>
				<?php echo $item->text()->kirbytext() ?>

				<p><strong>—<br>
				10 mars 2016 – 18 h<br>
				Auditorium – HEAR à Strasbourg<br>
				1 rue de l’Académie<br>
				67082 Strasbourg</strong></p>
			</div>
		</div>
    

    <?php endforeach ?>
</div>
