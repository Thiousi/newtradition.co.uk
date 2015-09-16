<?php $next = $page->nextVisible() ?>
<?php $prev = $page->prevVisible() ?>
<?php if ($page->hasNextVisible()): ?>
  <a href="<?php echo $next->url() ?>" class="featured casestudy-next">
    <div class="grid">
      <h5>Next Case Study</h5>
      <h2><?php echo $next->title() ?></h2>
      <h3><?php echo $next->project() ?></h3>
    </div>
  </a>
<?php elseif ($page->hasPrevVisible()): ?>
  <a href="<?php echo $prev->url() ?>" class="featured casestudy-next">
    <div class="grid">
      <h5>Next Case Study</h5>
      <h2><?php echo $prev->title() ?></h2>
      <h3><?php echo $prev->project() ?></h3>
    </div>
  </a>
<?php else: ?>
<?php endif ?>