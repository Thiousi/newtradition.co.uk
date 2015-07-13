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

<section class="grid journal-stream" role="main">
  <aside class="col-1-4 sidebar">
    <div class="sidebar-item">
      <h5>Categories</h5>
      <ul class="cat-list">
        <li><a href="#longread" class="cat">Long Read</a></li>
        <li><a href="#news" class="cat">News</a></li>
        <li><a href="#comment" class="cat">Comment</a></li>
      </ul>
    </div>
    <div class="sidebar-item">
      <h5>Tags</h5>
      <?php $tags = $page->children()->visible()->pluck('tags', ',', true);?>
      <ul class="tag-list">
        <?php foreach($tags as $tag): ?>
          <li><a href="<?php echo url('#' . $tag)?>" class="tag"><?php echo html($tag) ?></a></li>
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
        <h5><?php if ($article->template() == 'longread'): ?>Long Read
        <?php elseif ($article->template() == 'news'): ?>News
        <?php elseif ($article->template() == 'comment'): ?>Comment
        <?php endif ?><span><?php echo html($article->date('j F')) ?></span></h5>
        <h3><?php echo html($article->title()) ?></h3>
        <p><?php echo $article->text()->excerpt(200) ?></p>
      </a>
      <?php $count++ ?>
    <?php endforeach ?>
    <button class="btn btn-line btn-load">Load more</button>
  </div>
</section>

<?php snippet('footer') ?>