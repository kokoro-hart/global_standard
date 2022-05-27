const fvTrigger = document.getElementById('js-fv-trigger');
if (fvTrigger !== null) {
  window.setTimeout(() => {
    fvTrigger.classList.add('is-active');
  }, 0);
}