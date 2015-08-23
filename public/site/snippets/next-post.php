<?php $next = $page->nextVisible() ?>
<?php $prev = $page->prevVisible() ?>
<?php if ($page->hasNextVisible()): ?>
  <a href="<?php echo $next->url() ?>" class="featured post-next">
    <div class="grid">
      <h2>Next post</h2>
      <div class="col-3-4 col-3-4-offset">
        <h5>
          <?php if ($next->template() == 'longread'): ?>Long Read
          <?php elseif ($next->template() == 'news'): ?>News
          <?php elseif ($next->template() == 'comment'): ?>Comment
          <?php endif ?>
        </h5>
        <h3><?php echo $next->title() ?></h3>
        <p><?php echo $next->text()->excerpt(300) ?></p>
      </div>
    </div>
  </a>
<?php elseif ($page->hasPrevVisible()): ?>
  <a href="<?php echo $prev->url() ?>" class="featured post-next">
    <div class="grid">
      <h2>Previous post</h2>
      <div class="col-3-4 col-3-4-offset">
        <h5>
          <?php if ($prev->template() == 'longread'): ?>Long Read
          <?php elseif ($prev->template() == 'news'): ?>News
          <?php elseif ($prev->template() == 'comment'): ?>Comment
          <?php endif ?>
        </h5>
        <h3><?php echo $prev->title() ?></h3>
        <p><?php echo $prev->text()->excerpt(300) ?></p>
      </div>
    </div>
  </a>
<?php else: ?>
<?php endif ?>