<?php snippet('header') ?>
<section class="post-main grid" role="main">
  <article class="col-3-4 post">
    <hgroup class="post-head">
      <h5 class="col-1-4">Comment</h5>
      <h2 class="col-3-4"><?php echo html($page->title()) ?></h2>
    </hgroup>
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
  <?php if ($page->comments() == 'on' ): ?>
    <div id="disqus_thread" class="col-3-4 col-3-4-offset comments"></div>
  <?php endif ?>
</section>
<?php snippet('next-post') ?>
<?php snippet('footer') ?>