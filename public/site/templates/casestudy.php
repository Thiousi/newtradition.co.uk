<?php snippet('header') ?>
<header class="post-head">
  <div class="grid">
    <h5>Case Study</h5>
    <h2><?php echo $page->title() ?></h2>
    <h3><?php echo $page->project() ?></h3>
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
<?php if(!$page->gallery()->empty()): ?>
  <section class="gallery-wrap">
    <ul class="gallery">
      <?php $filenames = $page->gallery()->split(',');
        if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
        $files = call_user_func_array(array($page->files(), 'find'), $filenames); ?>
      <?php foreach($files as $image): ?>
      <li class="gallery-item">
        <img src="<?php echo $image->url() ?>" alt="">
      </li>
      <?php endforeach ?>
    </ul>
  </section>
<?php endif ?>
<section class="post-main grid" role="main">
  <article class="post">
    <?php echo $page->text()->kirbytext() ?>
    <?php 
      $disciplines = ($page->disciplines());
      $disciplines = explode(',',$disciplines);
      $disciplines = array_map('trim',$disciplines);
    ?> 
    <?php if(!$page->disciplines()->empty()):?>
    <aside class="skills-table-wrap">
      <h5>Disciplines</h5>
      <ul class="skills-table">
        <?php foreach($disciplines as $discipline):?>
        <li><?php echo $discipline ?></li>
        <?php endforeach ?>
      </ul>
    </aside>
    <?php endif ?>
    <aside class="post-actions">
      <?php snippet('share') ?>
    </aside>
  </article>
</section>
<?php snippet('next-casestudy') ?>
<?php snippet('footer') ?>