<?php snippet('header') ?>


<div class="home">
	<h1 class="site-title"><?= $site->title()->html() ?></h1>

	<div class="description">
		<p><?= $site->description()->kirbytext() ?></p>
	</div>

	<div class="cycles">
	    

	    <?php 

	    $i = 0;
	    foreach($pages->visible()->sortBy('date', 'desc') as $cycle): ?>
	      

	    <div class="cycle">
	        <h1><a href="<?= $cycle->url() ?>"><?= $cycle->title()->html() ?></a></h1>
	        <h2><?= $cycle->soustitre()->html() ?></h2>
	        <h3><?= strftime('%B %Y', $cycle->date(null, 'from')) ?> • <?= strftime('%B %Y', $cycle->date(null, 'to')) ?></h3>
			<div class="more"><a href="<?= $cycle->url() ?>">Plus d'informations</a></div>

			<?php if($cycle->affiche() != "") : ?>

	        <div class="affiche"><a href="<?= $cycle->url() ?>"><img src="<?= $cycle->url().'/'.$cycle->affiche() ?>"></a></div>

		    <?php endif; ?>
	    

	        
	        
	        <div>
	       		 <?php echo $cycle->text()->kirbytext() ?>
	        </div>
	    </div>
	    

	    <?php endforeach ?>
	</div>

	<p><?= $site->copyright()->kirbytext() ?></p>
</div>





<?php snippet('footer') ?>