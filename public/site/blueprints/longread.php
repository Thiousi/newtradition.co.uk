<?php if(!defined('KIRBY')) exit ?>

title: Long Read
pages: false
files: true
  sortable: true
  fields:
    caption:
      label: Caption
      type: textarea
fields:
  title:
    label: Title
    type:  text
    required: true
  date:
    label: Date
    type:  date
    default: today
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
    type: textarea
    buttons:
  hero:
    label: Hero Image
    type:  selector
    autoselect: first
    help: Only use .jpg images
    mode:  single
    types:
        - image
  line-a:
    type: line
  summary:
    label: Summary
    type: textarea
    required: true
    buttons:
  text:
    label: Article
    type:  markdown
    required: true
  line-b:
    type: line
  relatedlinks:
    label: Related Links
    type: structure
    fields:
      title:
        label: Link Title
        type: text
        required: true
      link:
        label: URL
        type: url
        required: true
  tags:
    label: Tags
    type:  tags
  comments:
    label: Comments
    type: checkbox
    text: Show Comments
    icon: comments
    width: 1/2
  nextpost:
    label: Next Post
    type: checkbox
    default: 1
    text: Show Next Post
    icon: hand-o-right
    width: 1/2