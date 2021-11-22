@extends('front-end.app')
@section('content')
    <div id="banner" class="relative w-full border-t-2 border-green-primary">
        <div class="splide__arrows hidden lg:block">
            <button class="splide__arrow splide__arrow--prev text-2xl hover:bg-green-primary text-black hover:text-white">
                <i class="fas fa-caret-left"></i>
            </button>
            <button class="splide__arrow splide__arrow--next text-2xl hover:bg-green-primary text-black hover:text-white">
                <i class="fas fa-caret-right"></i>
            </button>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="absolute left-0 right-0 my-0 top-1/4 lg:top-1/3">
                        <div class="text-center text-white drop-shadow-2xl text-8xl font-petemoss"><i>Năng lượng từ thiên
                                nhiên</i></div>
                        <div class="text-center text-white text-2xl font-bold drop-shadow-2xl pt-5">Trà xanh đặc sản Hồ Tây
                        </div>
                        <div class="flex items-center justify-center pt-5">
                            <button
                                class="text-center border rounded-3xl border-green-secondary bg-green-secondary hover:bg-green-secondary_1 hover:border-green-secondary_1 px-5 py-2">
                                <a href="" class="font-bold text-xl text-white">Chi tiết sản phẩm</a>
                            </button>
                        </div>
                    </div>
                    <img src="{{ asset('images/front-end/home/slider/chesen-banner-3.png') }}" alt="">
                </li>
                <li class="splide__slide">
                    <div class="absolute left-0 right-0 my-0 top-1/4 lg:top-1/3">
                        <div class="text-center text-white drop-shadow-2xl text-8xl font-petemoss"><i>Năng lượng từ thiên
                                nhiên</i></div>
                        <div class="text-center text-white text-2xl font-bold drop-shadow-2xl pt-5">Trà xanh đặc sản Hồ Tây
                        </div>
                        <div class="flex items-center justify-center pt-5">
                            <button
                                class="text-center border rounded-3xl border-green-secondary bg-green-secondary hover:bg-green-secondary_1 hover:border-green-secondary_1 px-5 py-2">
                                <a href="" class="font-bold text-xl text-white">Chi tiết sản phẩm</a>
                            </button>
                        </div>
                    </div>
                    <img src="{{ asset('images/front-end/home/slider/chesen-banner-2.png') }}" alt="">
                </li>
                <li class="splide__slide">
                    <div class="absolute left-0 right-0 my-0 top-1/4 lg:top-1/3">
                        <div class="text-center text-black drop-shadow-2xl text-8xl font-petemoss"><i>Năng lượng từ thiên
                                nhiên</i></div>
                        <div class="text-center text-black text-2xl font-bold drop-shadow-2xl pt-5">Trà xanh đặc sản Hồ Tây
                        </div>
                        <div class="flex items-center justify-center pt-5">
                            <button
                                class="text-center border rounded-3xl border-green-secondary bg-green-secondary hover:bg-green-secondary_1 hover:border-green-secondary_1 px-5 py-2">
                                <a href="" class="font-bold text-xl text-white">Chi tiết sản phẩm</a>
                            </button>
                        </div>
                    </div>
                    <img src="{{ asset('images/front-end/home/slider/chesen-banner-1.jpg') }}" alt="">
                </li>
                <li class="splide__slide">
                    <div class="absolute left-0 right-0 my-0 top-1/4 lg:top-1/3">
                        <div class="text-center text-white drop-shadow-2xl text-8xl font-petemoss"><i>Năng lượng từ thiên
                                nhiên</i></div>
                        <div class="text-center text-white text-2xl font-bold drop-shadow-2xl pt-5">Trà xanh đặc sản Hồ Tây
                        </div>
                        <div class="flex items-center justify-center pt-5">
                            <button
                                class="text-center border rounded-3xl border-green-secondary bg-green-secondary hover:bg-green-secondary_1 hover:border-green-secondary_1 px-5 py-2">
                                <a href="" class="font-bold text-xl text-white">Chi tiết sản phẩm</a>
                            </button>
                        </div>
                    </div>
                    <img src="{{ asset('images/front-end/home/slider/chesen-banner-4.png') }}" alt="">
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full px-6 pt-3" style="background-color: #fafafa;">
        {{-- advertisement --}}
        <div class="hidden lg:flex w-full bg-white h-32 flex justify-around items-center">
            <div class="flex justify-between items-center">
                <div class="mr-4">
                    <i class="text-3xl fas fa-truck-moving text-red-500"></i>
                </div>
                <div>Giao hàng nhanh chóng<br>Freeship nội thành</div>
            </div>
            <div class="flex justify-between items-center">
                <div class="mr-4">
                    <i class="text-3xl fas fa-shopping-cart text-green-primary"></i>
                </div>
                <div>Thanh toán dễ dàng<br>Hỗ trợ chuyển khoản</div>
            </div>
            <div class="flex justify-between items-center">
                <div class="mr-4">
                    <i class="text-3xl fas fa-thumbs-up text-yellow-500"></i>
                </div>
                <div>Hàng chính hãng<br>Cam kết chính hãng 100%</div>
            </div>
        </div>
        <div class="flex flex-wrap justify-around bg-white mt-4 lg:mt-10 pt-5 pb-10 px-2 lg:px-10">
            <div class="text-center w-full lg:w-1/3 lg:px-10" style="min-height: 350px;">
                <div class="text-lg">&nbsp</div>
                <div>
                    <div>
                        <img class="h-full w-full object-contain" src="{{ asset('images/chesen-product.jpg') }}">
                    </div>
                    <div class="mt-1 lg:mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">Hộp 100g - Trà bách diệp</div>
                    <div class="font-semibold"><br>40,000 VND</div>
                    <div class="mt-1 lg:mt-2">
                        <button
                            class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                            <a href="{{ route('aboutus') }}" class="font-bold text-base"><i class="fas fa-eye"></i> Xem
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
                        <img class="h-full w-full object-contain" src="{{ asset('images/chesen-product.jpg') }}">
                    </div>
                    <div class="mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">Hộp 500g - Trà bách diệp</div>
                    <div class="font-semibold"><br>180,000 VND</div>
                    <div class="mt-2">
                        <button
                            class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                            <a href="{{ route('aboutus') }}" class="font-bold text-base"><i class="fas fa-eye"></i> Xem
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
                    <div><img class="h-full w-full object-contain" src="{{ asset('images/chesen-product.jpg') }}">
                    </div>
                    <div class="mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">1kg - Trà bách diệp</div>
                    <div class="font-semibold"><del class="text-xs">350,000 VND</del><br>300,000 VND</div>
                    <div class="mt-2">
                        <button
                            class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                            <a href="{{ route('aboutus') }}" class="font-bold text-base"><i class="fas fa-eye"></i> Xem
                                thêm</a>
                        </button>
                        <button
                            class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-4"><i
                                class="fas fa-shopping-cart text-lg"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex justify-around items-center mt-8 bg-white py-5 px-10 mb-10">
            <img src="{{ asset('images/front-end/home/aboutus-banner.jpg') }}" alt="" class="w-1/3 h-1/3 object-contain">
            <div class="w-2/5">
                <div class="text-2xl font-semibold text-green-primary pb-12 font-lora">TỪ NHỮNG MẦM TRÀ, CHÚNG TÔI TẠO RA
                    NIỀM ĐAM MÊ</div>
                <p class="text-justify">Trải qua hơn 50 năm chắt chiu tinh hoa từ những búp trà xanh và hạt cà phê
                    thượng hạng cùng mong
                    muốn mang lại
                    cho khách hàng những trải nghiệm giá trị nhất khi thưởng thức, Bách Diệp Trà liên tục là
                    thương hiệu tiên phong
                    với nhiều ý tưởng sáng tạo đi đầu trong ngành trà và cà phê.
                </p><br>
                <p class="text-justify">Chúng tôi tin rằng từng sản phẩm trà và cà phê sẽ càng thêm hảo hạng khi
                    được tạo ra từ sự
                    phấn đấu không ngừng cùng niềm đam mê.
                    Và chính kết nối dựa trên niềm tin, sự trung thực và tin yêu sẽ góp phần mang đến những nét đẹp trong
                    văn hóa thưởng trà và cà phê ngày càng bay cao, vươn xa.
                </p>
                <button
                    class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-5">
                    <a href="{{ route('aboutus') }}" class="font-bold text-xl">Xem thêm</a>
                </button>
            </div>
        </div>

    </div>
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
