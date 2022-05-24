    
    <?php get_header(); ?>
    
    <main>
      <!--メインビジュアル-->
      <section class="p-mv">
        <div class="p-mv__inner">
          <div class="p-mv-slider">
            <div class="p-mv-slider__items">
              <picture class="p-mv-slider__item">
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv01_sp.webp" media="(max-width: 767px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv01_pc.webp" media="(min-width: 768px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv01_sp.jpeg" media="(max-width: 767px)" />
                <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv01_pc.jpeg" class="p-mv-slider__img" alt="スライダー画像" decoding="async">
              </picture>
              <picture class="p-mv-slider__item">
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv05_sp.webp" media="(max-width: 767px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv05_pc.webp" media="(min-width: 768px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv05_sp.jpeg" media="(max-width: 767px)" />
                <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv05_pc.jpeg" class="p-mv-slider__img" alt="スライダー画像" decoding="async">
              </picture>
              <picture class="p-mv-slider__item">
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv03_sp.webp" media="(max-width: 767px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv03_pc.webp" media="(min-width: 768px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv03_sp.jpeg" media="(max-width: 767px)" />
                <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv03_pc.jpeg" class="p-mv-slider__img" alt="スライダー画像" decoding="async">
              </picture>
              <picture class="p-mv-slider__item">
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv04_sp.webp" media="(max-width: 767px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv04_pc.webp" media="(min-width: 768px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv04_sp.jpeg" media="(max-width: 767px)" />
                <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv04_pc.jpeg" class="p-mv-slider__img" alt="スライダー画像" decoding="async">
              </picture>
              <picture class="p-mv-slider__item">
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv02_sp.webp" media="(max-width: 767px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-mv02_pc.webp" media="(min-width: 768px)" type="image/webp" />
                <source class="p-mv-slider__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv02_sp.jpeg" media="(max-width: 767px)" />
                <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-mv02_pc.jpeg" class="p-mv-slider__img" alt="スライダー画像" decoding="async">
              </picture>
            </div>
            <div id="js-fv-trigger" class="p-mv__contents">
              <h2 class="p-mv__title-wrapper">
                <span class="p-mv__title u-font-italic is-mask-text u-hidden-md-up">YOU CAN</span>
                <span class="p-mv__title u-font-italic is-mask-text u-hidden-md-up">CHANGE</span>
                <span class="p-mv__title u-font-italic is-mask-text u-hidden-md-down">YOU CAN CHANGE</span>
                <span class="p-mv__title u-font-italic is-mask-text">THE WORLD</span>
              </h2>
              <p class="p-mv__lead is-mask-text--white">世界で活躍できるグローバルな人材を育てる</p>
            </div>
          </div>
        </div>
      </section>
      <!--/メインビジュアル-->
      <!--当社について-->
      <section class="p-home-about l-section l-skew">
        <div class="p-home-about__bg-wrapper">
          <div class="p-home-about__bg u-hidden-md-down"></div>
        </div>
        <div class="p-home-about__inner l-inner">
          <div class="l-section__head">
            <div class="c-section-title">
              <h2 class="c-section-title__head u-font-italic">ABOUT US</h2>
              <p class="c-section-title__foot">当社について</p>
            </div>
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="c-button-more u-hidden-md-down">
              <span class="c-button-more__text u-font-italic u-color-white">View more</span>
              <span class="c-button-more__arrow c-button-more__arrow--color-white"></span>
              <span class="c-button-more__circle c-button-more__circle--border"></span>
            </a>
          </div>
          <div class="p-home-about__contents">
            <div class="p-home-about__text">
              急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
              <br>
              <br>
              コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。
              <br>
              <br>
              文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
            </div>
            <div class="p-home-about__img-wrapper">
              <picture class="p-home-about__picture">
                <source class="p-home-about__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-company.webp" type="image/webp" />
                <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-company.jpeg" class="p-home-about__img" width="1362" height="852" alt="about画像" loading="lazy">
              </picture>
              <div class="p-home-about__link-wrapper u-hidden-md-up">
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="c-button-more">
                  <span class="c-button-more__text u-font-italic u-color-white">View more</span>
                  <span class="c-button-more__arrow c-button-more__arrow--color-white"></span>
                  <span class="c-button-more__circle c-button-more__circle--border"></span>
                </a>
              </div>
              <div class="p-home-about__bg u-hidden-md-up"></div>
            </div>
          </div>
        </div>
      </section>
      <!--/当社について-->
      <!--サービス-->
      <section class="p-home-service l-section l-skew">
        <div class="p-home-service__inner l-inner">
          <div class="l-section__head">
            <div class="c-section-title">
              <h2 class="c-section-title__head">SERVICE</h2>
              <p class="c-section-title__foot">サービス</p>
            </div>
            <a href="<?php echo esc_url(home_url('/service')); ?>" class="c-button-more u-hidden-md-down">
              <span class="c-button-more__text u-font-italic u-color-black">View more</span>
              <span class="c-button-more__arrow c-button-more__arrow--color-black"></span>
              <span class="c-button-more__circle"></span>
            </a>
          </div>
          <div class="p-home-service__contents">
            <ul class="p-home-service__cards">
              <li class="p-card-service p-home-service__card">
                <div class="p-card-service__head">
                  <svg class="p-card-service__number" width="121" height="98" viewBox="0 0 103 125" xmlns="http://www.w3.org/2000/svg">
                    <g font-family="FiraSans-MediumItalic, Fira Sans" font-size="100" font-style="italic" font-weight="500"><text fill="#fff" transform="translate(103 98)"><tspan x="-98.4" y="0">01</tspan></text><text fill="#023e78" transform="translate(99 94)"><tspan x="-98.4" y="0">01</tspan></text></g>
                  </svg>
                  <picture class="p-card-service__picture">
                    <source class="p-card-service__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-service01.webp" type="image/webp" />
                    <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-service01.jpeg" class="p-card-service__img" width="640" height="854" alt="service画像">
                  </picture>
                  <h2 class="p-card-service__title">
                    <span class="p-card-service__title-inside">
                      ビジネス英語研修
                    </span>
                  </h2>
                </div>
                <p class="p-card-service__text">
                  ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
                </p>
              </li>
              <li class="p-card-service p-home-service__card">
                <div class="p-card-service__head">
                  <svg class="p-card-service__number" width="121" height="105" viewBox="0 0 103 125" xmlns="http://www.w3.org/2000/svg">
                    <g font-family="FiraSans-MediumItalic, Fira Sans" font-size="100" font-style="italic" font-weight="500"><text fill="#fff" transform="translate(103 98)"><tspan x="-98.4" y="0">02</tspan></text><text fill="#023e78" transform="translate(99 94)"><tspan x="-98.4" y="0">02</tspan></text></g>
                  </svg>
                  <picture class="p-card-service__picture">
                    <source class="p-card-service__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-service02.webp" type="image/webp" />
                    <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-service02.jpeg" class="p-card-service__img" width="640" height="854" alt="service画像">
                  </picture>
                  <h2 class="p-card-service__title">
                    <span class="p-card-service__title-inside">
                      異文化
                    </span>
                    <br>
                    <span class="p-card-service__title-inside">
                      コミュニケーション研修
                    </span>
                  </h2>
                </div>
                <p class="p-card-service__text">
                  急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。
                  言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。
                </p>
              </li>
              <li class="p-card-service p-home-service__card">
                <div class="p-card-service__head">
                  <svg class="p-card-service__number" width="121" height="106" viewBox="0 0 103 125" xmlns="http://www.w3.org/2000/svg">
                    <g font-family="FiraSans-MediumItalic, Fira Sans" font-size="100" font-style="italic" font-weight="500"><text fill="#fff" transform="translate(103 98)"><tspan x="-98.4" y="0">03</tspan></text><text fill="#023e78" transform="translate(99 94)"><tspan x="-98.4" y="0">03</tspan></text></g>
                  </svg>
                  <picture class="p-card-service__picture">
                    <source class="p-card-service__img" srcset="<?php echo esc_url(get_template_directory_uri());  ?>/img/webp/img-service03.webp" type="image/webp" />
                    <img src="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/img-service03.jpeg" class="p-card-service__img" width="640" height="854" alt="service画像">
                  </picture>
                  <h2 class="p-card-service__title">
                    <span class="p-card-service__title-inside">
                      ビジネス留学
                    </span>
                    <br>
                    <span class="p-card-service__title-inside">
                      サポートプログラム
                    </span>
                  </h2>
                </div>
                <p class="p-card-service__text">
                  将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。
                  通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。
                </p>
              </li>
            </ul>
            <div class="p-home-service__link-wrapper u-hidden-md-up">
              <a href="<?php echo esc_url(home_url('/service')); ?>" class="c-button-more">
                <span class="c-button-more__text u-font-italic">View more</span>
                <span class="c-button-more__arrow"></span>
                <span class="c-button-more__circle"></span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!--/サービス-->
      <!--導入事例-->
      <section class="p-home-case l-section">
        <div class="p-home-case__inner l-inner">
          <div class="l-section__head">
            <div class="c-section-title">
              <h2 class="c-section-title__head u-color-white">CASE STUDY</h2>
              <p class="c-section-title__foot u-color-white">導入事例</p>
            </div>
            <a href="<?php echo esc_url(home_url('/case')); ?>" class="c-button-more u-hidden-md-down">
              <span class="c-button-more__text u-font-italic u-color-white">View more</span>
              <span class="c-button-more__arrow c-button-more__arrow--color-white"></span>
              <span class="c-button-more__circle c-button-more__circle--border"></span>
            </a>
          </div>
          <?php
            $args = array(
              'post_type' => 'case',//導入事例の投稿タイプ
              'posts_per_page' => 6,
            );
            $case_query = new WP_Query( $args );
            if ( $case_query->have_posts() ): 
          ?>
          <div class="p-home-case__cards">
            <?php while ( $case_query->have_posts() ): $case_query->the_post();  ?>
            <?php $slug = $post->post_name; //投稿のスラッグを取得 ?>
            <a href="<?php echo esc_url(home_url('/case')) .'#'.$slug; //case#slugの形式で出力?>" class="p-home-case__card p-card-case">
              <p class="p-card-case__img-wrapper">
                <?php
                  if(has_post_thumbnail()) {
                    the_post_thumbnail('full', array(
                      'class' => 'p-card-case__img'
                    ));
                  } else {
                    echo '<img src="'. esc_url(get_template_directory_uri()) . '/img/common/img-case01.png" alt="導入事例ロゴ" class="p-card-case__img';
                  }
                ?>
              </p>
              <h3 class="p-card-case__title"><?php the_title(); ?>　様</h3>
              <div class="p-card-case__links">
                <div class="p-card-case__cats">
                  <div class="p-card-case__cat"><?php echo esc_html( get_the_terms( get_the_ID(), 'training' )[0]->name );//研修内容を出力 ?></div>
                </div>
                <svg class="c-svg p-card-case__arrow" width="29" height="29">
                  <use xlink:href="<?php echo esc_url(get_template_directory_uri());  ?>/img/svg/sprite.min.svg#icon-arrow01" />
                </svg>
              </div>
            </a>
            <?php endwhile; ?>
          </div>
          <?php endif; wp_reset_postdata();?>
          <div class="p-home-case__link-wrapper u-hidden-md-up">
            <a href="<?php echo esc_url(home_url('/case')); ?>" class="c-button-more">
              <span class="c-button-more__text u-font-italic u-color-white">View more</span>
              <span class="c-button-more__arrow c-button-more__arrow--color-white"></span>
              <span class="c-button-more__circle c-button-more__circle--border"></span>
            </a>
          </div>
        </div>
      </section>
      <!--/導入事例-->
      <!--新着情報-->
      <section class="p-home-news l-section l-skew">
        <div class="p-home-news__inner l-inner">
          <div class="l-section__head">
            <div class="c-section-title">
              <h2 class="c-section-title__head u-font-italic">NEWS</h2>
              <p class="c-section-title__foot">新着情報</p>
            </div>
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="c-button-more u-hidden-md-down">
              <span class="c-button-more__text u-font-italic u-color-black">View more</span>
              <span class="c-button-more__arrow c-button-more__arrow--color-black"></span>
              <span class="c-button-more__circle"></span>
            </a>
          </div>
          <div class="p-home-news__items">
            <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
              );
              $new_posts = get_posts($args);
              foreach($new_posts as $post) : setup_postdata($post);
            ?>
            <a href="<?php the_permalink(); ?>" class="p-home-news__item">
              <div class="p-home-news__info">
                <?php $category = get_the_category();?>
                <?php if($category[0]) : ?>
                  <span class="p-home-news__info-category"><?php echo $category[0]->cat_name; ?></span>
                <?php endif; ?>
                <time class="p-home-news__info-time" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
              </div>
              <h3 class="p-home-news__title"><?php the_title(); ?></h3>
            </a>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <div class="p-home-news__link-wrapper u-hidden-md-up">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="c-button-more">
              <span class="c-button-more__text u-font-italic">View more</span>
              <span class="c-button-more__arrow"></span>
              <span class="c-button-more__circle"></span>
            </a>
          </div>
        </div>
      </section>
      <!--/新着情報-->
    </main>
    
    <?php get_footer(); ?>