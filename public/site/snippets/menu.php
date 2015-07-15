<div class="menu">
  <nav class="nav col-2-4" role="navigation">
    <?php foreach($pages->visible() as $p): ?>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
    <?php endforeach ?>
  </nav>
  <ul class="contact col-1-4">
    <li><a href="mailto:<?php echo html($site->email()) ?>" title="Email New Tradition"><?php echo html($site->email()) ?></a></li>
    <li><a href="tel:<?php echo html($site->phone()) ?>" title="Call New Tradition"><?php echo html($site->prettyphone()) ?></a></li>
    <li><a href="http://twitter.com/<?php echo html($site->twitter()) ?>" title="Follow New Tradition on Twitter" target="_blank">Follow us</a></li>
  </ul>
</div>