<div class="comments-carousel-1">
  <div class="swiper commentsSwiperSlider">
    <div class="swiper-wrapper">
      <?php
      // $selected_tags = get_field('articles_tags');

      // $args = array(
      //   'post_type' => 'articles',
      //   'posts_per_page' => -1,
      // );

      // if (!empty($selected_tags)) {
      //   if ($selected_tags !== "all") {
      //     $args['tag'] = $selected_tags;
      //   }
      // }

      // $query = new WP_Query($args);

      // if ($query->have_posts()) :
      //   while ($query->have_posts()) : $query->the_post();
      //     if (has_post_thumbnail()) {
      //       $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
      //     }
      ?>

      <?php $quote = get_template_directory_uri() . '/assets/img/quote.svg'; ?>

      <div class="swiper-slide">
        <img src="<?= esc_url($quote) ?>">
        <div>
          Lorem ipsum dolor sit amet consectetur. Turpis urna neque a placerat iaculis est adipiscing aliquam. Porttitor urna ut diam in nibh duis euismod tempus nisl. Porttitor urna ut diam in nibh duis euismod tempus nisl.
        </div>
        <h6>
          12 באפריל 2023
        </h6>
      </div>

      <div class="swiper-slide">
        <img src="<?= esc_url($quote) ?>">
        <div>
          Lorem ipsum dolor sit amet consectetur. Turpis urna neque a placerat iaculis est adipiscing aliquam. Porttitor urna ut diam in nibh duis euismod tempus nisl.
        </div>
        <h6>
          12 באפריל 2023
        </h6>
      </div>

      <div class="swiper-slide">
        <img src="<?= esc_url($quote) ?>">
        <div>
          Lorem ipsum dolor sit amet consectetur. Turpis urna neque a placerat iaculis est adipiscing aliquam.
        </div>
        <h6>
          12 באפריל 2023
        </h6>
      </div>

      <div class="swiper-slide">
        <img src="<?= esc_url($quote) ?>">
        <div>
          Lorem ipsum dolor sit amet consectetur. Turpis urna neque a placerat iaculis est adipiscing aliquam.
        </div>
        <h6>
          12 באפריל 2023
        </h6>
      </div>

      <div class="swiper-slide">
        <img src="<?= esc_url($quote) ?>">
        <div>
          Lorem ipsum dolor sit amet consectetur. Turpis urna neque a placerat iaculis est adipiscing aliquam. Porttitor urna ut diam in nibh duis euismod tempus nisl. Porttitor urna ut diam in nibh duis euismod tempus nisl.
        </div>
        <h6>
          12 באפריל 2023
        </h6>
      </div>

      <?php //endwhile; 
      // wp_reset_postdata();
      // else :
      //   echo '<p>There are no posts of type "articles" with the specified tags.</p>';
      // endif;
      ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>