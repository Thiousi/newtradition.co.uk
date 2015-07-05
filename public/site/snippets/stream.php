<section class="featured">
  <div class="grid">
    <h2>Featured</h2>
    <?php foreach($site->find('journal')->children()->filterBy('featured', 'true')->visible()->limit(1) as $f): ?>
      <a href="<?php echo $f->url() ?>" class="post col-2-3 <?php echo $f->template() ?>"> 
        <?php if($image = $f->image('hero.jpg')): ?>
          <?php echo thumb($f->image('hero.jpg'), array('width' => 720, 'height' => 280, 'quality' => 75, 'crop' => true)); ?>
        <?php endif ?>
        <?php if($f->template() == 'longread'): ?><h5>Long Read</h5>
        <?php elseif($f->template() == 'news'): ?><h5>News</h5>
        <?php elseif($f->template() == 'comment'): ?><h5>Comment</h5>
        <?php endif ?>
        <h3><?php echo $f->title()->html() ?></h3>
        <p><?php echo $f->text()->excerpt(300) ?></p>
      </a>
    <?php endforeach ?>
    <?php foreach($site->find('work')->children()->filterBy('featured', 'true')->visible()->limit(1) as $f): ?>
      <a href="<?php echo $f->url() ?>" class="post col-1-3 <?php echo $f->template() ?>">
        <?php if($image = $f->image('hero.jpg')): ?>
          <?php echo thumb($f->image('hero.jpg'), array('width' => 340, 'height' => 200, 'quality' => 75, 'crop' => true)); ?>
        <?php endif ?>
        <h5>Case Study</h5>
        <h3><?php echo $f->title()->html() ?></h3>
        <h4><?php echo $f->client()->html() ?></h4>
        <p><?php echo $f->text()->excerpt(300) ?></p>
      </a>
    <?php endforeach ?>
  </div>
</section>
<section class="stream grid">
  <?php foreach($site->find('journal','work')->children()->visible()->limit(6) as $p): ?>
    <a href="<?php echo $p->url() ?>" class="post <?php echo $p->template() ?>">
      <?php if($image = $p->image('hero.jpg')): ?>
        <?php echo thumb($p->image('hero.jpg'), array('width' => 470, 'height' => 210, 'quality' => 75, 'crop' => true)); ?>
      <?php endif ?>
      <?php if($p->template() == 'longread'): ?><h5>Long Read</h5>
      <?php elseif($p->template() == 'news'): ?><h5>News</h5>
      <?php elseif($p->template() == 'comment'): ?><h5>Comment</h5>
      <?php elseif($p->template() == 'casestudy'): ?><h5>Case Study</h5>
      <?php endif ?>
      <h3><?php echo $p->title()->html() ?></h3>
      <?php if($p->template() == 'casestudy'): ?><h4><?php echo $p->client()->html() ?></h4><?php endif ?>
      <p><?php echo $p->text()->excerpt(300) ?></p>
    </a>
  <?php endforeach ?>
</section>
<section class="stream grid">
  <?php foreach($site->find('journal','work')->children()->visible()->offset(6)->limit(6) as $p): ?>
    <a href="<?php echo $p->url() ?>" class="post <?php echo $p->template() ?>">
      <?php if($image = $p->image('hero.jpg')): ?>
        <?php echo thumb($p->image('hero.jpg'), array('width' => 470, 'height' => 210, 'quality' => 75, 'crop' => true)); ?>
      <?php endif ?>
      <?php if($p->template() == 'longread'): ?><h5>Long Read</h5>
      <?php elseif($p->template() == 'news'): ?><h5>News</h5>
      <?php elseif($p->template() == 'comment'): ?><h5>Comment</h5>
      <?php elseif($p->template() == 'casestudy'): ?><h5>Case Study</h5>
      <?php endif ?>
      <h3><?php echo $p->title()->html() ?></h3>
      <?php if($p->template() == 'casestudy'): ?><h4><?php echo $p->client()->html() ?></h4><?php endif ?>
      <p><?php echo $p->text()->excerpt(300) ?></p>
    </a>
  <?php endforeach ?>
</section>
<section class="stream grid">
  <?php foreach($site->find('journal','work')->children()->visible()->offset(12)->limit(6) as $p): ?>
    <a href="<?php echo $p->url() ?>" class="post <?php echo $p->template() ?>">
      <?php if($image = $p->image('hero.jpg')): ?>
        <?php echo thumb($p->image('hero.jpg'), array('width' => 470, 'height' => 210, 'quality' => 75, 'crop' => true)); ?>
      <?php endif ?>
      <?php if($p->template() == 'longread'): ?><h5>Long Read</h5>
      <?php elseif($p->template() == 'news'): ?><h5>News</h5>
      <?php elseif($p->template() == 'comment'): ?><h5>Comment</h5>
      <?php elseif($p->template() == 'casestudy'): ?><h5>Case Study</h5>
      <?php endif ?>
      <h3><?php echo $p->title()->html() ?></h3>
      <?php if($p->template() == 'casestudy'): ?><h4><?php echo $p->client()->html() ?></h4><?php endif ?>
      <p><?php echo $p->text()->excerpt(300) ?></p>
    </a>
  <?php endforeach ?>
</section>
<button class="btn btn-line btn-load">Load more</button>