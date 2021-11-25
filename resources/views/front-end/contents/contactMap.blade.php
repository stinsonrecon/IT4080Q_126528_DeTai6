@extends('front-end.app')
@section('content')
<div class="w-full px-6 pb-10 flex" style="background-color: #fafafa;">
    {{-- content --}}
    <div class="w-full justify-around items-center pt-8 lg:pl-7">
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
            <div class="flex-col lg:flex-row flex justify-around items-center pb-10">
                <iframe class="map w-full h-80 lg:mr-8"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1566.047693979436!2d105.84431094455924!3d21.004253983198918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76e3624a59%3A0x4f3ae5ee12bfcc19!2zVGjGsCB2aeG7h24gVOG6oSBRdWFuZyBC4butdQ!5e0!3m2!1svi!2s!4v1637067158735!5m2!1svi!2s"
                    style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>

                <iframe class="hidden lg:block ml-8"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1566.047693979436!2d105.84431094455924!3d21.004253983198918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76f47056ab%3A0xf5929c86273af448!2zVmnhu4duIFRvw6FuIOG7qW5nIGThu6VuZyB2w6AgVGluIGjhu41j!5e0!3m2!1svi!2s!4v1637067889014!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

        </div>
        <div class="hidden lg:block py-5 text-3xl">
            Công ty TNHH Máy Văn Phòng Hoàng Minh
        </div>
        <ul class="hidden lg:flex">
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1">
                <a class="" href="{{ asset('images/front-end/aboutus/company-img(1).jpg') }}">
                    <img src="{{ asset('images/front-end/aboutus/company-img(1).jpg') }}">
                </a>
            </li>
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1">
                <a class="" href="{{ asset('images/front-end/aboutus/company-img(2).jpg') }}">
                    <img src="{{ asset('images/front-end/aboutus/company-img(2).jpg') }}">
                </a>
            </li>
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1">
                <a class="" href="{{ asset('images/front-end/aboutus/company-img(3).jpg') }}">
                    <img src="{{ asset('images/front-end/aboutus/company-img(3).jpg') }}">
                </a>
            </li>
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1">
                <a class="" href="{{ asset('images/front-end/aboutus/company-img(4).jpg') }}">
                    <img src="{{ asset('images/front-end/aboutus/company-img(4).jpg') }}">
                </a>
            </li>
            <li class="px-10 py-3 border-2 border-gray-50 hover:border-green-primary_1">
                <a class="" href="{{ asset('images/front-end/aboutus/company-img(5).jpg') }}">
                    <img src="{{ asset('images/front-end/aboutus/company-img(5).jpg') }}">
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection