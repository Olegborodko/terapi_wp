var swiper = new Swiper(".articlesSwiperSlider", {
  slidesPerView: 3,
  spaceBetween: 30,
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
    960: {
      slidesPerView: 3,
    },
  },
});