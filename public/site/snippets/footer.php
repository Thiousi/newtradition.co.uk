  <footer class="gbl-foot" role="contentinfo">
    <div class="grid">
      <div class="address">
        <a href="<?php echo $site->googlemaps()->url() ?>" title="<?php echo html($site->address()) ?>"><?php echo html($site->address()) ?> <?php echo html($site->postcode()) ?></a>
      </div>
      <div class="copyright">
        <?php echo $site->copyright()->kirbytext() ?>
      </div>
    </div>
  </footer>
  <?php if ($page->isHomePage()): ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <?php endif ?>
  <?php echo js('assets/js/main.js') ?>
  <?php echo js('@auto') ?>
</body>
</html>