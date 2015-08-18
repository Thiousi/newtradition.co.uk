  <footer class="gbl-foot" role="contentinfo">
    <div class="grid">
      <div class="address">
        <a href="https://www.google.co.uk/maps/place/<?php echo $site->location() ?>" title="<?php echo html($site->address()) ?> <?php echo html($site->postcode()) ?>" target="_blank"><?php echo html($site->address()) ?> <?php echo html($site->postcode()) ?></a>
      </div>
      <div class="copyright">
        <?php echo $site->copyright()->kirbytext() ?>
      </div>
    </div>
  </footer>
  <?php if ($page->isHomePage()): ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <?php endif ?>
  <?php if($page->template() == 'who'): ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <?php endif ?>
  <?php echo js('assets/js/main.min.js') ?>
  <?php echo js('@auto') ?>
</body>
</html>