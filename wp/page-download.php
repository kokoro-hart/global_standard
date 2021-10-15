
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
          DOWNLOAD
        </h2>
        <br>
        <p class="p-mv-lower__heading-foot">
          資料ダウンロード
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
            <a class="c-breadcrumb__link" itemprop="item" href="/download/"><span itemprop="name">資料ダウンロード</span></a>
            <meta itemprop="position" content="2" />
          </li>
        </ul>
      </div>
    </div>
    <!--/パンくずリスト-->
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
        <!--資料フォーム-->
        <div class="p-download-form">
          <h2 class="p-download-form__title">資料ダウンロード</h2>
          <div class="p-download-form__items c-form">
            <form action="">
              <dl class="c-form__dl">
                <div class="c-form__row">
                  <dt class="c-form__dt">
                    <label class="c-form__label" for="your-company">会社名</label>
                  </dt>
                  <dd class="c-form__dd">
                    <input class="c-form__input" name="" id="your-company" type="text" placeholder="例）〇〇株式会社" autocomplete="organization">
                  </dd>
                </div>
                <div class="c-form__row">
                  <dt class="c-form__dt">
                    <label class="c-form__label" for="your-department">部署</label>
                  </dt>
                  <dd class="c-form__dd">
                    <input class="c-form__input" name="" id="your-department" type="text" placeholder="例）人事部" autocomplete="off">
                  </dd>
                </div>
                <div class="c-form__row">
                  <dt class="c-form__dt">
                    <label class="c-form__label c-form__label--required" for="your-name">お名前</label>
                  </dt>
                  <dd class="c-form__dd">
                    <input class="c-form__input" name="" id="your-name" type="text" placeholder="例）鈴木一郎" autocomplete="name" required>
                  </dd>
                </div>
                <div class="c-form__row">
                  <dt class="c-form__dt">
                    <label class="c-form__label c-form__label--required" for="your-ruby">お名前（フリガナ）</label>
                  </dt>
                  <dd class="c-form__dd">
                    <input class="c-form__input" name="" id="your-ruby" type="text" placeholder="例）スズキ イチロウ" autocomplete="off" required>
                  </dd>
                </div>
                <div class="c-form__row">
                  <dt class="c-form__dt">
                    <label class="c-form__label c-form__label--required" for="your-email">メールアドレス</label>
                  </dt>
                  <dd class="c-form__dd">
                    <input class="c-form__input" name="" id="your-email" type="email" placeholder="例）info@example.com" autocomplete="email" required>
                  </dd>
                </div>
              </dl>
              <div class="c-form__privacy">
                <label class="c-form__privacy-label">
                  <input class="c-form__privacy-checkbox" type="checkbox" value="プライバシーポリシーの同意">
                  <span class="c-form__privacy-part"></span>
                  <a href="" class="c-form__privacy-link">個人情報保護方針</a> に同意します。
                </label>
              </div>
              <div class="c-form__submit-wrapper">
                <input type="submit" class="c-button-square c-button-square--submit" value="資料をダウンロードする">
              </div>
            </form>
          </div>
        </div>
        <!--/資料フォーム-->
      </div>
    </section>
    
    <?php get_footer(); ?>