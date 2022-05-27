
    <?php get_header(); ?>

    <div id="js-fv-trigger" class="p-lower-mv">
      <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--sp u-hidden-md-up">
        <use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
      </svg>
      <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--pc u-hidden-md-down">
        <use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
      </svg>
      <picture class="p-lower-mv__picture">
        <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/mv-contact_sp.webp" media="(max-width: 767px)" type="image/webp" />
        <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/webp/mv-contact_pc.webp" media="(min-width: 768px)" type="image/webp" />
        <source class="p-lower-mv__img" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/mv-contact_sp.jpeg" media="(max-width: 767px)" />
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/mv-contact_pc.jpeg" class="p-lower-mv__img" decoding="async" alt="お問い合わせメインビジュアル">
      </picture>
      <div class="p-lower-mv__title">
        <h2 class="p-lower-mv__title-en u-font-italic is-mask-right">
          CONTACT
        </h2>
        <br>
        <p class="p-lower-mv__title-ja is-mask-right">
          お問い合わせ
        </p>
      </div>
    </div>
    <!--パンくずリスト-->
    <div class="c-breadcrumb u-mt-12">
      <div class="l-inner">
        <?php
          if ( function_exists( 'bcn_display' ) ) {
            bcn_display();
          }
        ?>
      </div>
    </div>
    <!--/パンくずリスト-->

    <!--お問い合わせありがとうございました-->
    <section class="p-contact">
      <div class="l-inner">
        <div class="p-contact__inner">
          <p class="p-contact__intro">
            お問い合わせありがとうございました<br>
            2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。
            <br>
            <br>
            → <a href="<?php echo esc_url(home_url('/')); ?>" class="p-contact__intro-link">トップへ戻る</a>
          </p>
        </div>
      </div>
    </section>
    <!--/お問い合わせありがとうございました-->

    <?php get_footer(); ?>