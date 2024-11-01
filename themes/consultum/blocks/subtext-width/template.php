<?php
$max_width = esc_html(get_field('max-width'));
$text = esc_html(get_field('text')) ?: 'text';
$align = esc_html(get_field('align')) ?: 'center';

if (empty($max_width)) {
  $max_width = 'initial';
} else {
  $max_width = $max_width . 'px';
}
?>

<p class="subtext-width" style="max-width: <?= esc_html($max_width) ?>;text-align: <?= esc_html($align) ?>">
  <?= esc_html($text) ?>
</p>