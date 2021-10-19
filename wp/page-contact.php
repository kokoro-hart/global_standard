    
    <?php get_header(); ?>

    <div class="p-mv-lower p-mv-lower--bg-about">
      <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--sp u-hidden-md-up">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
      </svg>
      <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--pc u-hidden-md-down">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
      </svg>
      <div class="p-mv-lower__heading">
        <h2 class="p-mv-lower__heading-head u-font-italic">
          CONTACT
        </h2>
        <br>
        <p class="p-mv-lower__heading-foot">
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
            <div class="p-contact-form__items c-form">
              <?php the_content(); ?>
            </div>
            <!--/コンタクトフォーム-->
          </div>
        </div>
      </div>
    </section>
    
    <?php get_footer(); ?>