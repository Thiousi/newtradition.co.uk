<?php $next = $page->nextVisible() ?>
<?php $prev = $page->prevVisible() ?>
<?php if ($page->hasNextVisible()): ?>
  <aside class="next-casestudy">
    <div class="grid">
      <h5>Case Study</h5>
      <h2><?php echo $page->title() ?></h2>
      <h3><?php echo $page->client() ?></h3>
    </div>
  </aside>
<?php elseif ($page->hasPrevVisible()): ?>
  <aside class="next-casestudy">
    <div class="grid">
      <h5>Case Study</h5>
      <h2><?php echo $page->title() ?></h2>
      <h3><?php echo $page->client() ?></h3>
    </div>
  </aside>
<?php else: ?>
<?php endif ?>