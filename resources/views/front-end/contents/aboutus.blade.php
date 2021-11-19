@extends('front-end.app')
@section('content')
    <div class="w-full px-6 pb-10 flex" style="background-color: #fafafa;">
        {{-- side menu & banner --}}
        <div class="w-1/6 pt-8">
            <div><img src="{{ asset('images/front-end/common/chesen-ad.png') }}" alt="" class="h-full w-full object-contain"></div>
            <div>
                <div class=" font-bold text-lg py-5">Giới thiệu</div>
                <ul>
                    <li class=" border border-gray-500 w-full p-3 hover:text-green-primary text-green-primary pl-5" style="border-top: none">
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
            <div class=" font-semibold text-xl pb-3">VỀ CHÚNG TÔI</div>
            <div class=" border-t-4 border border-gray-500 bg-white" style="border-top-color: #0c713d">
                <div class="text-center font-semibold text-lg">
                    Xin kính chào và cảm ơn quý khách hành đã quan tâm và truy cập vào website:
                    <span class=" text-green-primary hover:text-green-primary_1">
                        <a href="/home">
                            https://bachdieptra.com/
                        </a>
                    </span>
                </div>
                <a class="flex justify-around items-center" href="/home"><img src="{{ asset('images/logo.jpg') }}" alt=""></a>
                <div class=" font-bold text-lg pt-5 pb-3 pl-5 text-green-primary_1">ABOUT US</div>
                <p class="pl-5 text-black">Founded in 1968 on the famous tea highland in Bao Loc (Lam Dong),
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    began supplying high quality coffee and tea products, in which the traditional Vietnamese taste was preserved in combination with a modern appealing style.
                </p>
                <p class="pl-5 pt-3 text-black">During the 1980s,
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    opened three coffee shops on Le Van Sy, Tran Hung Dao and Mac Thi Buoi streets.
                    These coffee shops were very successful and company became a limited company in 2000.
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    was successful in part due to the effort made to continuously improve the quality of our products and the quality of the service we provide to our respected customers.
                </p>
                <p class="pl-5 pt-3 text-black"> In 2007,
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    took possession of a tea hill in Thai Nguyen and at the same time invested in building a coffee and tea factory in Binh Duong
                     with the purpose of making our own quality products and meeting the increasing export demand.
                </p>
                <p class="pl-5 pt-3 text-black"> The first 
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    was opened at Crescent Mall shopping center in District 7.
                    The purpose of this café was to create a comfortable, welcoming modern environment where customers received the highest quality freshly brewed and ready-to-serve drinks.
                    The success of this café marked a significant change in Phuc Long’s development, step by step to become one of very few Vietnamese brands to take part in the Food & Beverage
                    industry with the operating model of modern and outstanding self-service. 
                </p>
                <p class="pl-5 pt-3 text-black">After 50 years of experience growing and developing the highest quality of tea leaves and coffee beans coupled with our devotion to
                    providing memorable customer experience,
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    has earned the reputation as a pioneer brand having many creative ideas for the coffee and tea industry.
                </p>
                <p class="pl-5 pt-3 text-black">We constantly strive to create the highest quality of tea and coffee products through ceaseless effort and passion.
                     We are truly connected to and contribute deeply to the Vietnam's longstanding culture of drinking coffee and tea.
                      The success of the first
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    shop has led to the opening of more than 60 additional shops selling our fresh and delicious drinks in Ho Chi Minh City, Binh Duong, Da Nang, Nha Trang, Ha Noi.
                    Furthermore, we continue to develop and expand the chain stores from the South to the North.
                    Increase the coverage of products to all distribution channels: supermarkets, convenience stores...
                </p>
                <p class="pl-5 pt-3 text-black">
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    operates based on the slogan “A Passion for Quality”.
                    Because of this, our brand is building a reputation for a Vietnamese brand rich in tradition that connects our many years of experience;
                    our continuous learning and adaptation to the changing times to many generations.
                </p>

                <div class=" font-bold text-lg pt-5 pb-3 pl-5 text-green-primary_1">OUR VISION</div>
                <p class="pl-5 pt-3 text-black">
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    hopes to create a Vietnamese brand in which the outstanding quality is easily recognized globally.
                </p>
                <p class="pl-5 pt-3 text-black">
                    With the ceaseless passion for expanding our market through sustainable development, 
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    is striving to become a company specialized in manufacturing and exporting high-quality coffee and tea in Vietnam.
                </p>
                <div class=" font-bold text-lg pt-5 pb-3 pl-5 text-green-primary_1">OUR MISSION</div>
                <p class="pl-5 pt-3 text-black">
                    <span class="font-bold">1. To become a pioneer</span> by creating new ideas for the coffee and tea industry.
                </p>
                <p class="pl-5 pt-3 text-black">
                    <span class="font-bold">2. To develop an outstanding brand,</span> motivate one another, as well as turn the ideas into reality over unity, interaction, listening and respect.
                </p>
                <p class="pl-5 pt-3 text-black">
                    <span class="font-bold">3. To give happiness and treat our customers with respect and courtesy,</span>  each of us must always be bright, never be inactive, or avoid challenges, not stop continuously improving ourselves.
                </p>
                <p class="pl-5 pt-3 text-black">
                    <span class="font-bold">4. Maintain our high quality</span> that satisfies our customers by having a deep understanding of their needs and values.
                </p>
                <div class=" font-bold text-lg pt-5 pb-3 pl-5 text-green-primary_1">CONTACT INFORMATION</div>
                <div class="font-bold text-lg text-center">
                    Bách Diệp Trà - chuyên bán và phân phối trà sen.
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
                        bachdieptra@gmail.com
                    </a>
                </div>
            </div>
            <div class="py-5 text-3xl">
                Bách Diệp Trà
            </div>
            <ul class="flex">
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