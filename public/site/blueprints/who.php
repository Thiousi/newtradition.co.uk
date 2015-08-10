<?php if(!defined('KIRBY')) exit ?>

title: Who
files: false
deletable: false
pages: false
fields:
  title:
    label: Title
    type:  text
    required: true
  line-a:
    type: line
  name:
    label: User
    type: user
    default maxine
    help: Full name and avatars are taken from the Users section within the site menu.
  bio:
    label: Bio
    type: markdown
  twitter:
    label: Twitter
    type: text
    placeholder: @
    icon: twitter
    width: 1/2
  linkedin:
    label: LinkedIn
    type: text
    placeholder: 
    icon: linkedin
    help: Enter the full URL
    width: 1/2
  quora:
    label: Quora
    type: text
    placeholder: 
    icon: link
    width: 1/2
  line-b:
    type: line
  name2:
    label: User
    type: user
    default ian
    required: true
    help: Full name and avatars are taken from the Users section within the site menu.
  bio2:
    label: Bio
    type: markdown
  twitter2:
    label: Twitter
    type: text
    placeholder: @
    icon: twitter
    width: 1/2
  linkedin2:
    label: LinkedIn
    type: text
    placeholder: 
    icon: linkedin
    help: Enter the full URL
    width: 1/2
  quora2:
    label: Quora
    type: text
    placeholder: 
    icon: link
    width: 1/2
