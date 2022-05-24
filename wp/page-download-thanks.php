
    <?php get_header(); ?>

    <div class="p-lower-mv">
      <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--sp u-hidden-md-up">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
      </svg>
      <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--pc u-hidden-md-down">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
      </svg>
      <picture class="p-lower-mv__picture">
        <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-download_sp.webp" media="(max-width: 767px)" type="image/webp" />
        <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-download_pc.webp" media="(min-width: 768px)" type="image/webp" />
        <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-download_sp.jpeg" media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-download_pc.jpeg" class="p-lower-mv__img" decoding="async" alt="資料ダウンロードメインビジュアル">
      </picture>
      <div class="p-lower-mv__title">
        <h2 class="p-lower-mv__title-en u-font-italic">
          DOWNLOAD
        </h2>
        <br>
        <p class="p-lower-mv__title-ja">
          資料ダウンロード
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
    <!--パンくずリスト-->
    <section class="p-download">
      <div class="p-download__inner l-inner">
        <!--研修プログラム-->
        <div class="p-download-document">
          <h2 class="p-download-document__title">
            世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。
          </h2>
          <p class="p-download-document__feature">
            <picture class="p-download-document__picture">
              <source class="p-download-document__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-document.webp" type="image/webp" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-document.png" class="p-download-document__img" alt="研修資料の画像">
            </picture>
          </p>
          <p class="p-download-document__text">
            急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。 ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。
            <br>
            <br>
            英語に苦手意識のある方でもご安心ください。 ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。 まずはこちらの資料をごらんください。
          </p>
        </div>
        <!--/研修プログラム-->
        <!--フォーム（送信完了）-->
        <div class="p-download-form">
          <h2 class="p-download-form__title">
            資料請求いただき
            <br>
            ありがとうございました！
          </h2>
          <p class="p-download-form__text">
            資料は以下のリンクよりダウンロードください。<br>
            → <a href="" target="_blank" rel="noopener noreferrer" class="p-download-form__text-link">資料のダウンロードリンクはこちら</a>
          </p>
          <p class="p-download-form__text">
            また、ご入力いただいたメールアドレスの方へもダウンロードリンクを送付しておりますので、ご確認いただけますと幸いです。
          </p>
        </div>
        <!--/フォーム（送信完了）-->
      </div>
    </section>
    
    <?php get_footer(); ?>