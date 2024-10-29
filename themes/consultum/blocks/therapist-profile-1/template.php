<?php
$ico_verified = get_template_directory_uri() . '/assets/img/verified.svg';
$photo_image = get_template_directory_uri() . '/assets/img/profile.png';

$logo_mail = get_template_directory_uri() . '/assets/img/arroba.svg';
$logo_message = get_template_directory_uri() . '/assets/img/chat.svg';
$logo_phone = get_template_directory_uri() . '/assets/img/telephone.svg';
?>

<div class="therapist-profile-1">
  <div class="content">
    <h1>
      מרי נראל
      <img src="<?= esc_url($ico_verified) ?>" alt="verified" />
    </h1>
    <p class="subtext">
      Lorem ipsum dolor sit amet consectetur. Turpis urna neque a placerat iaculis est adipiscing aliquam.
    </p>
    <div class="btns-block">
      <div class="btn-white">תחומי התמחות</div>
      <div class="btn-white">תחומי התמחות</div>
      <div class="btn-white">תחומי התמחות</div>
    </div>
    <h4>מידע נוסף</h4>
    <p class="description">
      אתר אינטרנט הוא פלטפורמה דיגיטלית אתר אינטרנט הוא פלטפורמה דיגיטלית המתמקדת במתן גישה נוחהאתר אינטרנט הוא פלטפורמה דיגיטלית המתמקדת במתן גישה נוחהאתר אינטרנט הוא פלטפורמה דיגיטלית המתמקדת במתן גישה נוחההמתמקדת במתן גישה נוחה
    </p>
    <div class="block-icons">
      <a href="#"><img src="<?= esc_url($logo_mail) ?>" alt="logo mail" /></a>
      <a href="#"><img src="<?= esc_url($logo_message) ?>" alt="logo message" /></a>
      <a href="#"><img src="<?= esc_url($logo_phone) ?>" alt="logo phone" /></a>
    </div>
  </div>
  <div class="profile-image-block">
    <img src="<?= esc_url($photo_image) ?>" alt="profile photo" />
  </div>
</div>