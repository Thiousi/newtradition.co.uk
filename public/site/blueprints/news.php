<?php if(!defined('KIRBY')) exit ?>

title: News
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
    required: true
  date:
    label: Date
    type:  date
    width: 1/4
  author:
    label: Author
    type: user
    width: 1/2
  toggle:
    label: Feature Post
    type: checkbox
    text: Featured
    width: 1/4
  excerpt:
    label: Excerpt
    type:  textarea
  line-a:
    type: line
  text:
    label: Article
    type:  textarea
    required: true
    size: large
  line-b:
    type: line
  comments:
    label: Comments
    type: checkbox
    text: show
  relatedlinks:
    label: Related Links
    type:  tags
  tags:
    label: Tags
    type:  tags