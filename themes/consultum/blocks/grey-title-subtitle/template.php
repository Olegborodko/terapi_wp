<?php
$title = esc_html(get_field('title')) ?: 'title';
$subtitle = esc_html(get_field('subtitle')) ?: 'subtitle';
?>

<div class="grey-title-subtitle" style="background-color: #e5dae0;">
  <h3><?= esc_html($title) ?></h3>
  <p><?= esc_html($subtitle) ?></p>
</div>