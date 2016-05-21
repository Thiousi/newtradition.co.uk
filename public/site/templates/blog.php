<?php snippet('header') ?>
<?php foreach($page->children()->filterBy('featured', '1')->visible()->sortBy('date', 'desc')->limit(1) as $featured): ?>
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
        <?php if(!$featured->excerpt()->empty()): ?>
          <p class="excerpt-lrg"><?php echo $featured->excerpt()->excerpt(150) ?></p>
        <?php else: ?>
          <p class="excerpt-lrg"><?php echo $featured->text()->excerpt(150) ?></p>
        <?php endif ?>
        <button class="btn-more btn-line btn-small">Read more</button>
      </div>
    </div>
  </a>
<?php endforeach ?>
<section class="grid blog-stream" role="main">
  <div class="col-3-4">
    <h2 class="tag-title tag"><?php echo $tag ?></h2>
    <?php foreach ($articles as $article): ?>
      <?php $count = 0 ?>
      <a href="<?php echo $article->url() ?>" class="post <?php echo $article->template() ?>">
        <?php if(!$article->hero()->empty()): ?>
          <?php $file = $article->hero()->toFile() ?>
          <img class="post-img" src="<?php echo thumb($file, array('width' => 715, 'height' => 300, 'quality' => 75, 'crop' => true))->url() ?>" alt="<?php $article->title()->html() ?>">
        <?php endif; ?>
        <div class="meta">
          <span class="meta-cat h5"><?php if ($article->template() == 'longread'): ?>Long Read
          <?php elseif ($article->template() == 'news'): ?>News
          <?php elseif ($article->template() == 'comment'): ?>Comment
          <?php endif ?></span>
          <span class="meta-date"><?php echo html($article->date('j F')) ?></span>
        </div>
        <h3><?php echo html($article->title()) ?></h3>
        <?php if(!$article->excerpt()->empty()): ?>
          <p><?php echo $article->excerpt() ?></p>
        <?php else: ?>
          <p><?php echo $article->text()->excerpt(200) ?></p>
        <?php endif ?>
        <button class="btn-more btn-line btn-small">Read more</button>
      </a>
    <?php endforeach ?>
    <?php if($articles->pagination()->hasPages()): ?>
      <ul class="pagination">  
        <?php foreach($articles->pagination()->range(6) as $paging): ?>
        <li><a class="btn btn-line btn-circle-sm" href="<?= $articles->pagination()->pageURL($paging); ?>"><?= $paging; ?></a></li>
        <?php endforeach ?>
      </ul>
    <?php endif; ?>
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
        <li><a href="<?php echo $page->url() . '/category:longread' ?>" class="cat longread">Long Read</a></li>
        <li><a href="<?php echo $page->url() . '/category:news' ?>" class="cat news">News</a></li>
        <li><a href="<?php echo $page->url() . '/category:comment' ?>" class="cat comment">Comment</a></li>
      </ul>
    </div>
  </aside>
</section>
<?php snippet('footer') ?>