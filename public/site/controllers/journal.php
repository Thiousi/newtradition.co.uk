<?php return function($site, $pages, $page) {

  // fetch the basic set of pages
  $articles = $site->find('journal')->children()->visible()->sortBy('date', 'desc')->limit(7);

  // add the tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }

  // fetch all tags
  $tags = $articles->pluck('tags', ',', true);

  // apply pagination
  $articles   = $articles->paginate(10);
  $pagination = $articles->pagination();

  return compact('articles', 'tags', 'tag', 'pagination');

}; ?>