/**
 * Uses "#element&100" or "#element&-100"
 * where "&100" "&-100" is scroll offset
 */
export function scrollToAnchor() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            let anchor = this.getAttribute('href');
            if (anchor !== "#") { // only "#"

                anchor = this.getAttribute('href').split('&');

                let idElement = anchor[0];
                let offset = anchor[1] || 0;

                let el = document.querySelector(idElement);
                if (el !== null) {
                    window.scrollTo({
                        top: el.getBoundingClientRect().top + window.pageYOffset - offset,
                        left: 0,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}


