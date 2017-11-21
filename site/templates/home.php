<?php snippet('header') ?>


<div class="cycles">
    

    <?php 

    $i = 0;
    foreach($pages->visible() as $cycle): ?>
      

    <div class="cycle">
        <h1><a href="<?= $cycle->url() ?>"><?= $cycle->title()->html() ?></a></h1>
        <h2><?= $cycle->soustitre()->html() ?></h2>
	
		<?php if($cycle->affiche() != "") : ?>

        <div class="affiche"><a href="<?= $cycle->url() ?>"><img src="<?= $cycle->url().'/'.$cycle->affiche() ?>"></a></div>

	    <?php endif; ?>
    

        <p>de <?= strftime('%B %Y', $cycle->date(null, 'from')) ?> à <?= strftime('%B %Y', $cycle->date(null, 'to')) ?></p>
        
        <div>
       		 <?php echo $cycle->text()->kirbytext() ?>
        </div>
    </div>
    

    <?php endforeach ?>
</div>



<?php snippet('footer') ?>