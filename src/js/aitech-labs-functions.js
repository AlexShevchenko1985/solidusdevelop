document.addEventListener("DOMContentLoaded", () => {
  const isMobile = window.innerWidth < 768;
  const hero = document.querySelector(".aitech-labs-hero");

  const updateWrapperHeights = () => {
    let video = hero.querySelector(".media video");

    if (video) {
      const setHeight = () => {
        hero.style.minHeight = `${video.offsetHeight}px`;
      };

      if (video.readyState >= 1) {
        setHeight();
      } else {
        video.addEventListener("loadedmetadata", setHeight);
      }
    }
  };

  if (!isMobile) {
    updateWrapperHeights();
    window.addEventListener("resize", updateWrapperHeights);
  }
});
