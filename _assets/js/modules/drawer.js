// ドロワーメニュー
const drawerButton = document.getElementById('js-drawer');
const body = document.body;
const drawerNav = document.getElementById('js-global-nav');
drawerButton.addEventListener('click', function () {
  body.classList.toggle('is-drawerActive')
  if (drawerButton.getAttribute('aria-expanded') == 'false') {
    this.setAttribute('aria-expanded', 'true');
    this.classList.add('is-active');
    drawerNav.classList.add('is-active');
  } else {
    this.setAttribute('aria-expanded', 'false');
    this.classList.remove('is-active');
    drawerNav.classList.remove('is-active');
  };
});
