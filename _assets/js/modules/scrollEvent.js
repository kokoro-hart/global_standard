// 文字をタグに分割
class SplitText {
  constructor(el) {
    this.DOM = {};
    this.DOM.el = el instanceof HTMLElement ? el : document.querySelector(el);
    this.chars = this.DOM.el.innerHTML.trim().split("");
    this.DOM.el.innerHTML = this._splitText();
  }
  _splitText() {
    return this.chars.reduce((acc, curr) => {
      curr = curr.replace(/\s+/, '&nbsp;');
      return `${acc}<span class="char">${curr}</span>`;
    }, "");
  }
  animate() {
    this.DOM.el.classList.add('is-active');
  }
}

// intersectionObserver
class ScrollObserver {
  constructor(elements, callback, options) {
    this.elements = document.querySelectorAll(elements);
    const defaultOptions = {
      root: null,
      rootMargin: '-50% 0px',
      threshold: 0,
    };
    this.callback = callback;
    this.options = Object.assign(defaultOptions, options);//デフォルトオプションと指定したオプションをマージする
    this._init();
  }

  //初期化処理
  _init() {
    const initCallbackFunction = function (entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.callback(entry.target, true);
          observer.unobserve(entry.target);
        } else {
          this.callback(entry.target, false);
        }
      });
    };

    this.io = new IntersectionObserver(initCallbackFunction.bind(this), this.options);
    this.elements.forEach(element => this.io.observe(element));
  }
}

function addIntoViewClass() {
  const addIntoViewClass = (elements, isIntersecting) => {
    if (isIntersecting) {
      elements.classList.add('is-active');
    }
  }
  const scrollObserver01 = new ScrollObserver('.js-trigger', addIntoViewClass, {
    root: null,
    rootMargin: '-40% 0px',
    threshold: 0
  });
}

function slideBg() {
  const addIntoViewClass = (elements, isIntersecting) => {
    if (isIntersecting) {
      elements.classList.add('is-slide-bg');
    }
  }
  const scrollObserver02 = new ScrollObserver('.js-slide-bg', addIntoViewClass, {
    root: null,
    rootMargin: '0px 0px -70% 0px',
    threshold: 0
  });
}

function splitTextAnimation() {
  const reduceTexts = (elements, isIntersecting) => {
    if (isIntersecting) {
      const ta = new SplitText(elements);
      ta.animate();
    }
  }
  const scrollObserver03 = new ScrollObserver('.is-slide-text', reduceTexts, {
    root: null,
    rootMargin: '-30% 0px',
    threshold: 0
  });
}

addIntoViewClass();
slideBg();
splitTextAnimation();
