<?php
  if (isset($_POST['offset']) && isset($_POST['amount'])) {
    $offset = intval($_POST['offset']);
      $amount = 3 * intval($_POST['amount']);
      $results = $pages->find('journal')->children()->visible()->sortBy('date','desc')->offset($offset)->limit($amount);
      $more = $pages->find('journal')->children()->visible()->sortBy('date','desc')->offset($offset+3)->limit(1)->count();
      $data[1] = $more;
    $html = '';
      $count = $offset;
    foreach($results as $article){
      $html .= '<a href="'. $article->url() . '" class="post ' . $article->template() . '">';
      if ($image = $article->image('hero.jpg')) {
       $html .= '<div class="post-img" style="background-image: url('. $image->url() . ')">' . html($article->title()) .'</div>';
      }
      if ($article->template() == 'longread') {
        $html .= '<h5>Long Read</h5>';
      } elseif ($article->template() == 'news') {
        $html .= '<h5>News</h5>';
      } elseif ($article->template() == 'comment') {
        $html .= '<h5>Comment</h5>';
      }
      $html .= '<h3>' . html($article->title()) . '</h3>';
      $html .= '<p>' . $article->text()->excerpt(300) . '</p>';
      $html .= '<button class="btn-more btn-line btn-small">Read more</button>';
      $html .= '</a>';
      $count++;
    }
    $data[0] = $html;
    echo json_encode($data);
  }
?>
