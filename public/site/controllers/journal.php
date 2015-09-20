<?php return function($site, $pages, $page) {

  $articles = $site->find('journal')->children()->visible()->sortBy('date', 'desc');
  
  if ($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }
  
  $tags = $articles->pluck('tags', ',', true);

  if ($category = param('category')) {
    $articles = $site->index()->filterBy('template', $category, ',');
  }

  // apply pagination
  $articles   = $articles->paginate(10);
  $pagination = $articles->pagination();

  return compact('articles', 'tags', 'tag', 'pagination', 'category');

}; ?>