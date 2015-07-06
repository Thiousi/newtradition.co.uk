<?php snippet('header') ?>

<?php foreach($site->find('journal')->children()->filterBy('featured', 'true')->visible()->sortBy('date', 'desc')->limit(1) as $featured): ?>
  <a href="<?php echo $featured->url() ?>" title="<?php echo html($featured->title()) ?>" class="featured">
    <div class="grid">
      <h5 class="col-1-4">Featured <br>
        <?php if($featured->template() == 'longread'): ?>Long Read
        <?php elseif($featured->template() == 'news'): ?>News
        <?php elseif($featured->template() == 'comment'): ?>Comment
        <?php endif ?>
      </h5>
      <div class="col-3-4">
        <h2><?php echo html($featured->title()) ?></h2>
        <p class="excerpt-lrg"><?php echo $featured->text()->excerpt(150) ?></p>
      </div>
    </div>
  </a>
<?php endforeach ?>

<?php snippet('footer') ?>