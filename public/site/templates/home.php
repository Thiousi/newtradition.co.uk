<?php snippet('header') ?>
<section class="featured">
  <div class="grid">
    <?php foreach ($site->find('journal')->children()->filterBy('featured', 'true')->visible()->limit(1) as $featured): ?>
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
        <p><?php echo $featured->text()->excerpt(300) ?></p>
        <button class="btn-more btn-line btn-small">Read more</button>
      </a>
    <?php endforeach ?>
    <?php foreach ($site->find('work')->children()->filterBy('featured', 'true')->visible()->limit(1) as $featured): ?>
      <a href="<?php echo $featured->url() ?>" class="post col-1-3 <?php echo $featured->template() ?>">
        <?php if($image = $featured->image('hero.jpg')): ?>
          <div class="post-img" style="background-image: url(<?php echo thumb($image, array('width' => 570, 'height' => 260, 'quality' => 75, 'crop' => true))->url() ?>);"></div>
        <?php endif ?>
        <div class="meta">
          <span class="meta-cat h5">Case Study</span>
          <span class="meta-feat">Featured</span>
        </div>
        <h3><?php echo html($featured->title()) ?></h3>
        <p><?php echo $featured->text()->excerpt(300) ?></p>
        <h6>Client: <?php echo html($featured->client()) ?></h6>
        <button class="btn-more btn-line btn-small">Read more</button>
      </a>
    <?php endforeach ?>
  </div>
</section>
<?php snippet('stream') ?>
<?php snippet('footer') ?>