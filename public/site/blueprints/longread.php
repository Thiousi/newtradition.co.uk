<?php if(!defined('KIRBY')) exit ?>

title: Long Read
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
    default: user
    width: 1/2
    required: true
  featured:
    label: Feature Post
    type: checkbox
    text: Featured
    width: 1/4
  excerpt:
    label: Excerpt
    type: textarea
  line-a:
    type: line
  summary:
    label: Summary
    type: textarea
    required: true
  text:
    label: Article
    type:  textarea
    required: true
  line-b:
    type: line
  comments:
    label: Comments
    type: checkbox
    text: Show
    width: 1/2
  bio:
    label: Author Biography
    type: checkbox
    text: Show
    width: 1/2
  relatedlinks:
    label: Related Links (without http://)
    type:  tags
    lower: true
  tags:
    label: Tags
    type:  tags