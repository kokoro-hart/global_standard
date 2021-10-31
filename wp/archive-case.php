
    <?php get_header(); ?>

    <!--メインビジュアル-->
    <div class="p-mv-lower p-mv-lower--bg-about">
      <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--sp u-hidden-md-up">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
      </svg>
      <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--pc u-hidden-md-down">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
      </svg>
      <div class="p-mv-lower__heading">
        <h2 class="p-mv-lower__heading-head u-font-italic">
          CASE STUDY
        </h2>
        <br>
        <p class="p-mv-lower__heading-foot">
          導入事例
        </p>
      </div>
    </div>
    <!--/メインビジュアル-->

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

    <section class="p-case">
      <div class="l-inner">
        <!--導入事例ナビゲーション-->
        <nav class="p-case-nav">
          <ul class="p-case-nav__list">
            <?php
              $training_terms = get_terms( 'training', array(
                'hide_empty' => false
              ));
              foreach ( $training_terms as $training_term ) :
            ?>
            <li class="p-case-nav__item"><a href="#<?php echo esc_html( $training_term->slug ); ?>" class="p-case-nav__link"><?php echo esc_html( $training_term->name ); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <!--導入事例ナビゲーション-->

        <?php
          // タクソノミ取得
          $catargs = array(
            'taxonomy' => 'training'//研修内容
          );
          $catlists = get_categories( $catargs );
          foreach($catlists as $cat) :
        ?>

        <!--導入事例一覧-->
        <section id="<?php echo $cat->slug; //idにスラッグを出力 ?>" class="p-case-summary">
          <h2 class="p-case-summary__title">
            <?php echo $cat->name; //研修内容 ?>
            <span class="p-case-summary__title-foot u-font-italic">
              <?php echo $cat->description; //研修内容の説明 ?>
            </span>
          </h2>
          <article class="p-case-summary__items">
            <?php
              $args = array(
                'posts_per_page' => -1,
                'post_type' => 'case',
                'training' => $cat->slug,
                'orderby' => 'date',
                'order' => 'DESC'
              );
              $my_posts = get_posts( $args );
              if ( $my_posts ) :

              foreach ( $my_posts as $post ) :
              setup_postdata( $post );
            ?>
            <?php $slug = $post->post_name; //投稿のスラッグを取得 ?>

            <!--導入事例カード-->
            <div id="<?php echo $slug; ?>" class="p-case-summary-item">
              <div class="p-case-summary-item__head">
                <div class="p-case-summary-item__heading">
                  <?php if ( get_field('business')) :  ?>
                    <p class="p-case-summary-item__business"><?php the_field( 'business' ); //事業名 ?></p>
                  <?php endif; ?>

                  <p class="p-case-summary-item__name">
                    <?php the_title(); //会社名 ?>
                    <span class="p-case-summary-item__mr">様</span>
                  </p>
                </div>
                <p class="p-case-summary-item__logo">
                  <?php
                    //企業ロゴ（アイキャッチ画像）
                    if(has_post_thumbnail()) {
                      the_post_thumbnail('small', array(
                        'class' => 'p-case-summary-item__img lazyload'
                      ));
                    } else {
                      echo '<img data-src="'. esc_url(get_template_directory_uri()) . '/img/common/img-case01.png" alt="導入事例ロゴ" class="p-case-summary-item__img lazyload';
                    }
                  ?>
                </p>
              </div>
              <div class="p-case-summary-item__body">
                  <h3 class="p-case-summary-item__title">
                    研修コース：
                    <span class="p-case-summary-item__title p-case-summary-item__title--course-name">
                      <?php echo $cat->name; //研修内容 ?>
                    </span>
                  </h3>
                <div class="p-case-summary-item__dl">
                  <?php if(get_field('purpose')): ?>
                  <div class="p-case-summary-item__row">
                    <dt class="p-case-summary-item__dt">
                      <svg class="c-svg p-case-summary-item__svg" width="15" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-check" />
                      </svg>
                      研修の目的
                    </dt>
                    <dd class="p-case-summary-item__dd">
                      <?php the_field('purpose'); //研修の目的 ?>
                    </dd>
                  </div>
                  <?php endif; ?>
                  <?php if(get_field('reason')): ?>
                  <div class="p-case-summary-item__row">
                    <dt class="p-case-summary-item__dt">
                      <svg class="c-svg p-case-summary-item__svg" width="15" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-check" />
                      </svg>
                      選んだ理由
                    </dt>
                    <dd class="p-case-summary-item__dd">
                      <?php the_field('reason'); //選んだ理由 ?>
                    </dd>
                  </div>
                  <?php endif; ?>
                  <?php if(get_field('outcome')): ?>
                  <div class="p-case-summary-item__row">
                    <dt class="p-case-summary-item__dt">
                      <svg class="c-svg p-case-summary-item__svg" width="15" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-check" />
                      </svg>
                      導入後の成果・効果
                    </dt>
                    <dd class="p-case-summary-item__dd">
                      <?php the_field('outcome'); //導入後の成果・効果 ?>
                    </dd>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <!--/導入事例カード-->

            <?php
              endforeach;
              endif;
              wp_reset_postdata();
            ?>
          </article>
          <!--導入事例詳細ボタン-->
          <div class="p-case__link-wrapper">
            <a href="<?php echo esc_url(home_url('/service')) .'#'. $cat->slug; //service#slugの形式で出力 ?>" class="c-button-square p-case-summary__button">
              <?php echo $cat->name; // 研修内容 ?>の詳細
              <svg class="c-svg c-button-square__svg" width="18" height="12">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-arrow02" />
              </svg>
            </a>
          </div>
          <!--/導入事例詳細ボタン-->
        </section>
        <!--/導入事例一覧-->

        <?php endforeach; ?>
      </div>
    </section>
    
    <?php get_footer(); ?>