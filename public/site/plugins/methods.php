<?php
field::$methods['lat'] = function($field) {
  $parts = explode(',',$field->value);
  return $parts[0];
};
field::$methods['lng'] = function($field) {
  $parts = explode(',',$field->value);
  return $parts[1];
};