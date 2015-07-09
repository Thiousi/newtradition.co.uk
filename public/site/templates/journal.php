<?php snippet('header') ?>

<?php foreach($site->find('journal')->children()->filterBy('featured', 'true')->visible()->sortBy('date', 'desc')->limit(1) as $featured): ?>
  <a href="<?php echo $featured->url() ?>" title="<?php echo html($featured->title()) ?>" class="featured">
    <div class="grid">
      <h5 class="col-1-4">Featured
        <strong><?php if($featured->template() == 'longread'): ?>Long Read
        <?php elseif($featured->template() == 'news'): ?>News
        <?php elseif($featured->template() == 'comment'): ?>Comment
        <?php endif ?></strong>
      </h5>
      <div class="col-3-4">
        <h2><?php echo html($featured->title()) ?></h2>
        <p class="excerpt-lrg"><?php echo $featured->text()->excerpt(150) ?></p>
      </div>
    </div>
  </a>
<?php endforeach ?>

<section class="grid journal-stream">
  <aside class="col-1-4 sidebar">
    <div class="sidebar-list">
      <h5>Categories</h5>
      <ul class="cat-list">
        <li><a href="#longread" class="cat">Long Read</a></li>
        <li><a href="#news" class="cat">News</a></li>
        <li><a href="#comment" class="cat">Comment</a></li>
      </ul>
    </div>
    <div class="sidebar-list">
      <h5>Tags</h5>
      <?php $tags = $page->children()->visible()->pluck('tags', ',', true);?>
      <ul class="cat-list">
        <?php foreach($tags as $tag): ?>
          <li><a href="<?php echo url('#' . $tag)?>" class="cat tag"><?php echo html($tag) ?></a></li>
        <?php endforeach ?>
      </ul>
    </div>
  </aside>
  <div class="col-3-4">
    <?php foreach ($site->find('journal')->children()->visible()->sortBy('date', 'desc')->limit(7) as $article): ?>
      <?php $count = 0 ?>
      <a href="<?php echo $article->url() ?>" class="post <?php echo $article->template() ?>">
        <?php if($image = $article->image('hero.jpg')): ?>
          <div class="post-img" style="background-image: url(<?php echo thumb($image, array('width' => 715, 'height' => 180, 'quality' => 75, 'crop' => true))->url() ?>);"><?php html($article->title()) ?></div>
        <?php endif ?>
        <?php if ($article->template() == 'longread'): ?><h5>Long Read</h5>
        <?php elseif ($article->template() == 'news'): ?><h5>News</h5>
        <?php elseif ($article->template() == 'comment'): ?><h5>Comment</h5>
        <?php endif ?>
        <h3><?php echo html($article->title()) ?></h3>
        <p><?php echo $article->text()->excerpt(200) ?></p>
      </a>
      <?php $count++ ?>
    <?php endforeach ?>
    <button class="btn btn-line btn-load">Load more</button>
  </div>
</section>

<?php snippet('footer') ?>