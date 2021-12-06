    
    <?php get_header(); ?>

    <div class="p-lower-mv">
      <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--sp u-hidden-md-up">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
      </svg>
      <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--pc u-hidden-md-down">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
      </svg>
      <picture class="p-lower-mv__picture">
        <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-contact_sp.webp" media="(max-width: 767px)" type="image/webp" />
        <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-contact_pc.webp" media="(min-width: 768px)" type="image/webp" />
        <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-contact_sp.jpeg" media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-contact_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="お問い合わせメインビジュアル">
      </picture>
      <div class="p-lower-mv__title">
        <h2 class="p-lower-mv__title-en u-font-italic">
          CONTACT
        </h2>
        <br>
        <p class="p-lower-mv__title-ja">
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
    <section class="p-contact">
      <div class="l-inner">
        <div class="p-contact__inner">
          <p class="p-contact__intro">
            研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。 2日以内に担当者からメールにてご連絡いたします。
          </p>
          <div class="p-contact-form">
            <h2 class="p-contact-form__title">お問い合わせ</h2>
            <!--コンタクトフォーム-->
            <div class="p-contact-form__items p-form">
              <?php the_content(); ?>
            </div>
            <!--/コンタクトフォーム-->
          </div>
        </div>
      </div>
    </section>
    
    <?php get_footer(); ?>