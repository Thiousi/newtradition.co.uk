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
          <?php echo thumb($f->image('hero.jpg'), array('width' => 570, 'height' => 260, 'quality' => 75, 'crop' => true)); ?>
        <?php endif ?>
        <h5>Case Study</h5>
        <h3><?php echo $f->title()->html() ?></h3>
        <p><?php echo $f->text()->excerpt(300) ?></p>
        <span class="client">Client: <?php echo $f->client()->html() ?></span>
      </a>
    <?php endforeach ?>
  </div>
</section>
<section class="stream grid">
  <?php foreach($site->find('journal','work')->children()->visible()->limit(7) as $article): ?>
    <?php $count = 0 ?>
    <a href="<?php echo $article->url() ?>" class="post <?php echo $article->template() ?>">
      <?php if($image = $article->image('hero.jpg')): ?>
        <?php echo thumb($article->image('hero.jpg'), array('width' => 650, 'height' => 230, 'quality' => 75, 'crop' => true)); ?>
      <?php endif ?>
      <?php if($article->template() == 'longread'): ?><h5>Long Read</h5>
      <?php elseif($article->template() == 'news'): ?><h5>News</h5>
      <?php elseif($article->template() == 'comment'): ?><h5>Comment</h5>
      <?php elseif($article->template() == 'casestudy'): ?><h5>Case Study</h5>
      <?php endif ?>
      <h3><?php echo $article->title()->html() ?></h3>
      <p><?php echo $article->text()->excerpt(220) ?></p>
      <?php if($article->template() == 'casestudy'): ?><span class="client">Client: <?php echo $article->client()->html() ?></span><?php endif ?>
    </a>
    <?php $count++ ?>
  <?php endforeach ?>
    <button class="btn btn-line btn-load">Load more</button>
</section>