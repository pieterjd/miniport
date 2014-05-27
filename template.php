<?php

/**
override theme_button().
*/
function miniport_button($variables){
  //add the button class
  $variables['element']['#attributes']['class'][] = 'button';
  //return the rendered button
  return theme_button($variables);
  
}