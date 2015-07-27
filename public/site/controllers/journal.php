<?php return function($site, $pages, $page) {

  $articles = $site->find('journal')->children()->visible()->sortBy('date', 'desc')->limit(7);

  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }
  
  $tags = $articles->pluck('tags', ',', true);

  // apply pagination
  $articles   = $articles->paginate(10);
  $pagination = $articles->pagination();

  return compact('articles', 'tags', 'tag', 'pagination');

}; ?>