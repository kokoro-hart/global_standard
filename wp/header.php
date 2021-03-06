<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/apple-touch-icon.png">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri());  ?>/img/common/favicon.ico" id="favicon">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php my_meta_ogp(); ?>

  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@700&family=Noto+Sans+JP:wght@500;700&family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>

</head>
<body>
  <!--wrapper-->
  <div id="wrapper" class="page-wrapper">
    <!--ヘッダー-->
    <header class="l-header p-header">
      <div class="l-header__inner">
        <h1 class="p-header__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__logo-link">
            Global Standard
          </a>
        </h1>
        <nav class="p-global-nav" id="js-global-nav">
          <ul class="p-global-nav__list">
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url('/')); ?>"> 
                トップ
              </a>
            </li>
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url('/about')); ?>">
                当社について
              </a>
            </li>
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url('/service')); ?>">
                サービス
              </a>
            </li>
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url('/case')); ?>">
                導入事例
              </a>
            </li>
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url('/news')); ?>">
                お知らせ
              </a>
            </li>
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url('/download')); ?>">
                資料ダウンロード
              </a>
            </li>
            <li class="p-global-nav__item">
              <a class="p-global-nav__link" href="<?php echo esc_url(home_url('/contact')); ?>">
                お問い合わせ
              </a>
            </li>
          </ul>
        </nav>
        <button id="js-drawer" class="c-button-drawer u-hidden-xl-up" aria-controls="js-global-nav" aria-expanded="false">
          <span class="c-button-drawer__line"></span>
          <span class="c-button-drawer__line"></span>
          <span class="c-button-drawer__line"></span>
        </button>
      </div>
    </header>