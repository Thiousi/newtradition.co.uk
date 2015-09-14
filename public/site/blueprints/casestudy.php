<?php if(!defined('KIRBY')) exit ?>

title: Case Study
pages: false
files:
  sortable: true
fields:
  title:
    label: Client
    type:  text
  project:
    label: Project Title
    type: text
    required: true
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
  summary:
    label: Summary
    type: textarea
  gallery:
    label: Gallery
    type:  selector
    mode:  multiple
    types:
        - image
  line-b:
    type: line
  text:
    label: Text
    type:  markdown
    required: true
  line-c:
    type: line
  disciplines:
    label: Disciplines
    type:  tags