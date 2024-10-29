<?php
$icon_calendar = get_template_directory_uri() . '/assets/img/calendar.svg';
$icon_frame = get_template_directory_uri() . '/assets/img/frame.svg';
?>

<div class="experience-two-block">
  <div class="btns-block">
    <div class="btn-default">צָתעודותפוֹן</div>
    <div class="btn-null">תחומי</div>
    <div class="btn-null">מפרטי השכלה</div>
  </div>
  <div class="content-blocks">
    <?php
    for ($i = 0; $i < 2; $i++) {
    ?>

      <div class="block">
        <h4>
          תעודת סיום
        </h4>
        <p>
          זה מאשר כי מרי נראל סיימה בהצלחה את הקורס בטיפול קוגניטיבי התנהגותי (CBT) ומוכר כמטפל מוסמך בטיפול CBT.
        </p>
        <div class="bottom-blocks">
          <div class="inside">
            <img src="<?= esc_url($icon_calendar) ?>" src="icon calendar" />
            <ul>
              <li>
                מס' תעודה
              </li>
              <li>
                2023 10 10
              </li>
            </ul>
          </div>
          <div class="inside inside-frame">
            <img src="<?= esc_url($icon_frame) ?>" src="icon frame" />
            <ul>
              <li>
                מס' תעודה
              </li>
              <li>
                [123456]
              </li>
            </ul>
          </div>
        </div>
      </div>

    <?php
    }
    ?>
  </div>
</div>