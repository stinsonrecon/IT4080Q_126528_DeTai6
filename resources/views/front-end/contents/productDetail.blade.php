@extends('front-end.app')
@section('content')
<div class="w-full px-6 pb-10 flex" style="background-color: #fafafa;">
    {{-- side menu & banner --}}
    <div class="hidden lg:block w-1/6 pt-8">
        <div><img src="{{ asset('images/front-end/common/chesen-ad.png') }}" alt="" class="h-full w-full object-contain"></div>
        <div>
            <div class=" font-bold text-lg py-5">Giới thiệu</div>
            <ul>
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5">
                    <a href="{{ route('aboutus') }}">Về chúng tôi</a>
                </li>
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5" style="border-top: none">
                    <a href="{{ route('shoppingGuide') }}">Hướng dẫn mua hàng</a>
                </li>
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5" style="border-top: none">
                    <a href="{{ route('shippingPolicy') }}">Chính sách vận chuyển</a>
                </li>
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5 " style="border-top: none">
                    <a href="{{ route('paymentMethod') }}">Phương thức thanh toán</a>
                </li>
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5" style="border-top: none">
                    <a href="{{ route('refundRegulation') }}">Quy định đổi trả hàng</a>
                </li>
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5" style="border-top: none">
                    <a href="{{ route('news') }}">Tin tức khuyến mãi</a>
                </li>
            </ul>
        </div>
    </div>
    {{-- content --}}
    <div class="w-full justify-around items-center pt-8 lg:pl-7">
        <div class="flex justify-between w-full">
            <!-- Ảnh to để ở giữa trang -->
            <div class="w-1/2 px-10">
                <img class="w-full h-full object-contain" src="{{ asset('images/front-end/product-img/chesen-product.png') }}" alt="">
            </div>
            <!-- Phần thông tin sản phẩm -->
            <div class="w-1/2 px-10">
                <!-- Thông tin -->
                <div class="flex-col flex-wrap">
                    <div class="pb-5">
                        <div class=" text-green-primary_1 text-lg">
                            Trà sen đặc biệt
                        </div>
                        <div class="text-4xl font-semibold pt-2 text-green-primary_1"> <!-- Tên sp -->
                            Trà sen
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <svg onclick="color1()" id="sao1" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <div>
                            <svg onclick="color2()" id="sao2" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <div>
                            <svg onclick="color3()" id="sao3" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <div>
                            <svg onclick="color4()" id="sao4" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <div>
                            <svg onclick="color5()" id="sao5" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-justify pt-2 pb-3 text-green-primary_1"> <!-- Mô tả ngắn -->
                        Trà Sen là sự kết hợp tinh tế giữa trà xanh và hoa sen với quy trình ướp công phu và công nghệ sản xuất hiện đại tạo ra một sản phẩm mang hương vị và nét riêng cho trà Việt.
                        Khi pha trà có mùi thoảng nhẹ hương sen, màu xanh vàng, vị đắng nhẹ của trà cùng vị ngọt dịu thanh mát.
                    </div>
                    <div class="border border-gray-500 py-2 font-semibold text-xl text-green-primary_1" style="border-left: none; border-right: none">
                        Giá: <span>300,000 VND</span> / 1kg 
                    </div>
                    <div class="pt-2 pb-4 text-green-primary_1">
                        <div class="font-semibold text-xl">Thông tin sản phẩm</div>
                        <ul>
                            <li>- Khối lượng: <span>1kg</span></li>
                            <li>- Thương hiệu: <span>Bách Diệp Trà</span></li>
                            <li>- Xuất xứ: <span>Thái Nguyên</span></li>
                            <li>- Thành phần: <span>100% trà sen Bách Diệp</span></li>
                            <li>- Hướng dẫn: <span>Cho gói trà vào tách, đổ nước sôi vào. Ngâm khoảng 2 - 3 phút, nhúng gói trà 5 lần rồi lấy ra. Giờ bạn có thể thưởng thức</span></li>
                            <li>- Hạn sử dụng: <span>Xem trên bao bì</span></li>
                            <li>- Bảo quản: <span>Nơi khô thoáng</span></li>
                        </ul>
                    </div>
                    <div class="flex">
                        <div class="flex justify-around items-center pr-5 text-xl text-green-primary_1">Số lượng</div>
                        <div class="flex flex-row h-10 w-1/6 rounded-lg relative bg-transparent mt-1 ">
                            <button data-action="decrement" type="button" class=" bg-green-primary text-white hover:bg-green-primary_1 h-full w-20 rounded-l cursor-pointer outline-none">
                                <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                            <input type="number" class="focus:outline-none text-center w-full border border-gray-300 bg-gray-50 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-black  outline-none" name="amount" value="1">
                            <button data-action="increment" type="button" class="bg-green-primary text-white hover:bg-green-primary_1 h-full w-20 rounded-r cursor-pointer">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                      </div>
                    </div>
                    <button class="py-2 px-5 mt-5 mb-2 flex items-center justify-around rounded-3xl  bg-green-primary border-2 border-green-primary text-white hover:bg-white hover:text-green-primary" type="submit">
                        <a href="" class="pr-2">Đặt hàng</a>
                        <span>
                            <i class="text-xl fas fa-shopping-cart"></i> 
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex justify-start mt-4 lg:mt-10 pb-2 mx-10 text-left border-b border-gray-500 font-semibold text-2xl text-green-primary_1">Sản phẩm khác</div>

        <div class="flex flex-wrap justify-around mt-1 lg:mt-1 pt-2 pb-10 px-2 lg:px-10">
            <div class="text-center w-full lg:w-1/3 lg:px-10" style="min-height: 350px;">
                <div class="text-lg">&nbsp</div>
                <div>
                    <div>
                        <img class="h-full w-full object-contain" src="{{ asset('images/front-end/product-img/chesen-thumbnail.jpg') }}">
                    </div>
                    <div class="mt-1 lg:mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">Hộp 100g - Trà bách diệp</div>
                    <div class="font-semibold"><br>40,000 VND</div>
                    <div class="mt-1 lg:mt-2">
                        <button
                            class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                            <a href="{{ route('productDetail') }}" class="font-bold text-base"><i class="fas fa-eye"></i> Xem
                                thêm</a>
                        </button>
                        <button
                            class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-4"><i
                                class="fas fa-shopping-cart text-lg"></i></button>
                    </div>
                </div>
            </div>
            <div class="text-center w-full lg:w-1/3 lg:px-10" style="min-height: 350px;">
                <div class="text-lg">&nbsp</div>
                <div>
                    <div>
                        <img class="h-full w-full object-contain" src="{{ asset('images/front-end/product-img/chesen-thumbnail.jpg') }}">
                    </div>
                    <div class="mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">Hộp 500g - Trà bách diệp</div>
                    <div class="font-semibold"><br>180,000 VND</div>
                    <div class="mt-2">
                        <button
                            class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                            <a href="{{ route('productDetail') }}" class="font-bold text-base"><i class="fas fa-eye"></i> Xem
                                thêm</a>
                        </button>
                        <button
                            class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-4"><i
                                class="fas fa-shopping-cart text-lg"></i></button>
                    </div>
                </div>
            </div>
            <div class="text-center w-full lg:w-1/3 lg:px-10" style="min-height: 350px;">
                <div class="timer">
                    <span class="text-red-500 text-lg">Chỉ còn: </span>
                    <span id="hour" class="text-red-500 text-lg">00</span>
                    <span class="text-red-500 text-lg">h</span>
                    <span id="minute" class="text-red-500 text-lg">00</span>
                    <span class="text-red-500 text-lg">p</span>
                    <span id="second" class="text-red-500 text-lg">00</span>
                </div>
                <div>
                    <div class="absolute float-left">
                        <img class="w-20 h-20" src="{{ asset('images/sale.png') }}" alt="">
                    </div>
                    <div><img class="h-full w-full object-contain" src="{{ asset('images/front-end/product-img/chesen-thumbnail.jpg') }}">
                    </div>
                    <div class="mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">1kg - Trà bách diệp</div>
                    <div class="font-semibold"><del class="text-xs">350,000 VND</del><br>300,000 VND</div>
                    <div class="mt-2">
                        <button
                            class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                            <a href="{{ route('productDetail') }}" class="font-bold text-base"><i class="fas fa-eye"></i> Xem
                                thêm</a>
                        </button>
                        <button
                            class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-4"><i
                                class="fas fa-shopping-cart text-lg"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    sao1 = document.getElementById("sao1");
    sao2 = document.getElementById("sao2");
    sao3 = document.getElementById("sao3");
    sao4 = document.getElementById("sao4");
    sao5 = document.getElementById("sao5");
    function color1()
    {
        sao1.style.fill = "#46b200";
        sao2.style.fill = "white";
        sao3.style.fill = "white"; 
        sao4.style.fill = "white"; 
        sao5.style.fill = "white"; 
    }
    function color2()
    {
        sao1.style.fill = "#46b200";
        sao2.style.fill = "#46b200";
        sao3.style.fill = "white"; 
        sao4.style.fill = "white"; 
        sao5.style.fill = "white"; 
    }
    function color3()
    {
        sao1.style.fill = "#46b200";
        sao2.style.fill = "#46b200";
        sao3.style.fill = "#46b200"; 
        sao4.style.fill = "white"; 
        sao5.style.fill = "white"; 
    }
    function color4()
    {
        sao1.style.fill = "#46b200";
        sao2.style.fill = "#46b200";
        sao3.style.fill = "#46b200"; 
        sao4.style.fill = "#46b200"; 
        sao5.style.fill = "white"; 
    }
    function color5()
    {
        sao1.style.fill = "#46b200";
        sao2.style.fill = "#46b200";
        sao3.style.fill = "#46b200"; 
        sao4.style.fill = "#46b200"; 
        sao5.style.fill = "#46b200"; 
    }

    function displayDetailTypePay(){
        var r0 = document.getElementById("typePay0");
        var r1 = document.getElementById("typePay1");
        var text0 = document.getElementById('radioDetail0');
        var text1 = document.getElementById('radioDetail1');
        if(r0.checked == true){
            text0.classList.add('full');
            text1.classList.remove('full');
        }
        if(r1.checked == true){
            text0.classList.remove('full');
            text1.classList.add('full');
        }
    }
    function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value--;
        target.value = value;
    }

    function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
    });
</script>
<script>
    var m = 1000; //define your minute
    var s = 0;
    var h;
    var xx = 0;
    var width = 100 / (m * 60);
    var gio = document.getElementById('hour');
    var phut = document.getElementById('minute');
    var giay = document.getElementById('second');
    var clearInter;
    var tempW = 0;
    minute = m % 60;
    h = Math.floor(m / 60);
    gio.innerHTML = h;
    phut.innerHTML = minute;
    clearInter = setInterval(function() {
        timerCal();
    }, 1000);


    function timerCal() {
        /*if((h==0)&&(m==0)&&(s==0)){
        clearInterval(clearInter);
        }*/
        if (s > 0) {
            s = s - 1;
            //console.log(s);
            if (s < 10) {
                giay.innerHTML = "0" + s;
            } else {
                giay.innerHTML = s;
            }
        }
        if (s == 0) {
            s = 60;
            var ss = s;
            if (xx == 0) {
                s = 59;
                ss = s;
                xx = 1;
            }
            giay.innerHTML = s;
            if (minute != 0) {
                minute = minute - 1;
                if (minute < 10) {
                    phut.innerHTML = "0" + minute;
                } else {
                    phut.innerHTML = minute;
                }
            } else {
                if (h != 0) {
                    h = h - 1;
                    minute = 59;
                    phut.innerHTML = minute;
                    gio.innerHTML = h;
                } else {
                    giay.innerHTML = '00';
                    clearInterval(clearInter);
                }
            }
        }
    }
</script>
@endsection