<?php snippet('header') ?>
<section class="featured">
  <div class="grid">
    <?php foreach ($site->find('journal')->children()->filterBy('featured', '1')->visible()->limit(1) as $featured): ?>
      <a href="<?php echo $featured->url() ?>" class="post col-2-3 <?php echo $featured->template() ?>"> 
        <?php if($image = $featured->image('hero.jpg')): ?>
          <div class="post-img" style="background-image: url(<?php echo thumb($image, array('width' => 720, 'height' => 280, 'quality' => 75, 'crop' => true))->url() ?>);"></div>
        <?php endif ?>
        <div class="meta">
          <span class="meta-cat h5">
          <?php if ($featured->template() == 'longread'): ?>Long Read
            <?php elseif ($featured->template() == 'news'): ?>News
            <?php elseif ($featured->template() == 'comment'): ?>Comment
          <?php endif ?></span>
          <span class="meta-feat">Featured</span>
        </div>
        <h3><?php echo html($featured->title()) ?></h3>
        <?php if(!$featured->excerpt()->empty()): ?>
          <p><?php echo $featured->excerpt() ?></p>
        <?php else: ?>
          <p><?php echo $featured->text()->excerpt(300) ?></p>
        <?php endif ?>
        <button class="btn-more btn-line b5tn-small">Read more</button>
      </a>
    <?php endforeach ?>
    <?php foreach ($site->find('work')->children()->filterBy('featured', '1')->visible()->limit(1) as $featured): ?>
      <a href="<?php echo $featured->url() ?>" class="post col-1-3 <?php echo $featured->template() ?>">
        <?php if($image = $featured->image('hero.jpg')): ?>
          <div class="post-img" style="background-image: url(<?php echo thumb($image, array('width' => 570, 'height' => 260, 'quality' => 75, 'crop' => true))->url() ?>);"></div>
        <?php endif ?>
        <div class="meta">
          <span class="meta-cat h5">Case Study</span>
          <span class="meta-feat">Featured</span>
        </div>
        <h3><?php echo html($featured->title()) ?></h3>
        <?php if(!$featured->excerpt()->empty()): ?>
          <p><?php echo $featured->excerpt() ?></p>
        <?php else: ?>
          <p><?php echo $featured->text()->excerpt(300) ?></p>
        <?php endif ?>
        
        <?php if($featured->client() != ''): ?>
        <span class="client">Client: <?php echo html($featured->client()) ?></span>
        <?php endif ?>
        <button class="btn-more btn-line btn-small">Read more</button>
      </a>
    <?php endforeach ?>
  </div>
</section>
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
      <?php if(!$featured->excerpt()->empty()): ?>
        <p><?php echo $featured->excerpt() ?></p>
      <?php else: ?>
        <p><?php echo $featured->text()->excerpt(300) ?></p>
      <?php endif ?>
      <?php if ($article->client() != ''): ?><span class="client">Client: <?php echo html($article->client()) ?></span><?php endif ?>
      <button class="btn-more btn-line btn-small">Read more</button>
    </a>
    <?php $count++ ?>
  <?php endforeach ?>
  <button class="btn btn-line btn-load">Load more</button>
</section>
<?php snippet('footer') ?>