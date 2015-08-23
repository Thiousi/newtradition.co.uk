<?php snippet('header') ?>
<header class="post-head">
  <div class="grid">
    <h5>Case Study</h5>
    <h2><?php echo $page->title() ?></h2>
    <h3><?php echo $page->client() ?></h3>
  </div>
</header>
<?php if(!$page->hero()->empty()): ?>
  <?php $file = $page->hero()->toFile() ?>
  <figure class="post-hero">
    <div class="post-hero-img" style="background-image: url(<?php echo thumb($file, array('width' => 1200, 'height' => 600, 'quality' => 90, 'crop' => true))->url() ?>);"></div>
  </figure>
<?php endif ?>
<?php if(!$page->summary()->empty()): ?>
  <section class="post-summary">
    <div class="grid">
      <h3 class="summary"><?php echo $page->summary()->kirbytext() ?></h3>
    </div>
  </section>
<?php endif ?>
<section class="post-main grid" role="main">
  <article class="post">
    <?php echo $page->text()->kirbytext() ?>
    <aside class="post-actions">
      <?php snippet('share') ?>
    </aside>
  </article>
</section>
<?php snippet('next-casestudy') ?>
<?php snippet('footer') ?>