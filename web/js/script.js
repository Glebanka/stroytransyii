// variables initializing:
let winHeight
let winWidth
let isMobile
let isDesktop
let fontSize
function varUpdate() {
  winHeight = visualViewport.height;
  winWidth = visualViewport.width;
  isMobile = (winWidth / winHeight) < 1;
  isDesktop = (winWidth / winHeight) > 1;
  fontSize = parseFloat(getComputedStyle(document.documentElement).fontSize);
}

visualViewport.addEventListener('resize', varUpdate);

document.addEventListener("DOMContentLoaded", init);

function init() {
  varUpdate();
  introSection();
  companyProductsSection();
  partnersSection();
  reviewsSection();
  productsPage();
  equipmentSection();
  offerPage();
  constructionPartsSection();
  managersSection();
  articlePage()
}

// переводит ремы в пиксели
function remToPx(rem) {
  return rem * fontSize;
}

function introSection() {
  const elem = document.querySelector(".intro-section");
  const sliderInit = () => {
    const sliderElem = elem.querySelector(".intro-section__slider");
    if (sliderElem) {
      const slider = new Swiper(sliderElem, {
        slidesPerView: "auto",
        speed: 700,
        navigation: {
          nextEl: '.intro-section__slider-nav .slider-arrow.right',
          prevEl: '.intro-section__slider-nav .slider-arrow.left'
        }
      });
    }
  };
  if (elem) {
    sliderInit();
  }
}


function companyProductsSection() {
  const elem = document.querySelector(".company-products");

  const slidersInit = () => {

    const elems = document.querySelectorAll(".company-products__slider");

    if (elems.length > 0) {
      elems.forEach(elem => {
        const sliderInit = () => {
          if (elem) {
            const slider = new Swiper(elem, {
              slidesPerView: "auto",
              speed: 700,
              spaceBetween: remToPx(1.6),
              pagination: {
                el: '.swiper-pagination',
                clickable: true
              }
            });
          }
        };
        sliderInit();
      });
    }
  }
  if (elem && isMobile) slidersInit()
}


function partnersSection() {
  const elem = document.querySelector(".partners");

  const sliderInit = () => {
    const elem = document.querySelector(".partners__slider");
    if (elem) {
      const slider = new Swiper(elem, {
        slidesPerView: "auto",
        speed: 700,
      });
    }
  }
  if (elem && isMobile) sliderInit()
}

function reviewsSection() {
  const elem = document.querySelector(".reviews");

  const sliderInit = () => {
    const elem = document.querySelector(".reviews__slider");
    if (elem) {
      const spaceBetween = isDesktop ? remToPx(41.6) : remToPx(1.6)
      const slider = new Swiper(elem, {
        slidesPerView: "auto",
        spaceBetween: spaceBetween,
        speed: 700,
        centeredSlides: true,
        navigation: {
          enabled: true,
          nextEl: '.reviews__slider-nav .slider-arrow-empty.right',
          prevEl: '.reviews__slider-nav .slider-arrow-empty.left'
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      });
    }
  }
  if (elem) sliderInit()
}

function productsPage() {
  const elem = document.querySelector(".products-page");

  const sliderInit = () => {
    const elem = document.querySelector(".products-page__slider");
    if (elem) {
      const slider = new Swiper(elem, {
        slidesPerView: "auto",
        speed: 700,
        spaceBetween: remToPx(1.6),
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      });
    }
  }
  if (elem && isMobile) sliderInit()
}

function equipmentSection() {
  const elem = document.querySelector(".equipment-section");

  const sliderInit = () => {
    const elem = document.querySelector(".equipment-section__slider");
    if (elem) {
      const slider = new Swiper(elem, {
        slidesPerView: "auto",
        speed: 700,
        spaceBetween: remToPx(1.6),
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      });
    }
  }
  if (elem && isMobile) sliderInit()
}

function offerPage() {
  const elem = document.querySelector(".offer");
  const accordionsInit = () => {
    const accordions = document.querySelectorAll(".offer__accordion-item");
    if (accordions.length > 0) {
      accordions.forEach(elem => {
        elem.addEventListener('click', () => {
          if (!elem.classList.contains('active')) {
            elem.classList.add('active')
          } else {
            elem.classList.remove('active')
          }
        })
      })
    }
  }
  const sliderInit = () => {
    const elem = document.querySelector(".offer__slider");
    if (elem) {
      const slider = new Swiper(elem, {
        slidesPerView: "auto",
        speed: 700,
        spaceBetween: remToPx(1.6),
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      });
    }
  }

  if (elem && isMobile) sliderInit()
  if (elem) accordionsInit()
}

function constructionPartsSection() {
  const elem = document.querySelector(".construction-parts-section");
  const sliderInit = () => {
    const elem = document.querySelector(".construction-parts-section__slider");
    if (elem) {
      const slider = new Swiper(elem, {
        slidesPerView: "auto",
        speed: 700,
        spaceBetween: remToPx(1.6),
      });
    }
  }

  if (elem && isMobile) sliderInit()
}

function managersSection() {
  const elem = document.querySelector(".managers-section");
  const sliderInit = () => {
    const elem = document.querySelector(".managers-section__slider");
    if (elem) {
      const slider = new Swiper(elem, {
        slidesPerView: "auto",
        speed: 700,
        spaceBetween: remToPx(1.6),
      });
    }
  }

  if (elem && isMobile) sliderInit()
}


function articlePage() {
  const elem = document.querySelector(".article");
  const sliderInit = () => {
    const elem = document.querySelector(".article__slider");
    if (elem) {
      const slider = new Swiper(elem, {
        slidesPerView: "auto",
        speed: 700,
        spaceBetween: remToPx(1.6),
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      });
    }
  }

  if (elem && isMobile) sliderInit()
}