<div class="articles-6-last-blocks">
  <?php
  $selected_tags = get_field('articles_tags');

  $args = array(
    'post_type' => 'articles',
    'posts_per_page' => -1,
  );

  if (!empty($selected_tags)) {
    if ($selected_tags !== "all") {
      $args['tag'] = $selected_tags;
    }
  }

  $query = new WP_Query($args);

  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
      if (has_post_thumbnail()) {
        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
      }
  ?>
      <a href="<?php the_permalink(); ?>" class="block">
        <img src="<?= $image_url ?>" alt="<?php the_title() ?>" />
        <h4><?php the_title(); ?></h4>
        <?php the_excerpt(); ?>
      </a>
  <?php endwhile;
    wp_reset_postdata();
  else :
    echo '<p>There are no posts of type "articles" with the specified tags.</p>';
  endif;
  ?>
</div>