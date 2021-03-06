    <div class="p-footer-links">
      <div class="p-footer-links__item">
        <div class="p-footer-links__item-inner">
          <h2 class="p-footer-links__title-head u-font-italic">DOWNLOAD</h2>
          <p class="p-footer-links__title-foot">資料ダウンロード</p>
          <a href="<?php echo esc_url(home_url('/download')); ?>" class="p-footer-links__button u-font-italic">
            View more
            <svg class="c-svg p-footer-links__svg" width="20" height="13.5">
              <use xlink:href="<?php echo esc_url(get_template_directory_uri());  ?>/img/svg/sprite.min.svg#icon-arrow02" />
            </svg>
          </a>
        </div>
      </div>
      <div class="p-footer-links__item">
        <div class="p-footer-links__item-inner">
          <h2 class="p-footer-links__title-head u-font-italic">CONTACT</h2>
          <p class="p-footer-links__title-foot">お問い合わせ</p>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-footer-links__button u-font-italic">
            View more
            <svg class="c-svg p-footer-links__svg" width="20" height="13.5">
              <use xlink:href="<?php echo esc_url(get_template_directory_uri());  ?>/img/svg/sprite.min.svg#icon-arrow02" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <!--お問い合わせ　資料ダウンロード-->
    <footer class="l-footer p-footer">
      <div class="p-footer__inner">
        <h1 class="p-footer__logo">
          <a class="p-footer__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
            Global Standard
          </a>
        </h1>
        <address class="p-footer__info">
          <p class="p-footer__text">
            〒550-1000　大阪市西区土佐堀9-5-5 <br>
            TEL　06-123-4567 <br>
            FAX　06-123-4568
          </p>
        </address>
        <div class="p-footer__copyright">
          <small lang="en">©︎2021 Global Standard. All Rights Reserved.</small>
        </div>
      </div>
    </footer>
    <!--フッター-->
  </div>
  <!-- /wrapper -->
  <?php wp_footer(); ?>
</body>
</html>