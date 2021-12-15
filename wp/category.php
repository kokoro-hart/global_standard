    <?php get_header(); ?>

    <div class="p-lower-mv">
      <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--sp u-hidden-md-up">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
      </svg>
      <svg class="c-svg p-lower-mv__svg p-lower-mv__svg--pc u-hidden-md-down">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
      </svg>
      <picture class="p-lower-mv__picture">
        <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-news_sp.webp" media="(max-width: 767px)" type="image/webp" />
        <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/mv-news_pc.webp" media="(min-width: 768px)" type="image/webp" />
        <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/mv-news_sp.jpeg" media="(max-width: 767px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/mv-news_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="お知らせメインビジュアル">
      </picture>
      <div class="p-lower-mv__title">
        <h2 class="p-lower-mv__title-en u-font-italic">
          NEWS
        </h2>
        <br>
        <p class="p-lower-mv__title-ja">
          お知らせ
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
    <section class="p-news l-archive">
      <div class="l-archive__inner l-inner">
        <!--メインエリア-->
        <main class="p-news-main l-archive__main">
          <h2 class="p-news-main__title"><?php the_archive_title(''); ?></h2>
          <?php
            if(have_posts()) :
            while(have_posts()) : the_post();
          ?>
          <a href="<?php the_permalink(); ?>" class="p-news-main__item p-news-item">
            <div class="p-news-item__thumbnail">
              <?php
                if(has_post_thumbnail()) {
                  the_post_thumbnail('full' , array(
                    'class' => 'p-news-item__img lazyload',
                  ));
                } else {
                  echo '<img data-src="'. esc_url(get_template_directory_uri()) . '/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-item__img lazyload">';
                }
              ?>
            </div>
            <div class="p-news-item__body">
              <div class="p-news-item__meta">
                <div class="p-news-item__cats">
                  <?php $category = get_the_category();?>
                  <?php if($category[0]) : ?>
                  <span class="p-news-item__cat"><?php echo $category[0]->cat_name; ?></span>
                  <?php endif; ?>
                </div>
                <time class="p-news-item__time" datetime="<?php the_time( 'c' ); ?>"><?php the_time('Y.n.j'); ?></time>
              </div>
              <h2 class="p-news-item__title"><?php the_title(); ?></h2>
            </div>
          </a>

          <?php
            endwhile;
            endif;
          ?>
          
          <!--ページネーション-->
          <?php if(paginate_links()): ?>
            <div class="p-news-main__pagination c-pagination">
              <?php
              echo 
              paginate_links(array(
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="c-svg c-pagination__svg" width="8" height="14"><path d="M7.163.317a1.081 1.081 0 00-1.524 0L.314 5.659a1.076 1.076 0 00-.033 1.485l5.247 5.263a1.076 1.076 0 101.524-1.518l-4.46-4.527 4.571-4.527a1.065 1.065 0 000-1.518z" fill="#888"/></svg>',
                'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="c-svg c-pagination__svg" width="8" height="14"><path d="m14.732 10.3a1.081 1.081 0 0 1 1.524 0l5.325 5.342a1.076 1.076 0 0 1 .033 1.485l-5.247 5.264a1.076 1.076 0 1 1 -1.524-1.518l4.46-4.527-4.571-4.527a1.065 1.065 0 0 1 0-1.519z" transform="translate(-14.414 -9.983)" fill="#888"/></svg>',
              ));
              ?>
            </div>
          <?php endif;?>
          <!--/ページネーション-->

        </main>
        <!--/メインエリア-->

        <?php get_sidebar(); ?>
        
      </div>
    </section>
    <?php get_footer(); ?>