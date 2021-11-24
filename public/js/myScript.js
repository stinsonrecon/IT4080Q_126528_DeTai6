document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('advertisement')) {
        new Splide('#advertisement', {
            perPage: 6,
            type: 'loop',
            autoplay: true,
            pauseOnHover: false,
        }).mount();
    }
});

document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('banner')) {
        new Splide('#banner', {
            perPage: 1,
            height: '100vh',
            type: 'loop',
            cover: true,
            autoplay: true,
            pauseOnHover: false,
        }).mount();
    }
});

document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('product-slider')) {
        new Splide('#product-slider', {
            perPage: 3,
            type: 'loop',
            autoplay: true,
            pauseOnHover: false,
        }).mount();
    }
});
