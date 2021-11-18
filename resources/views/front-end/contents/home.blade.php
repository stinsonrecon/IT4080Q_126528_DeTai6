@extends('front-end.app')
@section('content')
    <div id="banner" class=" relative w-full border-t-2 border-green-primary">
        <div class="splide__arrows">
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
                    <div class="absolute left-0 right-0 my-0 top-1/3">
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
                    <img src="{{ asset('images/chesen-banner-3.png') }}" alt="">
                </li>
                <li class="splide__slide">
                    <div class="absolute left-0 right-0 my-0 top-1/3">
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
                    <img src="{{ asset('images/chesen-banner-2.png') }}" alt="">
                </li>
                <li class="splide__slide">
                    <div class="absolute left-0 right-0 my-0 top-1/3">
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
                    <img src="{{ asset('images/chesen-banner-1.jpg') }}" alt="">
                </li>
                <li class="splide__slide">
                    <div class="absolute left-0 right-0 my-0 top-1/3">
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
                    <img src="{{ asset('images/chesen-banner-4.png') }}" alt="">
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full px-6 pt-3" style="background-color: #fafafa;">
        {{-- advertisement --}}
        <div class="w-full bg-white h-32 flex justify-around items-center">
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
        <div class=" flex justify-around items-center mt-8 bg-white py-5 px-10">
            <img src="{{ asset('images/aboutus-banner.jpg') }}" alt="" class="w-1/3 h-1/3 object-contain">
            <div class="w-1/4">
                <div class="text-2xl font-semibold text-green-primary pb-12 font-lora">TỪ NHỮNG MẦM TRÀ, CHÚNG TÔI TẠO RA
                    NIỀM ĐAM MÊ</div>
                <p>Trải qua hơn 50 năm chắt chiu tinh hoa từ những búp trà xanh và hạt cà phê thượng hạng cùng mong
                    muốn mang lại
                    cho khách hàng những trải nghiệm giá trị nhất khi thưởng thức, Bách Diệp Trà liên tục là
                    thương hiệu tiên phong
                    với nhiều ý tưởng sáng tạo đi đầu trong ngành trà và cà phê.
                </p><br>
                <p>Chúng tôi tin rằng từng sản phẩm trà và cà phê sẽ càng thêm hảo hạng khi được tạo ra từ sự
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
        <div class="flex flex-wrap justify-around bg-white mt-10 pt-5 pb-10 px-10">
            <div class="text-center w-1/4 px-10">
                <div><img class="h-full w-full object-contain" src="{{ asset('images/chesen-product.jpg') }}"></div>
                <div class="mt-2 font-bold text-xl text-green-primary_1 font-lora">Trà bách diệp</div>
                <div class=" text-justify pt-3">
                    Gắn bó hơn 40 năm với cây chè. Giữ được hương vị chè truyền thống.
                    HTX Trà Sơn Dung mong muốn mang tới cho khách hàng những sản phẩm trà Tân Cương Thái Nguyên chính hiệu.
                    Chúng tôi cam kết mang tới Quý khách hàng những sản phẩm trà tốt nhất, chất lượng nhất bằng […]
                </div>
                <div class="mt-2">
                    <button
                        class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-5">
                        <a href="{{ route('aboutus') }}" class="font-bold text-xl"><i class="fas fa-eye"></i>Xem
                            thêm</a>
                    </button>
                    <button
                        class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-5"><i
                            class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="text-center w-1/4 px-10">
                <div><img class="h-full w-full object-contain" src="{{ asset('images/chesen-product.jpg') }}"></div>
                <div class="mt-2 font-bold text-xl text-green-primary_1 font-lora">Trà bách diệp</div>
                <div class=" text-justify pt-3">
                    Gắn bó hơn 40 năm với cây chè. Giữ được hương vị chè truyền thống.
                    HTX Trà Sơn Dung mong muốn mang tới cho khách hàng những sản phẩm trà Tân Cương Thái Nguyên chính hiệu.
                    Chúng tôi cam kết mang tới Quý khách hàng những sản phẩm trà tốt nhất, chất lượng nhất bằng […]
                </div>
                <div class="mt-2">
                    <button
                        class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-5">
                        <a href="{{ route('aboutus') }}" class="font-bold text-xl"><i class="fas fa-eye"></i>Xem
                            thêm</a>
                    </button>
                    <button
                        class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-5"><i
                            class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="text-center w-1/4 px-10">
                <div><img class="h-full w-full object-contain" src="{{ asset('images/chesen-product.jpg') }}"></div>
                <div class="mt-2 font-bold text-xl text-green-primary_1 font-lora">Trà bách diệp</div>
                <div class=" text-justify pt-3">
                    Gắn bó hơn 40 năm với cây chè. Giữ được hương vị chè truyền thống.
                    HTX Trà Sơn Dung mong muốn mang tới cho khách hàng những sản phẩm trà Tân Cương Thái Nguyên chính hiệu.
                    Chúng tôi cam kết mang tới Quý khách hàng những sản phẩm trà tốt nhất, chất lượng nhất bằng […]
                </div>
                <div class="mt-2">
                    <button
                        class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-5">
                        <a href="{{ route('aboutus') }}" class="font-bold text-xl"><i class="fas fa-eye"></i>Xem
                            thêm</a>
                    </button>
                    <button
                        class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-5"><i
                            class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="text-center w-1/4 px-10">
                <div class="timer">
                    <span id="hour" class="text-red-500 text-lg">00</span>
                    <span class="text-red-500 text-lg">:</span>
                    <span id="minute" class="text-red-500 text-lg">00</span>
                    <span class="text-red-500 text-lg">:</span>
                    <span id="second" class="text-red-500 text-lg">00</span>
                    <div>
                        <div class="absolute float-left">
                            <img class="w-20 h-20" src="{{ asset('images/sale.png') }}" alt="">
                        </div>
                        <div><img class="h-full w-full object-contain" src="{{ asset('images/chesen-product.jpg') }}">
                        </div>
                        <div class="mt-2 font-bold text-xl text-green-primary_1 font-lora">Trà bách diệp</div>
                        <div class=" text-justify pt-3">
                            Gắn bó hơn 40 năm với cây chè. Giữ được hương vị chè truyền thống.
                            HTX Trà Sơn Dung mong muốn mang tới cho khách hàng những sản phẩm trà Tân Cương Thái Nguyên
                            chính hiệu.
                            Chúng tôi cam kết mang tới Quý khách hàng những sản phẩm trà tốt nhất, chất lượng nhất bằng […]
                        </div>
                        <div class="mt-2">
                            <button
                                class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-5">
                                <a href="{{ route('aboutus') }}" class="font-bold text-xl"><i
                                        class="fas fa-eye"></i>Xem thêm</a>
                            </button>
                            <button
                                class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-5"><i
                                    class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var m = 1000; //define your minute
            var s = 0;
            var h;
            var xx = 0;
            var width = 100 / (m * 60);
            //var count=0;
            var clearInter;
            var tempW = 0;
            minute = m % 60;
            h = Math.floor(m / 60);
            document.getElementById('hour').innerHTML = h;
            document.getElementById('minute').innerHTML = minute;
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
                        document.getElementById('second').innerHTML = "0" + s;
                    } else {
                        document.getElementById('second').innerHTML = s;
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
                    document.getElementById('second').innerHTML = s;
                    if (minute != 0) {
                        minute = minute - 1;
                        if (minute < 10) {
                            document.getElementById('minute').innerHTML = "0" + minute;
                        } else {
                            document.getElementById('minute').innerHTML = minute;
                        }
                    } else {
                        if (h != 0) {
                            h = h - 1;
                            minute = 59;
                            document.getElementById('minute').innerHTML = minute;
                            document.getElementById('hour').innerHTML = h;
                        } else {
                            document.getElementById('second').innerHTML = '00';
                            clearInterval(clearInter);
                        }
                    }
                }
            }
        </script>
    @endsection
