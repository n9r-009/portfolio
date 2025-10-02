<?php

add_action('after_setup_theme', 'register_menu');
function register_menu()
{
  if (!is_customize_preview()) {
    register_nav_menu('', '');
  }
}
