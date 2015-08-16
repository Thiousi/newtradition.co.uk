<?php snippet('header') ?>
<?php $file = $page->hero()->toFile() ?>
<header class="post-head" style="background-image: url(<?php echo thumb($file, array('width' => 1200, 'quality' => 85))->url() ?>);">
  <div class="grid">
    <aside class="col-1-4">
      <h5>Long Read</h5>
      <time class="sidebar-item" datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('d F Y') ?></time>
      <?php if(!$page->author()->empty()): ?>
        <span class="sidebar-item">
        <?php $author = $page->author();
        echo  $site->user($author)->firstname() . " " .  $site->user($author)->lastname(); ?></span>
      <?php endif ?>
    </aside>
    <h2 class="col-3-4"><?php echo $page->title()->html() ?></h2>
  </div>
  <div class="post-subhead">
    <div class="grid">
      <?php if(!$file->caption()->empty()): ?>
        <figcaption class="col-3-4 col-3-4-offset"> <?php echo $file->caption() ?></figcaption>
      <?php endif ?>
      <h3 class="col-3-4 col-3-4-offset"><?php echo $page->summary()->html() ?></h3>
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
      <a href="<?php echo $page->parent()->url() ?>" class="btn btn-line btn-next">Read more posts</a>
    </div>
    <?php 
        $links = ($page->links());
        $links = explode(',',$links);
        $links = array_map('trim',$links);
      ?> 
    <?php if(!$page->links()->empty()):?>
    <div class="post-meta">
      <h5>Related Links</h5>
      <ul class="link-list">
        <?php foreach($links as $link):?>
        <li>
          <a href="<?php echo $page->$link()->url() ?>" class="link">
            <?php echo $link ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
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
    <div class="post-meta">
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
  <?php if ($page->comments() == '1'): ?>
    <div id="disqus_thread" class="col-3-4 col-3-4-offset comments"></div>
  <?php endif ?>
</section>
<?php if ($page->nextpost() == '1'): ?>
  <?php snippet('next-post') ?>
<?php endif ?>
<?php snippet('footer') ?>