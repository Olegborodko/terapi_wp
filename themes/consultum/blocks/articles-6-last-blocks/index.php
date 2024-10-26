<?php
function load_articles_6_last_tags_field_choices($field)
{
  $terms = get_terms(array(
    'taxonomy' => 'post_tag',
    'hide_empty' => false,
  ));

  if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
      $field['choices'][$term->slug] = $term->name;
    }
  }

  return $field;
}
add_filter('acf/load_field/name=articles_tags', 'load_articles_6_last_tags_field_choices');
