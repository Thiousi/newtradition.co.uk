<?php if(!defined('KIRBY')) exit ?>

title: Comment
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
  line-a:
    type: line
  excerpt:
    label: Excerpt
    type: textarea
  link:
    label: Link
    type: text
  text:
    label: Article
    type:  textarea
    required: true
  line-b:
    type: line
  tags:
    label: Tags
    type:  tags