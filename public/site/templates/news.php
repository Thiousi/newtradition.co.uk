<?php snippet('header') ?>
<hgroup class="post-head">
  <div class="grid">
    <h5 class="col-1-4">News</h5>
    <h2 class="col-3-4"><?php echo html($page->title()) ?></h2>
  </div>
</hgroup>
<?php if($image = $page->image('hero.jpg')): ?>
  <figure class="post-hero">
    <div class="post-hero-img" style="background-image: url(<?php echo thumb($image, array('width' => 1200, 'height' => 600, 'quality' => 85, 'crop' => true))->url() ?>);"></div>
    <div class="grid">
      <figcaption class="col-3-4 col-3-4-offset"><?php html($image->caption()) ?> This is caption</figcaption>
    </div>
  </figure>
<?php endif ?>
<section class="post-main grid" role="main">
  <article class="col-3-4 post">
    <?php echo $page->text()->kirbytext() ?>
    <aside class="post-actions">
      <?php snippet('share') ?>
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
      <?php 
        $tags=($page->tags());
        $tags=explode(',',$tags);
        $tags=array_map('trim',$tags);
      ?> 
      <?php if($page->tags()):?>
        <ul class="tag-list">
          <?php foreach($tags as $tag):?>
            <li>
              <a href="<?php echo $page->parent()->url() . '/tag:' . $tag ?>" class="tag">
                <?php echo $tag ?>
              </a>
            </li>
            <?php endforeach ?>
        </ul>
      <?php endif ?>
    </div>
  </aside>
  <?php if ($page->comments() == 'on' ): ?>
    <div id="disqus_thread" class="col-3-4 col-3-4-offset comments"></div>
  <?php endif ?>
</section>
<?php snippet('next-post') ?>
<?php snippet('footer') ?>