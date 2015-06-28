<input type="checkbox" class="show-menu">
<div class="menu">
  <nav class="nav col-2-4" role="navigation">
    <?php foreach($pages->visible() as $p): ?>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    <?php endforeach ?>
  </nav>
  <ul class="contact col-1-4">
    <li><a href="mailto:<?php echo $site->email()->html() ?>" title="Email New Tradition"><?php echo $site->email()->html() ?></a></li>
    <li><a href="tel:<?php echo $site->phone()->html() ?>" title="Call New Tradition"><?php echo $site->prettyphone()->html() ?></a></li>
    <li><a href="http://twitter.com/<?php echo $site->twitter()->html() ?>" title="Follow New Tradition on Twitter" target="_blank">Follow us</a></li>
  </ul>
</div>