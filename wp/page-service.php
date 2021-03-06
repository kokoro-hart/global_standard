
    <?php get_header(); ?>

    <main>
      <div id="js-fv-trigger" class="p-lower-mv">
        <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--sp u-hidden-md-up">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
        </svg>
        <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--pc u-hidden-md-down">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
        </svg>
        <picture class="p-lower-mv__picture">
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-service_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-service_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-service_sp.jpeg" media="(max-width: 767px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-service_pc.jpeg" class="p-lower-mv__img"  decoding="async" alt="サービスメインビジュアル">
        </picture>
        <div class="p-lower-mv__title">
          <h2 class="p-lower-mv__title-en u-font-italic is-mask-right">
            SERVICE
          </h2>
          <br>
          <p class="p-lower-mv__title-ja is-mask-right">
            サービス
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
      <!--サービスの詳細-->
      <section class="p-service-details l-section">
        <div class="l-inner">
          <p class="p-service-details__intro">
            世界で活躍できる<br>
            グローバルな人材を育てる<br class="u-hidden-md-up">
            ３つの研修プログラム
          </p>
        </div>
        <!--ビジネス英語研修-->
        <article id="english" class="p-service-detail js-trigger">
          <div class="p-service-detail__inner">
            <figure class="p-service-detail__figure is-fade-left">
              <picture class="p-service-detail__picture">
                <source class="p-service-detail__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-service-detail01.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-service-detail01.jpeg" class="p-service-detail__img" alt="ビジネス英語研修の画像">
              </picture>
            </figure>
            <div class="is-fade-left">
              <div class="p-service-detail__contents">
                <span class="p-service-detail__number u-font-italic">01</span>
                <div class="p-service-detail__title">
                  <h2 class="p-service-detail__title-head">ビジネス英語研修</h2>
                  <p class="p-service-detail__title-foot u-font-italic">Business English Training</p>
                </div>
                <p class="p-service-detail__text">
                  ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。<br>
                  海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
                  <br>
                  <br>
                  担当する講師は皆、豊富な海外ビジネス経験者であり、ティーチングスキル、コミュニケーションスキル、人間性に加えて採用後には厳しいトレーニング期間を設けているので、様々な職業や職種に合ったスキルまで身につけられます。<br>
                  また、必要に応じてマンツーマン形式のレッスンを行うことも可能なので、時間の限り話すことができ効率よく上達することができます。
                </p>
                <dl class="p-service-detail__dl">
                  <div class="p-service-detail__dl-row">
                    <dt class="p-service-detail__dt">対象</dt>
                    <dd class="p-service-detail__dd">ビジネスの中で使える英語コミュニケーション能力が必要な方</dd>
                  </div>
                  <div class="p-service-detail__dl-row">
                    <dt class="p-service-detail__dt">費用</dt>
                    <dd class="p-service-detail__dd">時間内容要相談</dd>
                  </div>
                </dl>
                <div class="p-service-detail__link-wrapper">
                  <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-button-square">
                    お申し込みはこちら
                    <svg class="c-svg c-button-square__svg" width="18" height="12">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-arrow02" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </article>
        <!--/ビジネス英語研修-->

        <!--異文化コミュニケーション-->
        <article id="culture" class="p-service-detail l-skew js-trigger">
          <div class="p-service-detail__inner">
            <figure class="p-service-detail__figure is-fade-right">
              <picture class="p-service-detail__picture">
                <source class="p-service-detail__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-service-detail02.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-service-detail02.jpeg" class="p-service-detail__img" alt="異文化コミニュケーションの画像">
              </picture>
            </figure>
            <div class="is-fade-right">
              <div class="p-service-detail__contents">
                <span class="p-service-detail__number u-font-italic">02</span>
                <div class="p-service-detail__title">
                  <h2 class="p-service-detail__title-head">
                    異文化<br class="u-hidden-md-up">
                    コミュニケーション
                  </h2>
                  <p class="p-service-detail__title-foot u-font-italic">
                    Cross-cultural communication
                  </p>
                </div>
                <p class="p-service-detail__text">
                  急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。 言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。
                  <br>
                  多様な価値観を尊重しながら言葉の垣根を越え、コミュニケーションの力で他者を理解しようとする「異文化コミュニケーション」はこれからの時代、さらに重要となるスキルと言えます。
                  <br>
                  <br>
                  コミュニケーションの基本となる日本語と英語の力を鍛えつつ、アプローチする国の文化を同時に学び、スムーズなビジネス展開をサポートいたします。
                </p>
                <dl class="p-service-detail__dl">
                  <div class="p-service-detail__dl-row">
                    <dt class="p-service-detail__dt">対象</dt>
                    <dd class="p-service-detail__dd">海外へのビジネス展開を検討されている方</dd>
                  </div>
                  <div class="p-service-detail__dl-row">
                    <dt class="p-service-detail__dt">費用</dt>
                    <dd class="p-service-detail__dd">時間内容要相談</dd>
                  </div>
                </dl>
                <div class="p-service-detail__link-wrapper">
                  <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-button-square">
                    お申し込みはこちら
                    <svg class="c-svg c-button-square__svg" width="18" height="12">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-arrow02" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </article>
        <!--/異文化コミュニケーション-->

        <!--ビジネス留学プログラム-->
        <article id="abroad" class="p-service-detail js-trigger">
          <div class="p-service-detail__inner">
            <figure class="p-service-detail__figure is-fade-left">
              <picture class="p-service-detail__picture">
                <source class="p-service-detail__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-service-detail03.webp" type="image/webp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-service-detail03.jpeg" class="p-service-detail__img" alt="ビジネス留学プログラムの画像">
              </picture>
            </figure>
            <div class="is-fade-left">
              <div class="p-service-detail__contents">
                <span class="p-service-detail__number u-font-italic">03</span>
                <div class="p-service-detail__title">
                  <h2 class="p-service-detail__title-head">
                    ビジネス留学<br class="u-hidden-md-up">
                    プログラム
                  </h2>
                  <p class="p-service-detail__title-foot u-font-italic">
                    Business study abroad program
                  </p>
                </div>
                <p class="p-service-detail__text">
                  将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。
                  <br>
                  通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。
                  <br>
                  <br>
                  お申し込みいただく際に綿密なヒアリングを行い、おすすめの留学先を複数ピックアップいたします。海外ビジネス経験豊富な講師が、留学後のキャリアプラン作成までお手伝いいたします。
                </p>
                <dl class="p-service-detail__dl">
                  <div class="p-service-detail__dl-row">
                    <dt class="p-service-detail__dt">対象</dt>
                    <dd class="p-service-detail__dd">英語コミュニケーション能力を習得し、将来的に海外で働きたい方</dd>
                  </div>
                  <div class="p-service-detail__dl-row">
                    <dt class="p-service-detail__dt">費用</dt>
                    <dd class="p-service-detail__dd">時間内容要相談</dd>
                  </div>
                </dl>
                <div class="p-service-detail__link-wrapper">
                  <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-button-square">
                    お申し込みはこちら
                    <svg class="c-svg c-button-square__svg" width="18" height="12">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-arrow02" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </article>
        <!--/ビジネス留学プログラム-->
        
      </section>
      <!--/サービスの詳細-->
      <!--導入の流れ-->
      <section class="p-service-flow l-section js-trigger">
        <div class="l-inner">
          <h2 class="p-service-flow__title">導入の流れ</h2>
          <article class="p-service-flow__contents">
            <ol class="p-service-flow__list">
              <li class="p-service-flow__item is-fade-right">
                <div class="p-service-flow__step u-font-italic">
                  <p class="p-service-flow__step-text">STEP</p>
                  <p class="p-service-flow__step-number"></p>
                </div>
                <div class="p-service-flow__item-textarea">
                  <h3 class="p-service-flow__item-title">お問い合わせ</h3>
                  <p class="p-service-flow__item-text">
                    お問い合わせフォームより必要事項を誤入力の上、お申し込みください
                  </p>
                </div>
              </li>
              <li class="p-service-flow__item is-fade-right">
                <div class="p-service-flow__step u-font-italic">
                  <p class="p-service-flow__step-text">STEP</p>
                  <p class="p-service-flow__step-number"></p>
                </div>
                <div class="p-service-flow__item-textarea">
                  <h3 class="p-service-flow__item-title">ご提案</h3>
                  <p class="p-service-flow__item-text">
                    ご依頼の背景をお伺いし、必要なスキルと習得期間から最適なプランをご提案いたします
                  </p>
                </div>
              </li>
              <li class="p-service-flow__item is-fade-right">
                <div class="p-service-flow__step u-font-italic">
                  <p class="p-service-flow__step-text">STEP</p>
                  <p class="p-service-flow__step-number"></p>
                </div>
                <div class="p-service-flow__item-textarea">
                  <h3 class="p-service-flow__item-title">日程調整</h3>
                  <p class="p-service-flow__item-text">
                    研修日数と開始日を調整し、今後の流れ全体の段取りをご提案いたします
                  </p>
                </div>
              </li>
              <li class="p-service-flow__item is-fade-right">
                <div class="p-service-flow__step u-font-italic">
                  <p class="p-service-flow__step-text">STEP</p>
                  <p class="p-service-flow__step-number"></p>
                </div>
                <div class="p-service-flow__item-textarea">
                  <h3 class="p-service-flow__item-title">研修開始</h3>
                  <p class="p-service-flow__item-text">
                    研修当日はお約束のお時間の30分前に講師が伺います。
                  </p>
                  <p class="p-service-flow__item-caution">
                    ※キャンセルのご連絡は2日前までにお願いいたします
                  </p>
                </div>
              </li>        
            </ol>
          </article>
        </div>
      </section>
      <!--/導入の流れ-->
      <!--良くある質問-->
      <section class="p-service-faq">
        <div class="l-inner">
          <h2 class="p-service-faq__title">良くある質問</h2>
          <!--アコーディオンメニュー-->
          <dl class="p-service-faq__accordion p-accordion" role="tablist">
            <?php
              $args = array(
                'posts_per_page' => 6,
                'post_type' => 'faq',
                'orderby' => 'date',
                'order' => 'DESC'
              );
              $faq_posts = get_posts( $args );
              if ( $faq_posts ) :

              foreach ( $faq_posts as $post ) :
              setup_postdata( $post );
            ?>
            <div class="p-accordion__row">
              <?php if ( get_field('q')) :  ?>
              <dt class="p-accordion__title js-accordion-title" tabindex="0" role="tab" aria-controls="accordion">
                <?php the_field('q'); ?>
              </dt>
              <?php endif; ?>
              <?php if ( get_field('a')) :  ?>
              <dd class="p-accordion__content" role="tabpanel" aria-labelledby="accordion" aria-expanded="false" aria-hidden="false">
                <?php the_field('a'); ?>
              </dd>
              <?php endif; ?>
            </div>
            <?php
              endforeach;
              endif;
              wp_reset_postdata();
            ?>
          </dl>
          <!--アコーディオンメニュー-->
        </div>
      </section>
      <!--/良くある質問-->
    </main>
    
    <?php get_footer(); ?>