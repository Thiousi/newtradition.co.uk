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
    </aside>
    <h2 class="col-3-4"><?php echo html($page->title()) ?></h2>
  </div>
  <div class="post-subhead">
    <div class="grid">
      <figcaption class="col-3-4"><?php html($image->caption()) ?> This is caption</figcaption>
      <h3 class="col-3-4"><?php echo html($page->subtitle()) ?></h3>
    </div>
  </div>
</header>

<section class="post-main grid" role="main">
  <article class="col-3-4 post">
    <?php echo $page->text()->kirbytext() ?>
  </article>
  <aside class="col-3-4 post-aside">
    <div class="post-actions">
      <div class="post-share">
        <button class="btn-line btn-share">Share</button>
        <a href="mailto:?subject=<?php echo html($page->title()) ?>&amp;body=<?php echo html($page->title()) ?>: <?php echo html($page->url()) ?>" class="btn btn-line btn-email" title="Share by Email">Share by Email</a>
        <a href="http://twitter.com/share?url=<?php echo html($page->url()) ?>&text=<?php echo html($page->title()) ?> via @<?php echo html($site->twitter()) ?>:" target="_blank" class="btn btn-line btn-twitter" title="Share on Twitter">Share on Twitter</a>
        <a href="http://www.facebook.com/sharer.php?u=<?php echo html($page->url()) ?>" target="blank" class="btn btn-line btn-facebook" title="Share on Facebook">Share on Facebook</a>
      </div>
      <a href="<?php html($site->url()) ?>/journal" class="btn btn-line btn-next">Read more posts</a>
    </div>
    <div class="post-author">

    </div>
    <div class="post-meta">

    </div>
  </aside>
</section>

<?php snippet('next-post') ?>

<?php snippet('footer') ?>