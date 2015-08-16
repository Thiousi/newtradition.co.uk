<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo html($site->title()) ?> – <?php if ($page->isHomePage()): ?><?php echo html($site->subtitle()) ?><?php else: ?><?php echo $page->title()->html() ?><?php endif ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>">
  <script src="//use.typekit.net/gjw4ybb.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <?php echo FTMD::css('main.min'); ?>
</head>
<body class="preload <?php echo $page->template() ?>">
  <header class="gbl-head" role="banner">
    <div class="grid">
      <div class="head">
        <div class="col-1-4 logo"><a href="<?php echo $site->url() ?>" title="Visit the New Tradition home page">New Tradition</a></div>
        <button class="btn-menu">Menu</button>
        <?php snippet('menu') ?>
      </div>
      <h1 class="title col-3-4">
        <?php if ($page->isHomePage()): ?>
          <?php echo html($site->description()) ?>
        <?php elseif ($page->hasChildren()): ?>
          <?php echo html($page->title()) ?>
        <?php elseif($page->template() == 'who'): ?>
          <?php echo html($page->title()) ?>
        <?php else: ?>
          <a href="<?php echo $page->parent()->url() ?>" title="Back to the parent page">
            <?php echo html($page->parent()->title()) ?>
          </a>
        <?php endif ?>
      </h1>
    </div>
  </header>