@extends('front-end.app')
@section('content')
    <div class="w-full px-6 pb-10 flex" style="background-color: #fafafa;">
        {{-- side menu & banner --}}
        <div class="w-1/6 pt-8">
            <div><img src="{{ asset('images/chesen-ad.png') }}" alt=""></div>
            <div>
                <div class=" font-bold text-lg py-5">Giới thiệu</div>
                <ul>
                    <li class=" border border-gray-500 w-full p-3 hover:text-red-500 text-red-500 pl-5" style="border-top: none">
                        <a href="{{ route('aboutus') }}">Về chúng tôi</a>
                    </li>
                    <li class=" border border-gray-500 w-full p-3 hover:text-red-500 pl-5" style="border-top: none">
                        <a href="{{ route('shoppingGuide') }}">Hướng dẫn mua hàng</a>
                    </li>
                    <li class=" border border-gray-500 w-full p-3 hover:text-red-500 pl-5" style="border-top: none">
                        <a href="{{ route('shippingPolicy') }}">Chính sách vận chuyển</a>
                    </li>
                    <li class=" border border-gray-500 w-full p-3 hover:text-red-500 pl-5" style="border-top: none">
                        <a href="{{ route('paymentMethod') }}">Phương thức thanh toán</a>
                    </li>
                    <li class=" border border-gray-500 w-full p-3 hover:text-red-500 pl-5" style="border-top: none">
                        <a href="{{ route('refundRegulation') }}">Quy định đổi trả hàng</a>
                    </li>
                    <li class=" border border-gray-500 w-full p-3 hover:text-red-500 pl-5" style="border-top: none">
                        <a href="{{ route('warrantyPolicy') }}">Chính sách bảo hành</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- content --}}
        <div class="w-full  justify-around items-center pt-8 pl-7">
            <div class=" font-semibold text-xl pb-3">VỀ CHÚNG TÔI</div>
            <div class=" border-t-4 border border-gray-500 bg-white" style="border-top-color: red">
                <div class="text-center font-semibold text-lg">
                    Xin kính chào và cảm ơn quý khách hành đã quan tâm và truy cập vào website:
                    <span class=" text-red-500">
                        <a href="/home">
                            https://hoangminhoffice.com/
                        </a>
                    </span>
                </div>
                <a class="flex justify-around items-center" href="/home"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                <div class=" font-bold text-lg pt-5 pb-3 pl-5">Giới thiệu</div>
                <p class="pl-5 text-black">Do nắm bắt được thị trường tiềm năng về in ấn và sao chụp của Việt Nam thời mở cửa những năm 1990s,
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span>
                    đã ra đời với định hướng kinh doanh đầu tiên là phân phối máy photocopy
                    đã qua sử dụng cho toàn miền bắc. Và từ đó, công ty chúng tôi đã dần dần phát triền,
                    mở rộng quy mô và bắt đầu kinh doanh thêm các loại linh kiện vật tư của rất nhiều dòng máy photocopy thời bấy giờ.
                    Cho đến những năm 2000s, khi nhu cầu khách hàng dần chuyển qua những dòng máy in văn phòng có kích thước nhỏ gọn hơn,
                    những chủng loại máy in đầu tiên, công nghệ hiện đại đã được
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span>
                    nhập khẩu về và cung cấp tới tay người
                    tiêu dùng cùng với các đại lý lớn nhỏ trên toàn quốc.
                </p>
                <p class="pl-5 pt-3 text-black">Với bề dày kinh nghiệm hơn 20 năm hoạt động trong lĩnh vực thiết bị máy văn phòng,
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span>
                    tự hào có một chỗ đứng vững chắc trên thị trường cũng như là sự tín nhiệm của khách hàng trên toàn quốc.
                    Khi đến với chúng tôi, các bạn sẽ được trải nhiệm những dịch vụ mua sắm và chăm sóc khách hàng đắc lực nhất.
                </p>
                <p class="pl-5 pt-3 text-black">Bên cạnh đó,
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span>
                    cũng muốn gửi lời cảm ơn trân trọng đến những khách hàng đã hỗ trợ và hợp tác cùng công ty chúng tôi từ những ngày đầu thành lập.
                    Nếu không có sự hỗ trợ và tin tưởng ấy, có thể chúng tôi đã không có được sự thành công rực rỡ như ngày hôm nay.
                    Và 
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    cũng hy vọng sẽ được tiếp tục đồng hành và hợp tác cùng quý khách hàng trong những năm tháng tiếp theo.
                </p>
                <div class=" font-bold text-lg pt-5 pb-3 pl-5">Những mặt hàng và dịch vụ tiêu biểu</div>
                <p class="pl-5 pt-3 text-black">
                    <span class="text-red-500 font-semibold">
                        <u>
                            <a href="/home"><i>Công ty TNHH máy văn phòng Hoàng Minh</i></a>
                        </u>
                    </span>
                    được phép của sở kế hoạch và đầu tư thành phố Hà Nội,
                    chuyên nhập khẩu và phân phối nguyên vật tư linh kiện máy in, máy photo, máy fax, các loại mực in,
                    mực photo và là một trong số những doanh nghiệp uy tín hàng đầu trong lĩnh vực máy văn phòng tại thị trường Việt Nam.
                    Những thương hiệu tiêu biểu của
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    gồm có: Ricoh, Toshiba, Canon, Sharp, Fuji-Xerox, HP, Epson, v.v.
                    Các loại máy photocopy, máy in hoặc linh kiện vật tư đến từ những thương hiệu kể trên đều có nhiều tính năng ưu việt và được khách hàng trên toàn quốc tín nhiệm
                    cũng như sử dụng rộng rãi. Ngoài ra, 
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    còn cung cấp các loại hình dịch vụ đổ mực, bảo trì, bảo dưỡng và sửa chữa máy in,
                    máy photocopy chất lượng cao, giá cả cạnh trạnh nhất trong khu vực Hà Nội.
                </p>
                <div class=" font-bold text-lg pt-5 pb-3 pl-5">Định hướng kinh doanh</div>
                <p class="pl-5 pt-3 text-black">
                    Với phương châm luôn đặt lợi ích của khách hàng lên hàng đầu,
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    luôn luôn đổi mới để có thể nắm bắt tốt hơn thị trường cũng như thị hiếu của người tiêu dùng qua từng ngày.
                    Sứ mệnh của chúng tôi là trở thành một doanh nghiệp kinh doanh thiết bị máy văn phòng chuyên nghiệp nhất và tầm cỡ nhất tại Việt Nam,
                    mang lại nhiều lợi ích quý giá mà khách hàng mong muốn.
                </p>
                <div class=" font-bold text-lg pt-5 pb-3 pl-5">Thông tin liên hệ</div>
                <div class="font-bold text-lg text-center">
                    Công ty TNHH kinh doanh thiết bị máy văn phòng Hoàng Minh.
                </div>
                <div class="text-center p-2">
                    Địa chỉ: 121 Hàng Bạc, Hoàn Kiếm, Hà Nội
                </div>
                <div class="text-center p-2">
                    Điện thoại:
                    <span  class="text-red-500 font-semibold">
                        024.382.38073
                    </span>
                </div>
                <div class="text-center p-2">
                    <span class="text-red-500 font-semibold">
                        Fax: 043.9260566
                    </span>
                </div>
                <div class="text-center p-2 pb-5">
                    Email: 
                    <a href = "mailto: hoangminhoffice@gmail.com" class="text-red-500 font-semibold">
                        hoangminhoffice@gmail.com
                    </a>
                </div>
            </div>
            <div class="py-5 text-3xl">
                Công ty TNHH Máy Văn Phòng Hoàng Minh
            </div>
            <ul class="flex">
                <li class="px-10 py-3 border-2 border-gray-50 hover:border-red-500"><a class="" href="{{ asset('images/company-img(1).jpg') }}"><img src="{{ asset('images/company-img(1).jpg') }}"></a></li>
                <li class="px-10 py-3 border-2 border-gray-50 hover:border-red-500"><a class="" href="{{ asset('images/company-img(2).jpg') }}"><img src="{{ asset('images/company-img(2).jpg') }}"></a></li>
                <li class="px-10 py-3 border-2 border-gray-50 hover:border-red-500"><a class="" href="{{ asset('images/company-img(3).jpg') }}"><img src="{{ asset('images/company-img(3).jpg') }}"></a></li>
                <li class="px-10 py-3 border-2 border-gray-50 hover:border-red-500"><a class="" href="{{ asset('images/company-img(4).jpg') }}"><img src="{{ asset('images/company-img(4).jpg') }}"></a></li>
                <li class="px-10 py-3 border-2 border-gray-50 hover:border-red-500"><a class="" href="{{ asset('images/company-img(5).jpg') }}"><img src="{{ asset('images/company-img(5).jpg') }}"></a></li>
            </ul>
        </div>
    </div>
    <div class="border-t-2 py-10">
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