
    <?php get_header(); ?>
    
    <main class="p-about">
      <div class="p-mv-lower p-mv-lower--bg-about">
        <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--sp u-hidden-md-up">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_sp" />
        </svg>
        <svg class="c-svg p-mv-lower__svg p-mv-lower__svg--pc u-hidden-md-down">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#mv-lower-decoration_pc" />
        </svg>
        <div class="p-mv-lower__heading">
          <h2 class="p-mv-lower__heading-head u-font-italic">
            ABOUT US
          </h2>
          <br>
          <p class="p-mv-lower__heading-foot">
            当社について
          </p>
        </div>
      </div>
      <!--パンくずリスト-->
      <div class="c-breadcrumb u-mt-12">
        <div class="l-inner">
          <ul class="c-breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a class="c-breadcrumb__link" itemprop="item" href="/"><span itemprop="name">ホーム</span></a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a class="c-breadcrumb__link" itemprop="item" href="/about/"><span itemprop="name">当社について</span></a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </div>
      <!--MISSION VISION-->
      <section class="p-about-message l-section">
        <div class="l-inner">
          <div class="p-about-message__item">
            <div class="p-about-message__title p-about-message__title--bg-01">
              <h2 class="p-about-message__title-head u-font-italic">MISSION</h2>
              <p class="p-about-message__title-foot">社会的使命</p>
            </div>
            <div class="p-about-message__text">
              <h3 class="p-about-message__text-head">
                人財育成を通じて、<br>
                豊かな世界を創造する
              </h3>
              <p class="p-about-message__text-foot">
                急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
              </p>
            </div>
          </div>
          <div class="p-about-message__item">
            <div class="p-about-message__title p-about-message__title--bg-02">
              <h2 class="p-about-message__title-head">VISION</h2>
              <p class="p-about-message__title-foot">企業理念</p>
            </div>
            <div class="p-about-message__text">
              <h3 class="p-about-message__text-head">
                文化の垣根を越えた<br class="u-hidden-sm-down">
                人と人とのつながりが新しい価値を生む
              </h3>
              <p class="p-about-message__text-foot">
                コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--/ MISSION VISION-->
      <!--会社概要-->
      <section class="p-about-company l-section">
        <div class="l-inner l-inner--narrow">
          <div class="p-about-company__contents">
            <h2 class="p-about-company__title">
              会社概要
            </h2>
            <dl class="p-about-company__dl">
              <dt class="p-about-company__dt">代表</dt>
              <dd class="p-about-company__dd">波瑠　慶太</dd>
              <dt class="p-about-company__dt">事業内容</dt>
              <dd class="p-about-company__dd">
                ・ビジネス英会話教育事業<br>
                ・異文化交流サポート事業<br>
                ・ビジネス留学事業
              </dd>
              <dt class="p-about-company__dt">設立</dt>
              <dd class="p-about-company__dd">2012年10月03日</dd>
              <dt class="p-about-company__dt">所在地</dt>
              <dd class="p-about-company__dd">〒550-1000 大阪市西区土佐堀9-5-5</dd>
              <dt class="p-about-company__dt">TEL</dt>
              <dd class="p-about-company__dd">06-123-4567（代表）</dd>
              <dt class="p-about-company__dt">FAX</dt>
              <dd class="p-about-company__dd">06-123-4568（代表）</dd>
              <dt class="p-about-company__dt">E-mail</dt>
              <dd class="p-about-company__dd">globalstandard@example.com</dd>
            </dl>
          </div>
        </div>
      </section>
      <!--/会社概要-->
      <!--役員紹介-->
      <div class="p-about-officer l-section l-skew">
        <div class="l-inner">
          <h2 class="p-about-officer__title">役員紹介</h2>
          <ul class="p-about-officer__items">
            <li class="p-about-officer-item">
              <p class="p-about-officer-item__avatar">
                <picture class="p-about-officer-item__picture">
                  <source class="p-about-officer-item__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-directors01.webp" type="image/webp" width="480" height="640" />
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-directors01.jpeg" class="p-about-officer-item__img lazyload" alt="役員の写真" width="480" height="640">
                </picture>
              </p>
              <div class="p-about-officer-item__info">
                <div class="p-about-officer-item__profile">
                  <p class="p-about-officer-item__director">代表取締役社長</p>
                  <h3 class="p-about-officer-item__name">波瑠　慶太</h3>
                </div>
                <p class="p-about-officer-item__career">
                  20年間外資系企業に勤務し、世界17カ国でビジネスを展開。 様々な文化に触れ、コミュニケーションスキルを磨き、同時にその必要性を実感する。
                  自身も講師を務め、実体験から得られた知見を皆様に還元し、グローバルなビジネス展開をサポートいたします。
                </p>
                <ul class="p-about-officer-item__sns-list">
                  <li class="p-about-officer-item__sns-item">
                    <a href="" class="p-about-officer-item__sns-link" target="_blank" rel="noopener noreferrer">
                      <svg class="c-svg p-about-officer-item__sns-svg " width="28" height="28">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-twitter" />
                      </svg>
                    </a>
                  </li>
                  <li class="p-about-officer-item__sns-item">
                    <a href="" class="p-about-officer-item__sns-link" target="_blank" rel="noopener noreferrer">
                      <svg class="c-svg p-about-officer-item__sns-svg" width="28" height="28">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-facebook" />
                      </svg>
                    </a>
                  </li>
                  <li class="p-about-officer-item__sns-item">
                    <a href="" class="p-about-officer-item__sns-link" target="_blank" rel="noopener noreferrer">
                      <svg class="c-svg p-about-officer-item__sns-svg" width="28" height="28">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-instagram" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="p-about-officer-item">
              <p class="p-about-officer-item__avatar">
                <picture class="p-about-officer-item__picture">
                  <source class="p-about-officer-item__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-directors02.webp" type="image/webp" />
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-directors02.jpeg" class="p-about-officer-item__img lazyload" alt="役員の写真">
                </picture>
              </p>
              <div class="p-about-officer-item__info">
                <div class="p-about-officer-item__profile">
                  <p class="p-about-officer-item__director">取締役</p>
                  <h3 class="p-about-officer-item__name">ジャック・スミス</h3>
                </div>
                <p class="p-about-officer-item__career">
                  オーストラリア出身。 英会話の講師として13年のキャリアがあります。 翻訳業務も担当しており、外国映画の日本版DVDの字幕やテレビ番組の英語をヒヤリングなども行なっております。
                  皆様に「より気持ちの伝わる英会話」を習得していただくサポートをいたします。
                </p>
                <ul class="p-about-officer-item__sns-list">
                  <li class="p-about-officer-item__sns-item">
                    <a href="" class="p-about-officer-item__sns-link" target="_blank" rel="noopener noreferrer">
                      <svg class="c-svg p-about-officer-item__sns-svg " width="28" height="28">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-twitter" />
                      </svg>
                    </a>
                  </li>
                  <li class="p-about-officer-item__sns-item">
                    <a href="" class="p-about-officer-item__sns-link" target="_blank" rel="noopener noreferrer">
                      <svg class="c-svg p-about-officer-item__sns-svg" width="28" height="28">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-facebook" />
                      </svg>
                    </a>
                  </li>
                  <li class="p-about-officer-item__sns-item">
                    <a href="" class="p-about-officer-item__sns-link" target="_blank" rel="noopener noreferrer">
                      <svg class="c-svg p-about-officer-item__sns-svg" width="28" height="28">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-instagram" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="p-about-officer-item">
              <p class="p-about-officer-item__avatar">
                <picture class="p-about-officer-item__picture">
                  <source class="p-about-officer-item__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-directors03.webp" type="image/webp" />
                  <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-directors03.jpeg" class="p-about-officer-item__img lazyload" alt="役員の写真">
                </picture>
              </p>
              <div class="p-about-officer-item__info">
                <div class="p-about-officer-item__profile">
                  <p class="p-about-officer-item__director">取締役</p>
                  <h3 class="p-about-officer-item__name">メアリー・ジャクソン</h3>
                </div>
                <p class="p-about-officer-item__career">
                  アメリカ出身。 メジャーリーグ球団「ニューヨークヤンキース」の通訳担当として7年間チームに在籍。 数多くの契約交渉の経験を活かし、国際ビジネスにおけるコミュニケーションのマナーから応用までお伝えいたします。
                </p>
                <ul class="p-about-officer-item__sns-list">
                  <li class="p-about-officer-item__sns-item">
                    <a href="" class="p-about-officer-item__sns-link" target="_blank" rel="noopener noreferrer">
                      <svg class="c-svg p-about-officer-item__sns-svg " width="28" height="28">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-twitter" />
                      </svg>
                    </a>
                  </li>
                  <li class="p-about-officer-item__sns-item">
                    <a href="" class="p-about-officer-item__sns-link" target="_blank" rel="noopener noreferrer">
                      <svg class="c-svg p-about-officer-item__sns-svg" width="28" height="28">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-facebook" />
                      </svg>
                    </a>
                  </li>
                  <li class="p-about-officer-item__sns-item">
                    <a href="" class="p-about-officer-item__sns-link" target="_blank" rel="noopener noreferrer">
                      <svg class="c-svg p-about-officer-item__sns-svg" width="28" height="28">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-instagram" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!--/役員紹介-->
    </main>
    <?php get_footer(); ?>