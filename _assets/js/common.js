/**
 * @modules : node_modulesフォルダまでの絶対パスのエイリアス
 * webpack.config.jsにて定義している
 */

//jQueryを使うとき
//import $ from "@modules/jquery";
//slickを使うとき
// import '@modules/slick-carousel';

// ------------------------------------------------------------------
//  ハンバーガーメニュー
// ------------------------------------------------------------------
const jsHamburger = document.getElementById('js-hamburger');
const body = document.body;
const spGlobalNav = document.getElementById('js-global-nav')
//クリックはaddEventListenerでイベント登録しました。
jsHamburger.addEventListener('click', function () {
  body.classList.toggle('is-drawerActive')
  //thisはクリックした要素、getAttributeは属性の値を取得する
  if (this.getAttribute('aria-expanded') == 'false') {
    //setAttributeは属性に値をセットする
    this.setAttribute('aria-expanded', 'true');
    spGlobalNav.setAttribute('area-hidden', 'false');
    spGlobalNav.classList.add('is-active');
  } else {
    this.setAttribute('aria-expanded', 'false')
    spGlobalNav.setAttribute('area-hidden', 'true');
    spGlobalNav.classList.remove('is-active');
  };
});
spGlobalNav.addEventListener('click', function () {
  this.setAttribute('area-hidden', 'true');
  this.classList.remove('is-active');
  jsHamburger.setAttribute('aria-expanded', 'false');
});