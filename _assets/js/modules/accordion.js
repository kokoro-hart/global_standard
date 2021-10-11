
//  アコーディオンメニュー
const accordionTitle = document.querySelectorAll('.js-accordion-title');

accordionTitle.forEach(titleEach => {
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
