  <footer class="gbl-foot" role="contentinfo">
    <div class="grid">
      <div class="address">
        <a><?php echo $site->address()->kirbytext() ?></a>
      </div>
      <div class="copyright">
        <?php echo $site->copyright()->kirbytext() ?>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <?php echo js('@auto') ?>
</body>
</html>