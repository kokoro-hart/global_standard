    <?php get_header(); ?>

    <div class="p-mv-lower p-mv-lower--bg-news">
      <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--sp u-hidden-md-up">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
      </svg>
      <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--pc u-hidden-md-down">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
      </svg>
      <div class="p-mv-lower__heading">
        <h2 class="p-mv-lower__heading-head u-font-italic">
          NEWS
        </h2>
        <br>
        <p class="p-mv-lower__heading-foot">
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
          <h2 class="p-news-main__title">ニュース</h2>
          <a href="single.html" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">カテゴリ</span>
                  <span class="p-news-main-item__cat">カテゴリ</span>
                  <span class="p-news-main-item__cat">カテゴリ</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自</h2>
            </div>
          </a>
          <a href="" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">営業時間</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">お盆期間中の営業について</h2>
            </div>
          </a>
          <a href="" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">その他</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自…</h2>
            </div>
          </a>
          <a href="" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">カテゴリ</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自…</h2>
            </div>
          </a>
          <a href="" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">カテゴリ</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自…</h2>
            </div>
          </a>
          <a href="" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">カテゴリ</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自…</h2>
            </div>
          </a>
          <a href="" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">カテゴリ</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自…</h2>
            </div>
          </a>
          <a href="" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">カテゴリ</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自…</h2>
            </div>
          </a>
          <a href="" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">カテゴリ</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自…</h2>
            </div>
          </a>
          <a href="" class="p-news-main-item">
            <div class="p-news-main-item__thumbnail">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/icatch-news.jpeg" alt="記事の画像" class="p-news-main-item__img lazyload">
            </div>
            <div class="p-news-main-item__body">
              <div class="p-news-main-item__meta">
                <div class="p-news-main-item__cats">
                  <span class="p-news-main-item__cat">カテゴリ</span>
                </div>
                <time class="p-news-main-item__time" datetime="2021.60.08">2021.60.08</time>
              </div>
              <h2 class="p-news-main-item__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自…</h2>
            </div>
          </a>
          <!--ページネーション-->
          <div class="p-news-main__pagination c-pagination">
            <a href="" class="prev page-numbers">
              <svg class="c-svg c-pagination__svg" width="8" height="14">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#pagination-prev" />
              </svg>
            </a>
            <a href="" class="page-numbers current">1</a>
            <a href="" class="page-numbers">2</a>
            <a href="" class="page-numbers">3</a>
            <a href="" class="next page-numbers">
              <svg class="c-svg c-pagination__svg" width="8" height="14">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#pagination-next" />
              </svg>
            </a>
          </div>
          <!--/ページネーション-->
        </main>
        <!--/メインエリア-->

        <?php get_sidebar(); ?>
        
      </div>
    </section>
    <?php get_footer(); ?>