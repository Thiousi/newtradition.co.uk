<?php if(!defined('KIRBY')) exit ?>

title: Journal
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