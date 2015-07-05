<?php
	if (isset($_POST['offset']) && isset($_POST['amount'])) {
		$offset = intval($_POST['offset']);
    	$amount = 3 * intval($_POST['amount']);
    	$results = $site->find('journal','work')->children()->visible()->offset($offset)->limit($amount);
    	$more = $site->find('journal','work')->children()->visible()->offset($offset+3)->limit(1)->count();
    	$data[1] = $more;
		$html = '';
    	$count = $offset;
		foreach($results as $article){
      	$html .= '<a href="'. $article->url() . '" class="post ' . $article->template() . '">';
        if ($image = $article->image('hero.jpg')) {
         $html .= '<div class="post-img" style="background-image: url('. $image->url() . ')" title="' . $article->title()->html() . '"></div>';
        }
        if ($article->template() == 'longread') {
          '<h5>Long Read</h5>';
        } elseif ($article->template() == 'news') {
          '<h5>News</h5>';
        } elseif ($article->template() == 'comment') {
          '<h5>Comment</h5>';
        } else {
          '<h5>Case Study</h5>';
        }
      	$html .= '<h3>' . $article->title()->html() . '</h3>';
        $html .= '<p>' . $article->text()->excerpt(300) . '</p>';
        if ($article->template() == 'casestudy') {
         $html .= '<span class="client">Client: ' . $article->client()->html() . '</span';
        }
      	$html .= '</a>';
    	  $count++;
    	}
	    $data[0] = $html;
		
		echo json_encode($data);
	}
?>
