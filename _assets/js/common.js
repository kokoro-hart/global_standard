/**
 * @modules : node_modulesフォルダまでの絶対パスのエイリアス
 * webpack.config.jsにて定義している
 */

//jQueryを使うとき
//import $ from "@modules/jquery";
//slickを使うとき
// import '@modules/slick-carousel';


// ------------------------------------------------------------------
//   360vw以下はリサイズする
// ------------------------------------------------------------------
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();

// ------------------------------------------------------------------
//  ハンバーガーメニュー
// ------------------------------------------------------------------
const jsDrawerButton = document.getElementById('js-drawer');
const body = document.body;
const spGlobalNav = document.getElementById('js-global-nav')
jsDrawerButton.addEventListener('click', function () {
  body.classList.toggle('is-drawerActive')
  if (this.getAttribute('aria-expanded') == 'false') {
    this.setAttribute('aria-expanded', 'true');
    spGlobalNav.setAttribute('area-hidden', 'false');
    spGlobalNav.classList.add('is-active');
  } else {
    this.setAttribute('aria-expanded', 'false')
    spGlobalNav.setAttribute('area-hidden', 'true');
    spGlobalNav.classList.remove('is-active');
  };
});
