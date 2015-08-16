<?php snippet('header') ?>
<section class="post-main grid" role="main">
  <article class="col-3-4 post">
    <h5>Comment</h5>
    <a href="<?php echo $page->titleurl() ?>" title="<?php echo $page->title()->html() ?>" class="post-title" target="_blank"><h2><?php echo $page->title()->html() ?></h2></a>
    <?php if(!$page->hero()->empty()): ?>
      <?php $file = $page->hero()->toFile() ?>
      <figure class="post-hero">
        <div class="post-hero-img" style="background-image: url(<?php echo thumb($file, array('width' => 1200, 'height' => 600, 'quality' => 85, 'crop' => true))->url() ?>);"></div>
        <div class="grid">
          <figcaption class="col-3-4 col-3-4-offset"><?php echo $file->caption() ?></figcaption>
        </div>
      </figure>
    <?php endif ?>
    <?php echo $page->text()->kirbytext() ?>
    <aside class="post-actions">
      <?php snippet('share') ?>
      <a href="<?php echo $page->parent()->url() ?>" class="btn btn-line btn-next">Read more posts</a>
    </aside>
    <aside class="sidebar">
    <div class="sidebar-item col-1-2">
      <h5>Date</h5>
      <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('d F Y') ?></time>
    </div>
    <?php if(!$page->author()->empty()): ?>
    <div class="sidebar-item col-1-2">
      <h5>Written by</h5>
      <?php $author = $page->author();
      echo  $site->user($author)->firstname() . " " .  $site->user($author)->lastname(); ?>
    </div>
    <?php endif ?>
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
  </article>
  <?php if ($page->comments() == '1'): ?>
    <div id="disqus_thread" class="col-3-4 col-3-4-offset comments"></div>
  <?php endif ?>
</section>
<?php if ($page->nextpost() == '1'): ?>
  <?php snippet('next-post') ?>
<?php endif ?>
<?php snippet('footer') ?>