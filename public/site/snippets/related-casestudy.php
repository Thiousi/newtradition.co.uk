<div class="related-casestudy">
  <div class="grid">
    <h2>Case Studies</h2>
    <?php foreach($page->siblings($self = true)->visible()->shuffle()->limit(6) as $related): ?>
    <div class="col-1-3">
      <?php if(!$related->hero()->empty()): ?>
        <?php $file = $related->hero()->toFile() ?>
        <figure class="post-hero">
          <img src="<?php echo thumb($file, array('width' => 1200, 'height' => 600, 'quality' => 90, 'crop' => true))->url() ?>">
        </figure>
      <?php endif ?>
      <h4><?php echo $related->title() ?></h4>
    </div>
   <?php endforeach ?>
  </div>
</div>