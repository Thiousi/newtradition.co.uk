<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
files: false
fields:
  title:
    label: Title
    type:  text
  subtitle:
    label: Subtitle
    type:  text
  description:
    label: Site Description
    type:  textarea
    help: This is used to describe the website within Google results.
    buttons:
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
    width: 1/2
  twitter:
    label: Twitter
    type: text
    placeholder: @
    icon: twitter
    width: 1/2
  email:
    label: Email
    type: email
    width: 1/2
  phone:
    label: Phone
    type: tel
    width: 1/2
  location:
    label: Google Map Location
    type: geolocation
  line-b:
    type: line
  copyright:
    label: Copyright
    type:  textarea
    required: true
    buttons: