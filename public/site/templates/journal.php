<?php snippet('header') ?>
<?php foreach($site->find('journal')->children()->filterBy('featured', '1')->visible()->sortBy('date', 'desc')->limit(1) as $featured): ?>
  <a href="<?php echo $featured->url() ?>" title="<?php echo html($featured->title()) ?>" class="featured">
    <div class="grid">
      <div class="meta col-1-4">
        <span class="meta-feat">Featured</span>
        <span class="meta-cat h5">
        <?php if ($featured->template() == 'longread'): ?>Long Read
          <?php elseif ($featured->template() == 'news'): ?>News
          <?php elseif ($featured->template() == 'comment'): ?>Comment
        <?php endif ?></span>
      </div>
      <div class="col-3-4">
        <h2><?php echo html($featured->title()) ?></h2>
        <p class="excerpt-lrg"><?php echo $featured->text()->excerpt(150) ?></p>
        <button class="btn-more btn-line btn-small">Read more</button>
      </div>
    </div>
  </a>
<?php endforeach ?>
<section class="grid journal-stream" role="main">
  <div class="col-3-4">
    <h2 class="tag-title"><?php echo $tag ?></h2>
    <?php foreach ($articles as $article): ?>
      <?php $count = 0 ?>
      <a href="<?php echo $article->url() ?>" class="post <?php echo $article->template() ?>">
        <?php if($image = $article->image('hero.jpg')): ?>
          <img class="post-img" src="<?php echo thumb($image, array('width' => 715, 'height' => 300, 'quality' => 75, 'crop' => true))->url() ?>" alt="<?php html($article->title()) ?>">
        <?php endif ?>
        <div class="meta">
          <span class="meta-cat h5"><?php if ($article->template() == 'longread'): ?>Long Read
          <?php elseif ($article->template() == 'news'): ?>News
          <?php elseif ($article->template() == 'comment'): ?>Comment
          <?php endif ?></span>
          <span class="meta-date"><?php echo html($article->date('j F')) ?></span>
        </div>
        <h3><?php echo html($article->title()) ?></h3>
        <p><?php echo $article->text()->excerpt(200) ?></p>
        <button class="btn-more btn-line btn-small">Read more</button>
      </a>
    <?php endforeach ?>
    <? if ($articles->pagination()->hasPages()): ?>
      <ul class="pagination">  
        <? foreach($articles->pagination()->range(6) as $paging): ?>
        <li><a class="btn btn-line btn-circle-sm" href="<?= $articles->pagination()->pageURL($paging); ?>"><?= $paging; ?></a></li>
        <? endforeach ?>
      </ul>
    <? endif; ?>
  </div>
  <aside class="col-1-4 sidebar">
    <div class="sidebar-item">
      <h5>Tags</h5>
      <?php $tags = $page->children()->visible()->pluck('tags', ',', true);?>
      <ul class="tag-list">
        <?php foreach($tags as $tag): ?>
          <li><a href="<?php echo $page->url() . '/tag:' . $tag ?>" class="tag"><?php echo html($tag) ?></a></li>
        <?php endforeach ?>
      </ul>
    </div>
    <div class="sidebar-item">
      <h5>Categories</h5>
      <ul class="cat-list">
        <li><a href="<?php echo $page->url() . '/category:longread' ?>" class="cat">Long Read</a></li>
        <li><a href="<?php echo $page->url() . '/category:news' ?>" class="cat">News</a></li>
        <li><a href="<?php echo $page->url() . '/category:comment' ?>" class="cat">Comment</a></li>
      </ul>
    </div>
  </aside>
</section>
<?php snippet('footer') ?>