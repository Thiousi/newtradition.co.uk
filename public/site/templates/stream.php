<?php
  if (isset($_POST['offset']) && isset($_POST['amount'])) {
    $offset = intval($_POST['offset']);
      $amount = 3 * intval($_POST['amount']);
      $results = $page->siblings()->children()->shuffle()->visible()->offset($offset)->limit($amount);
      $more = $page->siblings()->children()->shuffle()->visible()->offset($offset+3)->limit(1)->count();
      $data[1] = $more;
    $html = '';
      $count = $offset;
    foreach($results as $article){
      $html .= '<a href="'. $article->url() . '" class="post ' . $article->template() . '">';
      if (!$article->hero()->empty()) {
        $file = $article->hero()->toFile();
        $html .= '<div class="post-img" style="background-image: url('. $file->url() . ')" title="' . $article->title()->html() . '"></div>';
      } else {
        $html .= '<div class="post-img post-img-empty"></div>';
      }
      if ($article->template() == 'longread') {
        $html .= '<h5>Long Read</h5>';
      } elseif ($article->template() == 'news') {
        $html .= '<h5>News</h5>';
      } elseif ($article->template() == 'comment') {
        $html .= '<h5>Comment</h5>';
      } else {
        $html .= '<h5>Case Study</h5>';
      }
      $html .= '<h3>' . $article->title()->html() . '</h3>';
      if (!$article->excerpt()->empty()) {
        $html .= '<p>' . $article->excerpt() . '</p>';
      } else {
        $html .= '<p>' . $article->text()->excerpt(200) . '</p>';
      }
      if ($article->client() != '') {
       $html .= '<span class="client">Client: ' . $article->client()->html() . '</span>';
      }
      $html .= '<button class="btn-more btn-line btn-small">Read more</button>';
      $html .= '</a>';
      $count++;
    }
    $data[0] = $html;
    echo json_encode($data);
  }
?>