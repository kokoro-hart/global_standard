/**
 * @modules : node_modulesフォルダまでの絶対パスのエイリアス
 * webpack.config.jsにて定義している
 */

// import $ from "@modules/jquery";

// import '@modules/slick-carousel';


// -----------------------------
//   360vw以下はリサイズする
// -----------------------------
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

// ----------------------------
//  ハンバーガーメニュー
// ----------------------------
const jsDrawerButton = document.getElementById('js-drawer');
const body = document.body;
const spGlobalNav = document.getElementById('js-global-nav')
jsDrawerButton.addEventListener('click', function () {
  body.classList.toggle('is-drawerActive')
  if (jsDrawerButton.getAttribute('aria-expanded') == 'false') {
    this.setAttribute('aria-expanded', 'true');
    this.classList.add('is-active');
    spGlobalNav.setAttribute('area-hidden', 'false');
    spGlobalNav.classList.add('is-active');
  } else {
    this.setAttribute('aria-expanded', 'false');
    this.classList.remove('is-active');
    spGlobalNav.setAttribute('area-hidden', 'true');
    spGlobalNav.classList.remove('is-active');
  };
});

// ----------------------------
//  アコーディオンメニュー
// ----------------------------
const accordionTitle = document.querySelectorAll('.js-accordion-title');
//forEachでtitleを一つ一つtitleEachに入れている
accordionTitle.forEach(titleEach => {
  //nextElementSiblingはjQueryのnext()みたいなもの
  let content = titleEach.nextElementSibling
  titleEach.addEventListener('click', () => {
    titleEach.classList.toggle('is-active')
    content.classList.toggle('is-open')
    
    if (content.getAttribute('aria-expanded') == 'false') {
      content.setAttribute('aria-expanded', 'true');
      content.setAttribute('area-hidden', 'false');
      content.classList.add('is-open');
    } else {
      content.setAttribute('aria-expanded', 'false')
      content.setAttribute('area-hidden', 'true');
      content.classList.remove('is-open');
    };
  })
});