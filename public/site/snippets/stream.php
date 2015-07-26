<section class="stream grid" role="main">
  <?php foreach ($site->find('journal','work')->children()->visible()->sortBy('date', 'desc')->limit(7) as $article): ?>
    <?php $count = 0 ?>
    <a href="<?php echo $article->url() ?>" class="post <?php echo $article->template() ?>">
      <?php if($image = $article->image('hero.jpg')): ?>
        <div class="post-img" style="background-image: url(<?php echo thumb($image, array('width' => 650, 'height' => 230, 'quality' => 75, 'crop' => true))->url() ?>);"></div>
      <?php endif ?>
      <div class="meta">
        <span class="meta-cat h5">
        <?php if ($article->template() == 'longread'): ?>Long Read
          <?php elseif ($article->template() == 'news'): ?>News
          <?php elseif ($article->template() == 'comment'): ?>Comment
          <?php elseif ($article->template() == 'casestudy'): ?>Case Study
        <?php endif ?></span>
        <?php if(!$article->featured() == 'true' ):?>
          <span class="meta-feat">Featured</span>
        <?php endif ?>
      </div>
      <h3><?php echo html($article->title()) ?></h3>
      <p><?php echo $article->text()->excerpt(200) ?></p>
      <?php if($article->template() == 'casestudy'): ?><h6>Client: <?php echo html($article->client()) ?></h6><?php endif ?>
      <button class="btn-more btn-line btn-small">Read more</button>
    </a>
    <?php $count++ ?>
  <?php endforeach ?>
  <button class="btn btn-line btn-load">Load more</button>
</section>