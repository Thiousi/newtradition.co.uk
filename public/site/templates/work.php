<?php snippet('header') ?>
<?php foreach($site->find('work')->children()->filterBy('featured', 'true')->visible()->sortBy('date', 'desc')->limit(1) as $featured): ?>
  <a href="<?php echo $featured->url() ?>" title="<?php echo html($featured->title()) ?>" class="featured">
    <div class="grid">
      <div class="meta col-1-4">
        <span class="meta-feat">Featured</span>
        <span class="meta-cat h5">Case Study</span>
      </div>
      <div class="col-3-4">
        <h2><?php echo html($featured->title()) ?></h2>
        <h3><strong><?php echo html($featured->date('F Y')) ?></strong></h3>
        <h3><?php echo html($featured->title()) ?></h3>
      </div>
    </div>
  </a>
<?php endforeach ?>
<?php $postUris = pagesByDate($site->find('work')->children()->visible(), array('group'=>'year')); ?>
<?php if ($postUris): ?>
  <?php foreach($postUris as $year => $uris): ?>
    <section class="grid work-stream">
      <h5 class="col-1-4"><?php echo $year ?></h5>
      <div class="col-3-4">
        <?php foreach($uris as $uri): ?>
        <?php $post = $pages->find($uri); ?>
          <a href="<?php echo $post->url() ?>" class="post <?php echo $post->template() ?>">
            <h3><strong><?php echo $post->client() ?></strong><?php echo html($post->title()) ?></h3>
          </a>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endforeach; ?>
<?php endif; ?>
<?php snippet('footer') ?>