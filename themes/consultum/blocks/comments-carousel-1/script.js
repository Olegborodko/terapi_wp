var swiper = new Swiper(".commentsSwiperSlider", {
  slidesPerView: 4,
  spaceBetween: 24,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    1: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    900: {
      slidesPerView: 3,
    },
    1100: {
      slidesPerView: 4,
    },
  },
});