<?php if(!defined('KIRBY')) exit ?>

title: Error
pages: false
files: false
deletable: false
fields:
  title:
    label: Title
    type:  text
    required: true
  text:
    label: Content
    type:  markdown
    required: true