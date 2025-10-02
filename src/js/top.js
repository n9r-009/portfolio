/*
 * top.js is setting up rule.
 */
document.addEventListener("DOMContentLoaded", function () {
  initScrollFade();
  // initSwiperMv();
  initSwiperService();
  cmntabInit(".l-tab");
  window.addEventListener("resize", handleResize);
  handleResize();
  setSimpleBar();
  setHeight();
  setContactform7Event();
});

//スクロールバー
function setSimpleBar() {
  if (window.matchMedia("(max-width: 1280px)").matches) {
    const simpleBarIds = ["simpleBar01", "simpleBar02", "simpleBar03"];
    simpleBarIds.forEach((id) => {
      const element = document.getElementById(id);
      if (element) {
        new SimpleBar(element, { autoHide: false });
      }
    });
  }
}

const topNewsList = document.querySelector(".p-top-information__list");
if (window.matchMedia("(max-width: 767px)").matches) {
  const simpleBar = new SimpleBar(topNewsList, {
    autoHide: false,
  });
}
function handleResize() {
  if (window.matchMedia("(max-width: 767px)").matches) {
    // max-width: 767px の場合、SimpleBarを初期化
    const simpleBar = new SimpleBar(topNewsList, {
      autoHide: false,
    });
  }
}

//スライダー
function initSwiperMv() {
  const swiper = new Swiper(".swiper-container__mv", {
    loop: true,
    pagination: {
      el: ".swiper-pagination__01",
      clickable: true,
    },
  });
}

function initSwiperService() {
  const swiper = new Swiper(".swiper-container__service", {
    slidesPerView: 1.6,
    spaceBetween: 10,
    centeredSlides: true,
    breakpoints: {
      769: {
        slidesPerView: 4,
        spaceBetween: 20,
        centeredSlides: false,
      },
    },
    pagination: {
      el: ".swiper-pagination__02",
      clickable: true,
    },
    navigation: {
      nextEl: ".m-swiper-button__02.m-swiper-button--next",
      prevEl: ".m-swiper-button__02.m-swiper-button--prev",
    },
  });
}
