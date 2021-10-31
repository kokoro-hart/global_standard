
    <?php get_header(); ?>

    <div class="p-mv-lower p-mv-lower--bg-about">
      <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--sp u-hidden-md-up">
        <use xlink:href="/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
      </svg>
      <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--pc u-hidden-md-down">
        <use xlink:href="/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
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