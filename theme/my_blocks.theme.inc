<?php

/**
 * implements theme function for my_second_block_theme.
 */
function theme_my_second_block_theme($variables) {
  $user = $variables['user'];
  $output = '<div class="my-second-block-theme">';
  $output .= '<div class="email">' . $user->mail . '</div>';
  $output .= '<div class="timezone">' . $user->timezone . '</div>';
  $output .= '</div>';
  return $output;
}
