// function setVisibleCategory(){
//     var cate = document.getElementById("cateProduct");
//     var url = window.location.pathname;
//     if (url == "/" || url == "/home"){
//         //set color for cate
//         //document.getElementById('home').classList.add('cateActive');
//         //setVisibleHomeCate
//         // cate.style.display = "block";
//         // cate.hidden = false;
//     } else {
//         cate.hidden = true;
//     }
// }

document.addEventListener('DOMContentLoaded', function () {
    new Splide( '.splide', {
        perPage    : 6,
        type        : 'loop',
        autoplay    : true,
        pauseOnHover: false,
    } ).mount();
});

