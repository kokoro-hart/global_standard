<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">
  <meta name="description" content="トップページの説明">
  <meta property="og:title" content="Global Standard">
  <meta property="og:description" content="トップページの説明">
  <meta property="og:url" content="サイトのドメイン/">
  <meta property="og:type" content="website ">
  <meta property="og:local" content="ja_JP">
  <meta property="og:image" content="/common/og-image.jpeg">
  <meta property="og:site_name" content="サイトのドメイン ">

  <?php wp_head(); ?>

</head>
<body>
  <!--wrapper-->
  <div id="wrapper" class="page-wrapper">
    <!--ヘッダー-->
    <header class="l-header">
      <div class="l-header__inner">
        <h1 class="l-header-logo">
          <a href="/" class="l-header-logo__link">
            Global Standard
          </a>
        </h1>
        <nav class="c-global-nav" id="js-global-nav" area-hidden="true">
          <ul class="c-global-nav__list">
            <li class="c-global-nav__item">
              <a class="c-global-nav__link" href="/">
                トップ
              </a>
            </li>
            <li class="c-global-nav__item">
              <a class="c-global-nav__link" href="/about/">
                当社について
              </a>
            </li>
            <li class="c-global-nav__item">
              <a class="c-global-nav__link" href="/service/">
                サービス
              </a>
            </li>
            <li class="c-global-nav__item">
              <a class="c-global-nav__link" href="/case/">
                導入事例
              </a>
            </li>
            <li class="c-global-nav__item">
              <a class="c-global-nav__link" href="/news/">
                お知らせ
              </a>
            </li>
            <li class="c-global-nav__item">
              <a class="c-global-nav__link" href="/download/">
                資料ダウンロード
              </a>
            </li>
            <li class="c-global-nav__item">
              <a class="c-global-nav__link" href="/contact/">
                お問い合わせ
              </a>
            </li>
          </ul>
        </nav>
        <button id="js-drawer" class="c-drawer-button u-hidden-xl-up" aria-controls="js-glabal-nav" aria-expanded="false" area-label="メニューを開閉する">
          <span class="c-drawer-button__line"></span>
          <span class="c-drawer-button__line"></span>
          <span class="c-drawer-button__line"></span>
        </button>
      </div>
    </header>
    <!--/ヘッダー-->