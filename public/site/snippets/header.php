<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> – <?php if ($page->isHomePage()): ?><?php echo $site->subtitle()->html() ?><?php else: ?><?php echo $page->title()->html() ?><?php endif ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <?php echo FTMD::css('main'); ?>
</head>
<body class="<?php echo $page->template() ?>">

  <header class="gbl-head" role="banner">
    <div class="grid">
      <div class="inner">
        <div class="col-1-4 logo"><a href="<?php echo $site->url() ?>">New Tradition</a></div>
        <?php snippet('menu') ?>
      </div>
      <?php if ($page->isHomePage()): ?>
        <h1 class="title col-3-4"><?php echo $site->description()->html() ?></h1>
      <?php else: ?>
        <h1 class="title col-3-4"><?php echo $page->title()->html() ?></h1>
      <?php endif ?>
    </div>
  </header>