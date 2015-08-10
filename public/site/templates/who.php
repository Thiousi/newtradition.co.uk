<?php snippet('header') ?>

<section class="grid" role="main">
  <?php if($maxine = $site->users()->find('maxine')): ?>
  <div class="who-profile">
    <div class="col-1-4">
      <img src="<?php echo $maxine->avatar()->url() ?>" alt="Maxine Cameron" class="who-avatar">
    </div>
    <div class="col-3-4 who-profile-inner">
      <h2><?php echo $maxine->firstName() ?> <?php echo $maxine->lastName() ?></h2>
      <?php echo $page->bio()->kirbytext() ?>
      <ul class="profile-social">
        <?php if(!$page->twitter()->empty()): ?>
          <a href="http://twitter.com/<?php echo $page->twitter() ?>" title="Maxine's Twitter" class="btn btn-line btn-twitter" target="_blank">Twitter</a>
        <?php endif ?>
        <?php if(!$page->linkedin()->empty()): ?>
          <a href="<?php echo $page->linkedin() ?>" title="Maxine's LinkedIn" class="btn btn-line btn-linkedin" target="_blank">LinkedIn</a>
        <?php endif ?>
        <?php if(!$page->quora()->empty()): ?>
          <a href="http://quora.com/<?php echo $page->quora() ?>" alt="Maxine's Quora" class="btn btn-line btn-quora" target="_blank">Quora</a>
        <?php endif ?>
      </ul>
    </div>
  </div>
  <?php endif ?>
  <?php if($ian = $site->users()->find('ian')): ?>
  <div class="who-profile">
    <div class="col-1-4">
      <img src="<?php echo $ian->avatar()->url() ?>" alt="Ian Thomas" class="who-avatar">
    </div>
    <div class="col-3-4 who-profile-inner">
      <h2><?php echo $ian->firstName() ?> <?php echo $ian->lastName() ?></h2>
      <?php echo $page->bio2()->kirbytext() ?>
      <ul class="profile-social">
        <?php if(!$page->twitter2()->empty()): ?>
          <a href="http://twitter.com/<?php echo $page->twitter2() ?>" title="Ian's Twitter" class="btn btn-line btn-twitter" target="_blank">Twitter</a>
        <?php endif ?>
        <?php if(!$page->linkedin2()->empty()): ?>
          <a href="<?php echo $page->linkedin2() ?>" title="Ian's LinkedIn" class="btn btn-line btn-linkedin" target="_blank">LinkedIn</a>
        <?php endif ?>
        <?php if(!$page->quora2()->empty()): ?>
          <a href="http://quora.com/<?php echo $page->quora2() ?>" alt="Ian's Quora" class="btn btn-line btn-quora" target="_blank">Quora</a>
        <?php endif ?>
      </ul>
    </div>
  </div>
  <?php endif ?>
</section>

<section class="who-location">
  <div class="grid">
    <h2 class="col-3-4 col-3-4-offset">Find us</h2>
  </div>
  <?php echo $page->location(); ?>
</section>

<?php snippet('footer') ?>