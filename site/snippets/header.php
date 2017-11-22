<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?php if($page->url() ==  $site->url() ) : ?>
  <?= css('assets/css/index.css') ?>
  <?php endif; ?>
  
  <?php if($page->css()->value() != "") : ?>
  <?= css( $page->url() .'/'.$page->css()->value() )?>
  <?php endif; ?>


  <?= js('assets/js/jquery.js') ?>
  <!-- <?= js('assets/js/jquery.mousewheel.min.js') ?> -->
  <!-- <?= js('assets/js/popcorn/popcorn.js') ?> -->
  <!-- <?= js('assets/js/script.js') ?> -->


  <?php if($page->js()->value() != "") : ?>
  <?= js( $page->url() .'/'.$page->js()->value() ) ?>
  <?php endif; ?>

</head>
<body>

  