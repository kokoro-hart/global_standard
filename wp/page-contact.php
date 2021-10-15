    
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
        <ul class="c-breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
          <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a class="c-breadcrumb__link" itemprop="item" href="/"><span itemprop="name">ホーム</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a class="c-breadcrumb__link" itemprop="item" href="/contact/"><span itemprop="name">お問い合わせ</span></a>
            <meta itemprop="position" content="2" />
          </li>
        </ul>
      </div>
    </div>
    <!--/パンくずリスト-->
    <section class="p-contact">
      <div class="l-inner">
        <div class="p-contact__inner">
          <p class="p-contact__intro">
            研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。 2日以内に担当者からメールにてご連絡いたします。
          </p>
          <div class="p-contact-form">
            <h2 class="p-contact-form__title">お問い合わせ</h2>
            <!--コンタクトフォーム-->
            <div class="p-contact-form__items c-form">
              <form action="">
                <dl class="c-form__dl">
                  <div class="c-form__row">
                    <dt class="c-form__dt">
                      <label class="c-form__label" for="your-company">会社名</label>
                    </dt>
                    <dd class="c-form__dd">
                      <input class="c-form__input" id="your-company" type="text" placeholder="例）〇〇株式会社" autocomplete="organization">
                    </dd>
                  </div>
                  <div class="c-form__row">
                    <dt class="c-form__dt">
                      <label class="c-form__label c-form__label--required" for="your-name">お名前</label>
                    </dt>
                    <dd class="c-form__dd">
                      <input class="c-form__input" id="your-name" type="text" placeholder="例）鈴木　一郎" autocomplete="name" required>
                    </dd>
                  </div>
                  <div class="c-form__row">
                    <dt class="c-form__dt">
                      <label class="c-form__label c-form__label--required" for="your-ruby">お名前（フリガナ）</label>
                    </dt>
                    <dd class="c-form__dd">
                      <input class="c-form__input" id="your-ruby" type="text" placeholder="例）スズキ イチロウ" autocomplete="off" required>
                    </dd>
                  </div>
                  <div class="c-form__row">
                    <dt class="c-form__dt">
                      <label class="c-form__label c-form__label--required" for="your-tel">電話番号</label>
                    </dt>
                    <dd class="c-form__dd">
                      <input class="c-form__input" id="your-tel" type="text" placeholder="例）0312345678" autocomplete="tel" required>
                    </dd>
                  </div>
                  <div class="c-form__row">
                    <dt class="c-form__dt">
                      <label class="c-form__label c-form__label--required" for="your-email">メールアドレス</label>
                    </dt>
                    <dd class="c-form__dd">
                      <input class="c-form__input" id="your-email" type="email" placeholder="例）info@example.com" autocomplete="email" required>
                    </dd>
                  </div>
                  <div class="c-form__row">
                    <dt class="c-form__dt">
                      <label class="c-form__label c-form__label--required" for="your-select">ご用件</label>
                    </dt>
                    <dd class="c-form__dd">
                      <select id="your-select" class="c-form__input c-form__select" required>
                        <option value="" selected>ご選択ください</option>
                        <option value="option1">option1</option>
                        <option value="option2">option2</option>
                        <option value="option3">option3</option>
                      </select>
                    </dd>
                  </div>
                  <div class="c-form__row">
                    <dt class="c-form__dt">
                      <label class="c-form__label c-form__label--required" for="your-textarea">ご用件の詳細</label>
                    </dt>
                    <dd class="c-form__dd">
                      <textarea class="c-form__input c-form__textarea" id="your-textarea" placeholder="ご自由にご記入ください。" required></textarea>
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
                  <input type="submit" class="c-button-square c-button-square--submit p-contact__submit" value="送信">
                </div>
              </form>
            </div>
            <!--/コンタクトフォーム-->
          </div>
        </div>
      </div>
    </section>
    
    <?php get_footer(); ?>