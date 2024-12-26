
document.addEventListener('DOMContentLoaded', () => {
  const teamBlock = document.querySelector('.teams-section');
  if (!teamBlock) return;

  const tabsContent = document.querySelectorAll('.teams-section .tab-body');
  const tabsBtn = document.querySelectorAll('.teams-section .btn-list .tab-btn');

  tabsBtn[0].classList.add('active');
  tabsContent[0].classList.add('active');

  const swiperInstances = [];

  tabsContent.forEach(content => {
    const tabTeamContainer = content.querySelector('.js-team-slider');
    if (tabTeamContainer) {
      const swiper = new Swiper(tabTeamContainer, {
        slidesPerView: "auto",
        spaceBetween: 16,
        watchOverflow: true,
        speed: 1000,
        navigation: {
          nextEl: content.querySelector('.js-team-button-next'),
          prevEl: content.querySelector('.js-team-button-prev'),
        },
        pagination: {
          el: ".pagination-team",
          type: "custom",
          renderCustom: function (swiper, current, total) {
            return '<span>' + (current) + '</span>' + ' <span>//</span> ' + '<span>' + (total) + '</span>';
          }
        },
      });
      swiperInstances.push(swiper);
    }
  });

  tabsBtn.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      tabsBtn.forEach(btn => btn.classList.remove('active'));
      tabsContent.forEach(content => content.classList.remove('active'));

      tab.classList.add('active');
      tabsContent[index].classList.add('active');

      const swiper = swiperInstances[index];
      if (swiper) {
        swiper.slideTo(0);
      }
    });
  });

  function destroySwiper(swiper) {
    if (swiper !== null) {
      swiper.destroy();
    }
  }

  function checkSliderAndScreenWidth() {
    if (window.innerWidth > 922) {

      swiperInstances.forEach(swiper => destroySwiper(swiper));
    } else {

      swiperInstances.forEach((swiper, index) => {
        const tabSliderContainer = tabsContent[index].querySelector('.js-team-slider');
        if (!swiper && tabSliderContainer) {
          const newSwiper2 = new Swiper(tabSliderContainer, {
            slidesPerView: "auto",
            spaceBetween: 16,
            watchOverflow: true,
            speed: 1000,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          });
          swiperInstances[index] = newSwiper2;
        }
      });
    }
  }

  window.addEventListener('resize', checkSliderAndScreenWidth);

  checkSliderAndScreenWidth();

  const slides = document.querySelectorAll('.js-team-slider .swiper-slide');
  slides.forEach((slide) => {
    slide.addEventListener('click', () => {
      if (slide.classList.contains('content-active')) {

        slide.classList.remove('content-active');
      } else {

        slides.forEach(s => s.classList.remove('content-active'));

        slide.classList.add('content-active');
      }
    });
  });


  const partnersBlock = document.querySelector('.partners-section');
  if (!partnersBlock) return;

  const partnersTabsContent = document.querySelectorAll('.partners-section .tab-body');
  const partnersTabsBtn = document.querySelectorAll('.partners-section .btn-list .tab-btn');

  partnersTabsBtn[0].classList.add('active');
  partnersTabsContent[0].classList.add('active');

  partnersTabsBtn.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      partnersTabsBtn.forEach(btn => btn.classList.remove('active'));
      partnersTabsContent.forEach(content => content.classList.remove('active'));

      tab.classList.add('active');
      partnersTabsContent[index].classList.add('active');
    });
  });

  const logoItems = document.querySelectorAll('.partners-section .logo-item');
  let animationInterval;


  function toggleAnimation() {
    logoItems.forEach(item => {
      if (item.classList.contains('back-side-active')) {
        item.classList.add('front-side-active');
        item.classList.remove('back-side-active');
      } else {
        item.classList.remove('front-side-active');
        item.classList.add('back-side-active');
      }
    });
  }

  function startAnimation() {
    animationInterval = setInterval(toggleAnimation, 5000);
  }

  function stopAnimation() {
    clearInterval(animationInterval);
  }

  logoItems.forEach(item => {
    item.addEventListener('mouseenter', stopAnimation);
    item.addEventListener('mouseleave', startAnimation);
  });

  startAnimation();

  const powerfulProductsHolder = document.querySelector('.powerful-products-holder');
  if (!powerfulProductsHolder) {
    return;
  }

  const items = document.querySelectorAll('.powerful-products-holder .item');

  items.forEach(item => {

    const video = item.querySelector('video');
    if (video) {

      item.addEventListener('mouseenter', () => {
        video.play();
      });
      item.addEventListener('mouseleave', () => {
        video.pause();
        video.currentTime = 0;
      });
    }
  });


  const dataCenterSection = document.querySelector('.data-center');
  if (!dataCenterSection) return;

  const dataCenterTabsContent = document.querySelectorAll('.data-center .tab-body');
  const dataCenterTabsBtn = document.querySelectorAll('.data-center .btn-list .tab-btn');

  dataCenterTabsBtn[0].classList.add('active');
  dataCenterTabsContent[0].classList.add('active');

  dataCenterTabsBtn.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      dataCenterTabsBtn.forEach(btn => btn.classList.remove('active'));
      dataCenterTabsContent.forEach(content => content.classList.remove('active'));

      tab.classList.add('active');
      dataCenterTabsContent[index].classList.add('active');
    });
  });
});



const logos = new Swiper(".logo-slider .content", {
  slidesPerView: "auto",
  spaceBetween: 16,
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  speed: 3000,
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 6,
    },
    1440: {
      slidesPerView: 7,
    },
  },
});

const sliderElement = document.querySelector(".logo-slider .content");
if(sliderElement){
  sliderElement.addEventListener("mouseenter", () => logos.autoplay.stop());
  sliderElement.addEventListener("mouseleave", () => logos.autoplay.start());

  const currencies = new Swiper(".labs-section__inner", {
    slidesPerView: "auto",
    spaceBetween: 16,
    loop: true,
    speed: 1000,
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 4,
      }
    },
    navigation: {
      nextEl: '.swiper-button-next-widget',
      prevEl: '.swiper-button-prev-widget',
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
  });

}

document.addEventListener('DOMContentLoaded', () => {

  setTimeout( () => {
    const currencyWidgets = document.querySelector('.labs-section__inner .swiper-wrapper');
    if (currencyWidgets){
      currencyWidgets.innerHTML = currencyWidgets.innerHTML.replace(/RANK/g, 'Rank');
      currencyWidgets.innerHTML = currencyWidgets.innerHTML.replace(/VOLUME/g, 'Volume');
      currencyWidgets.innerHTML = currencyWidgets.innerHTML.replace(/MARKET CAP/g, 'Market cap');
    }
  }, 1000 )


})
