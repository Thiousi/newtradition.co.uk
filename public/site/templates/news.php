<?php snippet('header') ?>
<hgroup class="post-head">
  <div class="grid">
    <h5 class="col-1-4">News</h5>
    <h2 class="col-3-4"><?php echo $page->title()->html() ?></h2>
  </div>
</hgroup>
<?php if(!$page->hero()->empty()): ?>
  <?php $file = $page->hero()->toFile() ?>
  <figure class="post-hero">
    <div class="post-hero-img" style="background-image: url(<?php echo thumb($file, array('width' => 1200, 'height' => 600, 'quality' => 90, 'crop' => true))->url() ?>);"></div>
  </figure>
  <?php if(!$file->caption()->empty()): ?>
  <div class="grid">
    <figcaption class="col-3-4 col-3-4-offset"><?php echo $file->caption() ?></figcaption>
  </div>
  <?php endif ?>
<?php endif ?>
<section class="post-main grid" role="main">
  <article class="col-3-4 post">
    <?php echo $page->text()->kirbytext() ?>
    <aside class="post-actions">
      <?php snippet('share') ?>
      <a href="<?php echo $page->parent()->url() ?>" class="btn btn-line btn-next">Read more posts</a>
    </aside>
  </article>
  <aside class="sidebar col-1-4">
    <div class="post-meta sidebar-item">
      <h5>Date</h5>
      <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('d F Y') ?></time>
    </div>
    <?php if(!$page->author()->empty()): ?>
    <div class="sidebar-item">
      <h5>Written by</h5>
        <?php $author = $page->author();
        echo  $site->user($author)->firstname() . " " .  $site->user($author)->lastname(); ?>
    </div>
    <?php endif ?>
    <?php 
      $tags = ($page->tags());
      $tags = explode(',',$tags);
      $tags = array_map('trim',$tags);
    ?> 
    <?php if(!$page->tags()->empty()):?>
    <div class="post-meta sidebar-item">
      <h5>Tags</h5>
      <ul class="tag-list">
        <?php foreach($tags as $tag):?>
          <li>
            <a href="<?php echo $page->parent()->url() . '/tag:' . $tag ?>" class="tag">
              <?php echo $tag ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
    <?php endif ?>
  </aside>
  <?php if(!$page->relatedlinks()->empty()):?>
  <?php $links = yaml($page->relatedlinks()) ?>
  <div class="col-3-4 col-3-4-offset post-meta sidebar-item">
    <h5>Related Links</h5>
      <ul class="links-list tag-list">
        <?php foreach($links as $link):?>
        <li>
          <a href="<?php echo $link['link'] ?>" class="tag" target="_blank" title="<?php echo $link['title'] ?>">
            <?php echo $link['title'] ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
  </div>
  <?php endif ?>
  <?php if ($page->comments() == '1'): ?>
    <div id="disqus_thread" class="col-3-4 col-3-4-offset comments"></div>
  <?php endif ?>
</section>
<?php if ($page->nextpost() == '1'): ?>
  <?php snippet('next-post') ?>
<?php endif ?>
<?php snippet('footer') ?>