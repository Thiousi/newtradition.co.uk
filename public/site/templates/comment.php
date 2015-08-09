<?php snippet('header') ?>
<section class="post-main grid" role="main">
  <article class="col-3-4 post">
    <h5>Comment</h5>
    <a href="" title="<?php echo html($page->title()) ?>" class="post-title"><h2><?php echo html($page->title()) ?></h2></a>
    <?php if($image = $page->image('hero.jpg')): ?>
      <figure class="post-hero">
        <div class="post-hero-img" style="background-image: url(<?php echo thumb($image, array('width' => 1200, 'height' => 600, 'quality' => 85, 'crop' => true))->url() ?>);"></div>
        <div class="grid">
          <figcaption class="col-3-4 col-3-4-offset"><?php html($image->caption()) ?> This is caption</figcaption>
        </div>
      </figure>
    <?php endif ?>
    <?php echo $page->text()->kirbytext() ?>
    <aside class="post-actions">
      <?php snippet('share') ?>
      <a href="<?php html($site->url()) ?>/journal" class="btn btn-line btn-next">Read more posts</a>
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
    <?php 
      $links = ($page->relatedlinks());
      $links = explode(',',$links);
      $links = array_map('trim',$links);
    ?> 
    <?php if(!$page->relatedlinks()->empty()):?>
    <div class="post-meta sidebar-item">
      <h5>Related Links</h5>
        <ul class="links-list tag-list">
          <?php foreach($links as $link):?>
            <li>
              <a href="http://<?php echo $link ?>" class="tag" target="_blank">
                <?php echo $link ?>
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
<?php snippet('next-post') ?>
<?php snippet('footer') ?>