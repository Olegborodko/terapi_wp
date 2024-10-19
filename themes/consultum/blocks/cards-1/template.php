<?php if (have_rows('card')): ?>
  <div class="cards-1">
    <?php while (have_rows('card')): the_row(); ?>
      <a href="<?= get_sub_field('link') ?>" class="block" style="background-color:<?php the_sub_field('color'); ?>">
        <?php
        $image = get_sub_field('image');
        if ($image && is_array($image)) {
          $image_url = isset($image['url']) ? $image['url'] : '';
        }

        $arrow_img = get_template_directory_uri() . '/assets/img/arrow_left.svg';
        ?>
        <div class="image-block">
          <img class="image" src="<?= $image_url ?>" alt="image">
        </div>
        <div class="text-block">
          <div>
            <h3><?= get_sub_field('title') ?></h3>
            <div class="description">
              <?= get_sub_field('text') ?>
              <img src="<?= esc_url($arrow_img) ?>" alt="arrow left">
            </div>
          </div>
        </div>
      </a>
    <?php endwhile; ?>
  </div>
<?php endif; ?>