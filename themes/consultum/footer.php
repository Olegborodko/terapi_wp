<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consultum
 */

?>

<footer>
  <div class="footer-block custom-containder">
    <div class="description">
      <div class="text">
        אתר אינטרנט הוא פלטפורמה דיגיטלית אתר אינטרנט הוא פלטפורמה דיגיטלית המתמקדת במתן גישה נוחהאתר אינטרנט הוא פלטפורמה דיגיטלית
      </div>
      <div class="social">
        <?php $logo_fb = get_template_directory_uri() . '/assets/img/fs.svg'; ?>
        <?php $logo_inst = get_template_directory_uri() . '/assets/img/inst.svg'; ?>
        <?php $logo_med = get_template_directory_uri() . '/assets/img/med.svg'; ?>
        <a class="" href="#"><img src="<?= esc_url($logo_med) ?>" alt="logo med"></a>
        <a class="" href="#"><img src="<?= esc_url($logo_inst) ?>" alt="logo instagram"></a>
        <a class="" href="#"><img src="<?= esc_url($logo_fb) ?>" alt="logo facebook"></a>
      </div>
    </div>

    <ul class="footer-menu">
      <li>בַּיִת</li>
      <li>מטפל</li>
      <li>בלוג</li>
    </ul>

    <div class="logo-block">
      <?php $logo_url = get_template_directory_uri() . '/assets/img/footer-logo.svg'; ?>
      <a class="logo ms-auto" href="#"><img src="<?= esc_url($logo_url) ?>" alt="footer logo"></a>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>