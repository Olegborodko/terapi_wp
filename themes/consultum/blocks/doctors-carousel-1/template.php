<div class="doctors-carousel-1">
  <div class="filter-block">
    <h3>למצוא את המטפל שלך</h3>
    <div class="buttons-block">
      <div class="btn-default">צָפוֹן</div>
      <div class="btn-null">צָפוֹן</div>
      <div class="btn-null">צָפוֹן</div>
    </div>
  </div>

  <div class="swiper doctorsSwiperSlider">
    <div class="swiper-wrapper">
      <?php
      $icon = get_template_directory_uri() . '/assets/img/verified.svg';
      $photo = get_template_directory_uri() . '/assets/img/docktor-1.png';
      ?>

      <?php
      for ($i = 0; $i < 5; $i++) {
      ?>
        <div class="swiper-slide">
          <img src="<?= esc_url($photo) ?>" class="photo" />
          <div class="title">
            <h4>מרי נראל</h4><img src="<?= esc_url($icon) ?>" class="ico" />
          </div>
          <div class="description">
            Lorem ipsum dolor sit amet consectetur.
          </div>
          <div class="btn-block">
            <a href="#" class="btn-white">תחומי התמחות</a>
            <a href="#" class="btn-white">התמחות</a>
            <a href="#" class="btn-white">התמחות</a>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>