    
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
    <section class="p-single l-archive">
      <div class="l-archive__inner l-inner">
        <!--メインエリア-->
        <main class="p-single__main l-archive__main">
          <div class="p-single__meta">
            <?php $category = get_the_category(); ?>
            <?php if($category[0]) : ?>
            <a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>" class="p-single__cat">
              <?php echo $category[0]->cat_name; ?>
            </a>
            <?php endif; ?>
            <time class="p-single__time" datetime="<?php the_time(' c '); ?>"><?php the_time('Y.n.j'); ?></time>
          </div>
          <h1 class="p-single__title">
            <?php the_title(); ?>
          </h1>
          <div class="p-single__thumbnail">
            <?php
              if(has_post_thumbnail()) {
                the_post_thumbnail('large' , array(
                  'class' => 'p-single__img',
                ));
              } else {
                echo '<img src="'. esc_url(get_template_directory_uri()) . '/img/common/icatch-news.jpeg" alt="記事の画像" class="p-single__img">';
              }
            ?>
          </div>
          <article class="p-single__content">
            <?php the_content();?>
          </article>

          <!--ページャー-->
          <?php
            $prev_post = get_previous_post(); // 前の投稿を取得
            $next_post = get_next_post(); // 次の投稿を取得
          ?>
          <div class="p-single__post-links">            
            <?php if ($next_post) : ?>
              <div class="p-single__post-next">
                <?php next_post_link('%link', '&lt 前の記事へ');?>
              </div>
            <?php endif; ?>
            <?php if ($prev_post) : ?>
              <div class="p-single__post-prev">
                <?php previous_post_link('%link','次の記事へ &gt'); ?>
              </div>
            <?php endif; ?> 
          </div>
          <!--ページャー-->
        </main>
        <!--/メインエリア-->

        <?php get_sidebar(); ?>

      </div>
    </section>
    
    <?php get_footer(); ?>