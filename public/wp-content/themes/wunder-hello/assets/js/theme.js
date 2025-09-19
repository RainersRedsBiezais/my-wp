document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper !== 'undefined') {
        var sliderEl = document.querySelector('.hero-slider .swiper');
        if (sliderEl) {
            new Swiper(sliderEl, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 16,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
            });
        }
    }
});


