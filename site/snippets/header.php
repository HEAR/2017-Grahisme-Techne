<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!-- <?= css('assets/css/index.css') ?> -->
  
  <?= css( $page->url() .'/'.$page->css()->value() )?>



  <?= js('assets/js/jquery.js') ?>
  <!-- <?= js('assets/js/jquery.mousewheel.min.js') ?> -->
  <!-- <?= js('assets/js/popcorn/popcorn.js') ?> -->

  <!-- <?= js('assets/js/script.js') ?> -->

  <?= js( $page->url() .'/'.$page->js()->value() ) ?>

</head>
<body>

  