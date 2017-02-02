<ul class="selections">
    <?php foreach($pages->visible() as $item): ?>
      <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>" data-selection="<?php echo  $item->diruri() ?>">
        <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>

        <?php echo $item->text()->kirbytext() ?>
      </li>
    <?php endforeach ?>
</ul>
