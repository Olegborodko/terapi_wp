<div class="doctors-4-block">
  <?php
  $icon = get_template_directory_uri() . '/assets/img/verified.svg';
  $photo = get_template_directory_uri() . '/assets/img/docktor-1.png';

  for ($i = 0; $i < 4; $i++) {
  ?>
    <div class="block">
      <img src="<?= esc_url($photo) ?>" class="photo" />
      <div class="mobile-block">
        <div class="title">
          <h4>מרי נראל</h4><img src="<?= esc_url($icon) ?>" class="ico" />
        </div>
        <div class="description">
          Lorem ipsum dolor sit amet consectetur.
        </div>
        <div class="btn-block">
          <a href="#" class="btn-lavender">תחומי התמחות</a>
          <a href="#" class="btn-lavender">התמחות</a>
          <a href="#" class="btn-lavender">התמחות</a>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</div>