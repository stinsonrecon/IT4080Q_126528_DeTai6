function setVisibleCategory(){
    var cate = document.getElementById("cateProduct");
    var url = window.location.pathname;
    if (url == "/" || url == "/home"){
        //set color for cate
        document.getElementById('home').classList.add('cateActive');
        //setVisibleHomeCate
        cate.style.display = "block";
        cate.hidden = false;
    } else {
        cate.hidden = true;
    }
}
