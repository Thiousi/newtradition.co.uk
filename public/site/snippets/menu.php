<nav class="nav col-2-4" role="navigation">
  <?php foreach($pages->visible() as $p): ?>
    <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
  <?php endforeach ?>
</nav>

<ul class="contact col-1-4">
  <li><a>hello@newtradition.co.uk</a></li>
  <li><a>+44 (0)1295 724258</a></li>
  <li><a>Follow us</a></li>
</ul>