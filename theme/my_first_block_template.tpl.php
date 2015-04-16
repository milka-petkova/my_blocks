<?php
dpm($text);
dpm($link_url);
dpm($link_title);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="my-first-block">
  <?php if ($text) : ?>
    <div class="text"> <?php print $text; ?> </div>
  <?php endif; ?>
  <?php if ($link_title && $link_url) : ?>
    <div class="link"> <?php print l(t($link_title), $link_url); ?></div>
  <?php endif; ?>
</div>

