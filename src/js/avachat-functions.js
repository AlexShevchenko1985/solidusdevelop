const isMobileView = window.innerWidth < 800;

const carousels = document.querySelectorAll('.faq-carousel');
carousels.forEach((carousel) => {
  const isReverseDirection = carousel.classList.contains('faq-carousel-right');

  const faqSwiper = new Swiper(carousel, {
    loop: true,
    slidesPerView: isMobileView ? 1.3 : 3,
    spaceBetween: 16,
    speed: 10000,
    freeMode: true,
    allowTouchMove: false,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      reverseDirection: isReverseDirection,
      pauseOnMouseEnter: false,
    },

  });

  function stopAutoplay() {
    const swiperTranslate = faqSwiper.getTranslate();
    faqSwiper.setTranslate(swiperTranslate);
    faqSwiper.autoplay.stop();
  }

  function startAutoplay() {
    faqSwiper.slideTo(faqSwiper.activeIndex, 5000, false);
    faqSwiper.autoplay.start();
  }

  carousel.addEventListener('mouseenter', () => stopAutoplay());
  carousel.addEventListener('mouseleave', () => startAutoplay());
});

const video = document.getElementById('video');
const playBtn = document.getElementById('play-btn');

playBtn.addEventListener('click', () => {
  if (video.paused) {
    video.play();
    playBtn.style.display = 'none';
  } else {
    video.pause();
    playBtn.style.display = 'block';
  }
});

video.addEventListener('click', () => {
  if (video.paused) {
    video.play();
    playBtn.style.display = 'none';
  } else {
    video.pause();
    playBtn.style.display = 'block';
  }
});

video.addEventListener('play', () => {
  playBtn.style.display = 'none';
});

video.addEventListener('pause', () => {
  playBtn.style.display = 'block';
});