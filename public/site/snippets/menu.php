<div class="menu">
  <nav class="nav col-2-4" role="navigation">
    <?php foreach($pages->visible() as $p): ?>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
    <?php endforeach ?>
  </nav>
  <div class="contact col-1-4">
    <a href="mailto:<?php echo html($site->email()) ?>" title="Email New Tradition" class="contact-email">
      <span><?php echo html($site->email()) ?></span>
    </a>
    <a href="tel:<?php echo html($site->phone()) ?>" title="Call New Tradition" class="contact-phone">
      <span><?php echo html($site->phone()) ?></span>
    </a>
    <a href="http://twitter.com/<?php echo html($site->twitter()) ?>" title="Follow New Tradition on Twitter" target="_blank" class="contact-twitter">
      <span>Follow us</span>
    </a>
  </div>
</div>