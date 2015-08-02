<?php if(!defined('KIRBY')) exit ?>

title: Case Study
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
    width: 1/2
  toggle:
    label: Feature Case Study
    type: checkbox
    text: Featured
    width: 1/2
  line-a:
    type: line
  excerpt:
    label: Excerpt
    type: textarea
  text:
    label: Text
    type:  textarea
  line-b:
    type: line
  tags:
    label: Tags
    type:  tags