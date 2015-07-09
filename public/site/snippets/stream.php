<section class="featured">
  <div class="grid">
    <h2>Featured</h2>
    <?php foreach ($site->find('journal')->children()->filterBy('featured', 'true')->visible()->limit(1) as $featured): ?>
      <a href="<?php echo $featured->url() ?>" class="post col-2-3 <?php echo $featured->template() ?>"> 
        <?php if($image = $featured->image('hero.jpg')): ?>
          <div class="post-img" style="background-image: url(<?php echo thumb($image, array('width' => 720, 'height' => 280, 'quality' => 75, 'crop' => true))->url() ?>);"></div>
        <?php endif ?>
        <?php if ($featured->template() == 'longread'): ?><h5>Long Read</h5>
        <?php elseif ($featured->template() == 'news'): ?><h5>News</h5>
        <?php elseif ($featured->template() == 'comment'): ?><h5>Comment</h5>
        <?php endif ?>
        <h3><?php echo html($featured->title()) ?></h3>
        <p><?php echo $featured->text()->excerpt(300) ?></p>
      </a>
    <?php endforeach ?>
    <?php foreach ($site->find('work')->children()->filterBy('featured', 'true')->visible()->limit(1) as $featured): ?>
      <a href="<?php echo $featured->url() ?>" class="post col-1-3 <?php echo $featured->template() ?>">
        <?php if($image = $featured->image('hero.jpg')): ?>
          <div class="post-img" style="background-image: url(<?php echo thumb($image, array('width' => 570, 'height' => 260, 'quality' => 75, 'crop' => true))->url() ?>);"></div>
        <?php endif ?>
        <h5>Case Study</h5>
        <h3><?php echo html($featured->title()) ?></h3>
        <p><?php echo $featured->text()->excerpt(300) ?></p>
        <span class="client">Client: <?php echo html($featured->client()) ?></span>
      </a>
    <?php endforeach ?>
  </div>
</section>
<section class="stream grid">
  <?php foreach ($site->find('journal','work')->children()->visible()->sortBy('date', 'desc')->limit(7) as $article): ?>
    <?php $count = 0 ?>
    <a href="<?php echo $article->url() ?>" class="post <?php echo $article->template() ?>">
      <?php if($image = $article->image('hero.jpg')): ?>
        <div class="post-img" style="background-image: url(<?php echo thumb($image, array('width' => 650, 'height' => 230, 'quality' => 75, 'crop' => true))->url() ?>);"></div>
      <?php endif ?>
      <?php if ($article->template() == 'longread'): ?><h5>Long Read</h5>
      <?php elseif ($article->template() == 'news'): ?><h5>News</h5>
      <?php elseif ($article->template() == 'comment'): ?><h5>Comment</h5>
      <?php elseif ($article->template() == 'casestudy'): ?><h5>Case Study</h5>
      <?php endif ?>
      <h3><?php echo html($article->title()) ?></h3>
      <p><?php echo $article->text()->excerpt(200) ?></p>
      <?php if($article->template() == 'casestudy'): ?><span class="client">Client: <?php echo html($article->client()) ?></span><?php endif ?>
    </a>
    <?php $count++ ?>
  <?php endforeach ?>
  <button class="btn btn-line btn-load">Load more</button>
</section>