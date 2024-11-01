<?php
$stars_image = get_template_directory_uri() . '/assets/img/stars.svg';

$title = esc_html(get_field('title')) ?: 'title';
$href = esc_html(get_field('href')) ?: '#';

$btn_text = esc_html(get_field('btn-text')) ?: 'btn text';
?>

<div class="star-block" style="display: flex;background-color: #E7DCE0;">
  <div class="left-block">
    <img src="<?= esc_url($stars_image) ?>" src="icon start" />
  </div>
  <div class="center-block">
    <h2><?= esc_html($title) ?></h2>
    <a href="<?= esc_html($href) ?>" class="btn-default"><?= esc_html($btn_text) ?></a>
  </div>
  <div class="right-block">
    <img src="<?= esc_url($stars_image) ?>" src="icon start" />
  </div>
</div>