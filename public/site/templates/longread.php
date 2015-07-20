<?php snippet('header') ?>

<?php if($image = $page->image('hero.jpg')): ?>
<header class="post-head" style="background-image: url(<?php echo thumb($image, array('width' => 1200, 'quality' => 85))->url() ?>);">
<?php else: ?>
<header class="post-head">
<?php endif ?>
  <div class="grid">
    <aside class="col-1-4">
      <h5>Long Read</h5>
      <time class="sidebar-item" datetime="<?php echo $page->date('c') ?>">Published on <?php echo $page->date('d F Y') ?></time>
        <span class="sidebar-item">Written by <?php echo html($page->author()) ?></span>
    </aside>
    <h2 class="col-3-4"><?php echo html($page->title()) ?></h2>
  </div>
  <div class="post-subhead">
    <div class="grid">
      <figcaption class="col-3-4 col-3-4-offset"><?php html($image->caption()) ?> This is caption</figcaption>
      <h3 class="col-3-4 col-3-4-offset"><?php echo html($page->subtitle()) ?></h3>
    </div>
  </div>
</header>

<section class="post-main grid" role="main">
  <article class="col-3-4 col-3-4-offset post">
    <?php echo $page->text()->kirbytext() ?>
  </article>
  <aside class="col-3-4 col-3-4-offset post-aside">
    <div class="post-actions">
      <?php snippet('share') ?>
      <a href="<?php html($site->url()) ?>/journal" class="btn btn-line btn-next">Read more posts</a>
    </div>
    <?php if ($page->bio() == 'on' ): ?>
      <div class="post-author">

      </div>
    <?php endif ?>
    <div class="post-meta">

    </div>
  </aside>
  <?php if ($page->comments() == 'on' ): ?>
    <div id="disqus_thread" class="col-3-4 col-3-4-offset comments"></div>
  <?php endif ?>
</section>

<?php snippet('next-post') ?>

<?php snippet('footer') ?>