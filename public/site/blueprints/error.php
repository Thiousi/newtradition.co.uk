<?php if(!defined('KIRBY')) exit ?>

title: News
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
    type:  textarea
    required: true