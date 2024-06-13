import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.home-slider', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If you have navigation buttons or pagination, make sure to include them here.
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});