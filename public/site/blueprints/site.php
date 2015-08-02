<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
files: false
fields:
  title:
    label: Title
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  line-a:
    type: line
  address:
    label: Address
    type: text
  postcode:
    label: Postcode
    type: text
    width: 1/4
  googlemaps:
    label: Google Maps
    type: url
    width: 3/4
  email:
    label: Email
    type: email
    width: 1/2
  phone:
    label: Phone
    type: tel
    width: 1/2
  twitter:
    label: Twitter
    type: text
    placeholder: @
    icon: twitter
    width: 1/2
  line-b:
    type: line
  copyright:
    label: Copyright
    type:  textarea
    required: true