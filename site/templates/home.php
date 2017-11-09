<?php snippet('header') ?>


<div class="cycles">
    

    <?php 

    $i = 0;
    foreach($pages->visible() as $cycle): ?>
      

    <div>
        <h1><a href="<?= $cycle->url() ?>"><?= $cycle->title()->html() ?></a></h1>
        <p>de <?= $cycle->from() ?> à <?= $cycle->to() ?></h3>
        <?php echo $cycle->text()->kirbytext() ?>
    </div>
    

    <?php endforeach ?>
</div>



<?php snippet('footer') ?>