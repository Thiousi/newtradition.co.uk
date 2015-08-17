<?php snippet('header') ?>
<header class="post-head">
  <div class="grid">
    <h5>Case Study</h5>
    <h2><?php echo $page->title()->html() ?></h2>
    <h3><?php echo $page->client()->html() ?></h3>
  </div>
</header>
<?php if(!$page->hero()->empty()): ?>
  <?php $file = $page->hero()->toFile() ?>
  <figure class="post-hero">
    <div class="post-hero-img" style="background-image: url(<?php echo thumb($file, array('width' => 1200, 'height' => 600, 'quality' => 90, 'crop' => true))->url() ?>);"></div>
    <?php if(!$file->caption()->empty()): ?>
    <div class="grid">
      <figcaption class="col-3-4 col-3-4-offset"><?php echo $file->caption() ?></figcaption>
    </div>
    <?php endif ?>
  </figure>
<?php endif ?>

<?php snippet('footer') ?>