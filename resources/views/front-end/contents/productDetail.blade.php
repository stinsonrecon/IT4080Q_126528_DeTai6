@extends('front-end.app')
@section('content')
    <div style="background-color: #fafafa;">
        <div class="w-full px-6 flex" style="background-color: #fafafa;">
            {{-- side menu & banner --}}
            <div class="hidden lg:block w-1/6 pt-8">
                <div><img src="{{ asset('images/front-end/common/chesen-ad.png') }}" alt=""
                        class="h-full w-full object-contain"></div>
                <div>
                    <div class=" font-bold text-lg py-5">Giới thiệu</div>
                    <ul>
                        <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5">
                            <a href="{{ route('aboutus') }}">Về chúng tôi</a>
                        </li>
                        <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5"
                            style="border-top: none">
                            <a href="{{ route('shoppingGuide') }}">Hướng dẫn mua hàng</a>
                        </li>
                        <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5"
                            style="border-top: none">
                            <a href="{{ route('shippingPolicy') }}">Chính sách vận chuyển</a>
                        </li>
                        <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5 "
                            style="border-top: none">
                            <a href="{{ route('paymentMethod') }}">Phương thức thanh toán</a>
                        </li>
                        <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5"
                            style="border-top: none">
                            <a href="{{ route('refundRegulation') }}">Quy định đổi trả hàng</a>
                        </li>
                        <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5"
                            style="border-top: none">
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
                        <img class="w-full h-full object-contain"
                            src="{{ asset('storage/product') . '/' . $product->linkImg }}" alt="">
                    </div>
                    <!-- Phần thông tin sản phẩm -->
                    <div class="w-1/2 px-10">
                        <!-- Thông tin -->
                        <div class="flex-col flex-wrap">
                            <div class="pb-5">
                                <div class=" text-green-primary_1 text-lg">
                                    Trà sen Bách Diệp
                                </div>
                                <div class="text-4xl font-semibold pt-2 text-green-primary_1">
                                    <!-- Tên sp -->
                                    {{ $product->name }}
                                </div>
                            </div>
                            <div class="flex text-green-primary text-xl">
                                <div>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="text-justify pt-2 pb-3 text-green-primary_1">
                                <!-- Mô tả ngắn -->
                                {!! $product->description !!}
                            </div>
                            <div class="border border-gray-500 py-2 font-semibold text-xl text-green-primary_1"
                                style="border-left: none; border-right: none">
                                Giá:
                                <span>
                                    @if ($promo != NULL)
                                        @php
                                            $now = \Carbon\Carbon::now();
                                            $endTime = \Carbon\Carbon::create($promo->endTime);
                                        @endphp
                                        @if ($now < $endTime)
                                            {{ number_format($product->pricePromo) }} VND
                                        @else
                                            {{ number_format($product->priceRoot) }} VND
                                        @endif
                                    @else
                                        {{ number_format($product->priceRoot) }} VND
                                    @endif
                                </span>
                            </div>
                            <div class="pt-2 pb-4 text-green-primary_1">
                                <div class="font-semibold text-xl">Thông tin sản phẩm</div>
                                <ul>
                                    <li>- Khối lượng: <span>1kg</span></li>
                                    <li>- Thương hiệu: <span>Bách Diệp Trà</span></li>
                                    <li>- Xuất xứ: <span>Thái Nguyên</span></li>
                                    <li>- Thành phần: <span>100% trà sen Bách Diệp</span></li>
                                    <li>- Hướng dẫn: <span>Cho gói trà vào tách, đổ nước sôi vào. Ngâm khoảng 2 - 3 phút,
                                            nhúng gói trà 5 lần rồi lấy ra. Giờ bạn có thể thưởng thức</span></li>
                                    <li>- Hạn sử dụng: <span>Xem trên bao bì</span></li>
                                    <li>- Bảo quản: <span>Nơi khô thoáng</span></li>
                                </ul>
                            </div>
                            <form action="{{ route('addCartByAmount') }}" method="POST">
                                @csrf
                                <div class="flex">
                                    <div class="flex justify-around items-center pr-5 text-xl text-green-primary_1">Số lượng
                                    </div>
                                    <div class="flex flex-row h-10 w-1/6 rounded-lg relative bg-transparent mt-1 ">
                                        <button data-action="decrement" type="button"
                                            class=" bg-green-primary text-white hover:bg-green-primary_1 h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-thin">−</span>
                                        </button>
                                        <input id="amount" type="number"
                                            class="focus:outline-none text-center w-full border border-gray-300 bg-gray-50 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-black  outline-none"
                                            min="1" name="amount" value="1">
                                        <button data-action="increment" type="button"
                                            class="bg-green-primary text-white hover:bg-green-primary_1 h-full w-20 rounded-r cursor-pointer">
                                            <span class="m-auto text-2xl font-thin">+</span>
                                        </button>
                                    </div>
                                </div>
                                <input type="hidden" name="idProduct" id="idProduct" value="{{ $product->id }}">
                                <button
                                    class="py-2 px-5 mt-5 flex items-center justify-around rounded-3xl  bg-green-primary border-2 border-green-primary text-white hover:bg-white hover:text-green-primary"
                                    type="submit">
                                    <p class="pr-2">Đặt hàng</p>
                                    <span>
                                        <i class="text-xl fas fa-shopping-cart"></i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-10" style="background-color: #fafafa;">
            <div
                class="flex justify-start mt-4 lg:mt-10 pb-2 mx-10 text-left border-b border-gray-500 font-semibold text-2xl text-green-primary_1">
                Sản phẩm khác</div>
            <div class="relative flex flex-wrap justify-end pt-2 pb-10 px-2 lg:px-10 product-slider">
                <div class="splide__arrows hidden lg:block w-1/2">
                    <button
                        class="splide__arrow splide__arrow--prev text-2xl hover:bg-green-primary text-black hover:text-white">
                        <i class="fas fa-caret-left"></i>
                    </button>
                    <button
                        class="splide__arrow splide__arrow--next text-2xl hover:bg-green-primary text-black hover:text-white">
                        <i class="fas fa-caret-right"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($products as $product)
                            <li class="text-center w-full lg:w-1/3 lg:px-10 splide__slide" style="min-height: 350px;">
                                @if ($product->promotion != null)
                                @php
                                    $now = \Carbon\Carbon::now();
                                    $endTime = \Carbon\Carbon::create($product->promotion->endTime);
                                @endphp
                                @if ($now < $endTime)
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
                                        <div><img class="h-full w-full object-contain"
                                                src="{{ asset('storage/product') . '/' . $product->linkImg }}">
                                        </div>
                                        <div class="mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">
                                            {{ $product->name }}</div>
                                        <div class="font-semibold">
                                            <del class="text-xs">
                                                {{ number_format($product->priceRoot) }} VND
                                            </del>
                                            <br>{{ number_format($product->pricePromo) }} VND
                                        </div>
                                        <div class="mt-2">
                                            <button
                                                class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                                                <a href="/product_detail/{{ $product->id }}" class="font-bold text-base"><i
                                                        class="fas fa-eye"></i> Xem thêm</a>
                                            </button>
                                            <button
                                                class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-4">
                                                <a href="#" data-url="{{ route('addToCart', ['id' => $product->id]) }}"
                                                    class="add_to_cart"><i class="fas fa-shopping-cart text-lg"></i></a>
                                            </button>
                                        </div>
                                    </div>
                                @else
                                    <div class="mt-7">
                                        <div>
                                            <img class="h-full w-full object-contain"
                                                src="{{ asset('storage/product') . '/' . $product->linkImg }}">
                                        </div>
                                        <div class="mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">
                                            {{ $product->name }}</div>
                                        <div class="font-semibold"><br>{{ number_format($product->priceRoot) }} VND</div>
                                        <div class="mt-2">
                                            <button
                                                class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                                                <a href="/product_detail/{{ $product->id }}" class="font-bold text-base"><i
                                                        class="fas fa-eye"></i> Xem thêm</a>
                                            </button>
                                            <button
                                                class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-4">
                                                <a href="#" data-url="{{ route('addToCart', ['id' => $product->id]) }}"
                                                    class="add_to_cart"><i class="fas fa-shopping-cart text-lg"></i></a>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="mt-7">
                                    <div>
                                        <img class="h-full w-full object-contain"
                                            src="{{ asset('storage/product') . '/' . $product->linkImg }}">
                                    </div>
                                    <div class="mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">
                                        {{ $product->name }}</div>
                                    <div class="font-semibold"><br>{{ number_format($product->priceRoot) }} VND</div>
                                    <div class="mt-2">
                                        <button
                                            class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                                            <a href="/product_detail/{{ $product->id }}" class="font-bold text-base"><i
                                                    class="fas fa-eye"></i> Xem thêm</a>
                                        </button>
                                        <button
                                            class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-4">
                                            <a href="#" data-url="{{ route('addToCart', ['id' => $product->id]) }}"
                                                class="add_to_cart"><i class="fas fa-shopping-cart text-lg"></i></a>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script>
        function displayDetailTypePay() {
            var r0 = document.getElementById("typePay0");
            var r1 = document.getElementById("typePay1");
            var text0 = document.getElementById('radioDetail0');
            var text1 = document.getElementById('radioDetail1');
            if (r0.checked == true) {
                text0.classList.add('full');
                text1.classList.remove('full');
            }
            if (r1.checked == true) {
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
            if (value <= 0) {
                target.value = 1;
            } else {
                target.value = value;
            }
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
    <script>
        function addToCart(event) {
            event.preventDefault();
            let urlCart = $(this).data('url');
            $.ajax({
                type: "GET",
                url: urlCart,
                dataType: 'json',
                success: function(data) {
                    if (data.code === 200) {
                        alert("Thêm sản phẩm thành công");
                    }
                },
                error: function() {
                    alert("Thêm sản phẩm thất bại");
                }
            });
        }
        $(function() {
            $('.add_to_cart').on('click', addToCart);
        })
    </script>
@endsection
