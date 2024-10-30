<?php
$title = esc_html(get_field('title')) ?: 'title';
$subtitle = esc_html(get_field('subtitle')) ?: 'subtitle';
?>

<div class="grey-title-subtitle-line" style="background-color: #e5dae0;border-right: 9px solid #866B7E;">
  <h3><?= esc_html($title) ?></h3>
  <p><?= esc_html($subtitle) ?></p>
</div>