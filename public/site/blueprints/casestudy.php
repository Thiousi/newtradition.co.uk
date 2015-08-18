<?php if(!defined('KIRBY')) exit ?>

title: Case Study
pages: false
files:
  sortable: true
fields:
  title:
    label: Project Title
    type:  text
  client:
    label: Client
    type: text
  date:
    label: Date
    type:  date
    default: today
    width: 1/2
  featured:
    label: Feature Case Study
    type: checkbox
    text: Featured
    width: 1/2
  excerpt:
    label: Excerpt
    type: textarea
  hero:
    label: Hero Image
    type:  selector
    mode:  single
    types:
        - image
  line-a:
    type: line
  text:
    label: Comment
    type:  markdown
  line-b:
    type: line
  tags:
    label: Tags
    type:  tags