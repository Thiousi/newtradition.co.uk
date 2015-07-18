<?php snippet('header') ?>

<?php if($image = $page->image('hero.jpg')): ?>
  <header class="post-head" style="background-image: url(<?php echo thumb($image, array('width' => 1200, 'quality' => 85))->url() ?>);">
<?php else: ?>
  <header class="post-head">
<?php endif ?>
  <div class="grid">
    <h5 class="col-1-4">Long Read</h5>
    <h2 class="col-3-4"><?php echo html($page->title()) ?></h2>
  </div>
</header>

<section class="post-main grid" role="main">
  <article class="col-3-4 post">
    <?php echo $page->text()->kirbytext() ?>
    <aside class="post-actions">
      <div class="post-share">
        <button class="btn-line btn-share">Share</button>
        <a href="mailto:?subject=<?php echo html($page->title()) ?>&amp;body=<?php echo html($page->title()) ?>: <?php echo html($page->url()) ?>" class="btn btn-line btn-email">Email</a>
        <a href="http://twitter.com/share?url=<?php echo html($page->url()) ?>&text=<?php echo html($page->title()) ?> via @<?php echo html($site->twitter()) ?>:" target="_blank" class="btn btn-line btn-twitter">Twitter</a>
      </div>
      <a href="<?php html($site->url()) ?>/journal" class="btn btn-line btn-next">Read more posts</a>
    </aside>
  </article>
  <aside class="sidebar col-1-4">
    <time class="sidebar-item" datetime="<?php echo $page->date('c') ?>">Published on <?php echo $page->date('d F Y') ?></time>
    <div class="sidebar-item">
      <h5>Written by</h5>
      <?php echo html($page->author()) ?>
    </div>
    <div class="sidebar-item">
      <h5>Tags</h5>
      <?php $tags = $page->tags();?>
      <ul class="tag-list">
        <?php foreach($tags as $tag): ?>
          <li><a href="<?php echo url('#' . $tag)?>" class="tag"><?php echo html($tag) ?></a></li>
        <?php endforeach ?>
      </ul>
    </div>
  </aside>
</section>

<?php snippet('next-post') ?>

<?php snippet('footer') ?>