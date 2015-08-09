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
    width: 1/2
  author:
    label: Author
    type: user
    default: ian
    width: 1/4
  featured:
    label: Feature Post
    type: checkbox
    text: Featured
    width: 1/4
  excerpt:
    label: Excerpt
    type:  textarea
  hero:
    label: Hero Image
    type:  selector
    mode:  single
    types:
        - image
  line-a:
    type: line
  url:
    label: Title URL
    type:  url
  text:
    label: Comment
    type:  markdown
  line-b:
    type: line
  comments:
    label: Comments
    type: checkbox
    text: show
  relatedlinks:
    label: Related Links (without http://)
    type:  tags
    lower: true
  tags:
    label: Tags
    type:  tags