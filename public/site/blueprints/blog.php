<?php if(!defined('KIRBY')) exit ?>

title: Blog
files: false
deletable: false
pages:
  template:
    - news
    - longread
    - comment
fields:
  title:
    label: Title
    type:  text
    required: true
