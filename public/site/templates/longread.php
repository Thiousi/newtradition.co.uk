<?php snippet('header') ?>
<?php if($image = $page->image('hero.jpg')): ?>
<header class="post-head" style="background-image: url(<?php echo thumb($image, array('width' => 1200, 'quality' => 85))->url() ?>);">
<?php else: ?>
<header class="post-head">
<?php endif ?>
  <div class="grid">
    <aside class="col-1-4">
      <h5>Long Read</h5>
      <time class="sidebar-item" datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('d F Y') ?></time>
        <?php $author = $pages->find('authors/' . $page->author()) ?>
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
    <?php if ($page->bio() == '1'): ?>
      <div class="bio-short">
        <h5>Author</h5>
        <span class="bio-avatar" style="background-image: url(<?php echo $author->images()->first()->url() ?>);"></span>
        <h4 class="bio-name"><?php echo $author->name() ?></h4>
        <p class="bio-excerpt"><?php echo $author->bio() ?></p>
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
              <a href="" class="tag">
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
<?php snippet('next-post') ?>
<?php snippet('footer') ?>