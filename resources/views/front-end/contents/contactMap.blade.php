@extends('front-end.app')
@section('content')
<div class="w-full px-6 pb-10 flex" style="background-color: #fafafa;">
    {{-- side menu & banner --}}
    <div class="w-1/6 pt-8">
        <div><img src="{{ asset('images/chesen-ad.png') }}" alt="" class="h-full w-full object-contain"></div>
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
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5" style="border-top: none">
                    <a href="{{ route('paymentMethod') }}">Phương thức thanh toán</a>
                </li>
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5" style="border-top: none">
                    <a href="{{ route('refundRegulation') }}">Quy định đổi trả hàng</a>
                </li>
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5" style="border-top: none">
                    <a href="{{ route('warrantyPolicy') }}">Chính sách bảo hành</a>
                </li>
            </ul>
        </div>
    </div>
    {{-- content --}}
    <div class="w-full  justify-around items-center pt-8 pl-7">
        <div class="font-normal text-3xl pb-3">Liên hệ chúng tôi</div>
        <div>
            <div class="font-bold text-lg text-center">
                Công ty TNHH kinh doanh thiết bị máy văn phòng Hoàng Minh.
            </div>
            <div class="text-center p-2">
                Địa chỉ: 121 Hàng Bạc, Hoàn Kiếm, Hà Nội
            </div>
            <div class="text-center p-2">
                Điện thoại:
                <span  class="text-green-primary font-semibold">
                    024.382.38073
                </span>
            </div>
            <div class="text-center p-2">
                Fax: 
                <span class="text-green-primary font-semibold">
                    043.9260566
                </span>
            </div>
            <div class="text-center p-2 pb-5">
                Email: 
                <a href = "mailto: hoangminhoffice@gmail.com" class="text-green-primary hover:text-green-primary_1 font-semibold">
                    hoangminhoffice@gmail.com
                </a>
            </div>

            <div class="font-normal text-2xl pb-10">Bản đồ</div>
            <div class="flex justify-around items-center pb-10">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1566.047693979436!2d105.84431094455924!3d21.004253983198918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76e3624a59%3A0x4f3ae5ee12bfcc19!2zVGjGsCB2aeG7h24gVOG6oSBRdWFuZyBC4butdQ!5e0!3m2!1svi!2s!4v1637067158735!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1566.047693979436!2d105.84431094455924!3d21.004253983198918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76f47056ab%3A0xf5929c86273af448!2zVmnhu4duIFRvw6FuIOG7qW5nIGThu6VuZyB2w6AgVGluIGjhu41j!5e0!3m2!1svi!2s!4v1637067889014!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

        </div>
        <div class="py-5 text-3xl">
            Công ty TNHH Máy Văn Phòng Hoàng Minh
        </div>
        <ul class="flex">
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1"><a class="" href="{{ asset('images/company-img(1).jpg') }}"><img src="{{ asset('images/company-img(1).jpg') }}"></a></li>
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1"><a class="" href="{{ asset('images/company-img(2).jpg') }}"><img src="{{ asset('images/company-img(2).jpg') }}"></a></li>
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1"><a class="" href="{{ asset('images/company-img(3).jpg') }}"><img src="{{ asset('images/company-img(3).jpg') }}"></a></li>
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1"><a class="" href="{{ asset('images/company-img(4).jpg') }}"><img src="{{ asset('images/company-img(4).jpg') }}"></a></li>
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1"><a class="" href="{{ asset('images/company-img(5).jpg') }}"><img src="{{ asset('images/company-img(5).jpg') }}"></a></li>
        </ul>
    </div>
</div>
<div class="border-t-2 py-10 relative">
    <div id="advertisement">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
                <img src="{{ asset('images/xerox-logo-2-280x100.jpg') }}" alt="aheloo" class="mb-2 h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/toshiba-logo-3-250x100.jpg') }}" alt="aheloo" class="mb-2 h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/panasonic-logo-3-280x100.jpg') }}" alt="aheloo" class="mb-2 h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/xerox-logo-2-280x100.jpg') }}" alt="aheloo" class="mb-2 h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/toshiba-logo-3-250x100.jpg') }}" alt="aheloo" class="mb-2 h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/panasonic-logo-3-280x100.jpg') }}" alt="aheloo" class="mb-2 h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/xerox-logo-2-280x100.jpg') }}" alt="aheloo" class="mb-2 h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/toshiba-logo-3-250x100.jpg') }}" alt="aheloo" class="mb-2 h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/panasonic-logo-3-280x100.jpg') }}" alt="aheloo" class="mb-2 h-full w-full object-contain">
            </li>
          </ul>
        </div>
    </div>
</div>
@endsection