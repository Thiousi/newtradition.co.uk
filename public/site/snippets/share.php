<div class="share">
  <button class="btn-line btn-share">Share</button>
  <a href="mailto:?subject=<?php echo html($page->title()) ?>&amp;body=<?php echo html($page->title()) ?>: <?php echo html($page->url()) ?>" class="btn btn-line btn-email" title="Share by Email">Share by Email</a>
  <a href="http://twitter.com/share?url=<?php echo html($page->url()) ?>&text=<?php echo html($page->title()) ?> via @<?php echo html($site->twitter()) ?>:" target="_blank" class="btn btn-line btn-twitter" title="Share on Twitter">Share on Twitter</a>
  <a href="http://www.facebook.com/sharer.php?u=<?php echo html($page->url()) ?>" target="blank" class="btn btn-line btn-facebook" title="Share on Facebook">Share on Facebook</a>
</div>