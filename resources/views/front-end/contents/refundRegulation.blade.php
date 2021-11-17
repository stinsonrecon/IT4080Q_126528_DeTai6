@extends('front-end.app')
@section('content')
    <div class="w-full px-6 pb-10 flex" style="background-color: #fafafa;">
        {{-- side menu & banner --}}
        <div class="w-1/6 pt-8">
            <div><img src="{{ asset('images/chesen-ad.png') }}" alt=""></div>
            <div>
                <div class=" font-bold text-lg py-5">Giới thiệu</div>
                <ul>
                    <li class=" border border-gray-500 w-full p-3 hover:text-red-500 pl-5">
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
                    <li class=" border border-gray-500 w-full p-3 hover:text-red-500 pl-5 text-red-500" style="border-top: none">
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
            <div class=" font-semibold text-xl pb-3">QUY ĐỊNH ĐỔI TRẢ HÀNG</div>
            <div class=" border-t-4 border border-gray-500 bg-white" style="border-top-color: red">
                <div class="flex justify-around items-center pb-5"><img src="{{ asset('images/refundRegulation.jpg') }}" alt=""></div>
                <p class="pl-5 text-gray-500">Với mục tiêu mang đến cho Quý khách hàng sự hài lòng, an tâm khi mua hàng và sử dụng dịch vụ tại 
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span>
                    , chúng tôi có những chính sách đổi trả hàng lên tới 30 ngày nếu quý khách đáp ứng được những điều kiện sau đây:
                </p>
                <div class="pl-5 pt-5 font-normal text-3xl">1) Điều kiện về thời gian</div>
                <p class="pl-5 pt-3 text-gray-500">Quý khách có thể thực hiện việc đổi trả hàng trong vòng 30 ngày kể từ ngày bàn giao.
                    Quy trình đổi trả sẽ được thực hiện ngay khi hàng hóa được hoàn trả về công ty và chúng tôi sẽ thực hiện các bước tiếp theo để kiểm tra,
                    đánh giá chất lượng sản phẩm và tiến hành đổi mới hoặc hoàn tiền theo yêu cầu của quý khách.
                </p>

                <div class="pl-5 pt-5 font-normal text-3xl">2) Điều kiện về sản phẩm</div>
                <p class="pl-5 text-gray-500">
                    &#8226 Còn nguyên đóng gói và bao bì của sản phẩm, không bị móp rách, không bị nứt vỡ, không bị chập, cháy hoặc nổ.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Còn đầy đủ các bộ phận, phụ kiện và chi tiết khác như tem/ phiếu bảo hành, tem thương hiệu, hướng dẫn kỹ thuật  và các quà tặng kèm theo (nếu có).
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Không có dữ liệu trong sản phẩm có thiết bị lưu trữ.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Không bị dơ bẩn, trầy xước, bể vỡ, hư hỏng, có mùi lạ hoặc có dấu hiệu đã qua giặt tẩy hoặc qua sử dụng.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Không có dấu hiệu bị sửa chữa hay thay thế linh kiện.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Không áp dụng với sản phẩm nguyên seal (Apple, Surface), máy in, máy photocopy, vật tư tiêu hao, máy ảnh, máy quay, chip, máy chủ, phần mềm,
                    Laptop hoặc PC đồng bộ đã được khách hàng yêu cầu thay thế Ram/ SSD.
                </p>
                <div class="pl-5 pt-5 font-normal text-3xl">3) Những trường hợp được tiếp nhận đổi trả</div>
                <p class="pl-5 pt-4 text-gray-500">
                    &#8226 Hàng bị lỗi do nhà sản xuất, không hoạt động hoặc sử dụng được.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Hàng bị hư hỏng trong quá trính vận chuyển cho khách của công ty.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Hàng giao không đúng mẫu mã, chủng loại mà khách đã đặt.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Hàng giao bị thiếu số lượng.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Đổi trả vì lý do chủ quan của khách hàng (không ưng ý, mua nhầm hàng, v.v.)
                </p>

                <div class="pl-5 pt-3 font-bold">4) Phương thức hoàn tiền</div>
                <p class="pl-5 pt-4 text-gray-500">
                    Nếu lỗi đó thuộc về chúng tôi, 
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    sẽ chịu hoàn toàn những chi phí phát sinh trong quá trình hoàn trả như là vận chuyển,
                    đóng gói, làm mới, v.v. Còn nếu quý khách đổi trả hàng vì bất kỳ lý do chủ quan nào, chúng tôi sẽ không chi trả cho những lệ phí đó.
                </p>
                <p class="pl-5 text-gray-500">
                    <u>Phương thức hoàn tiền: </u>
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    có thể hoàn trả tiền mặt cho quý khách ngay tại công ty hoặc thực hiện uỷ nhiệm chi qua ngân hàng.
                    Trong trường hợp chuyển khoản, lệnh chuyển tiền sẽ được thực hiện ngay sau khi chúng tôi hoàn tất việc kiểm tra và đánh giá tình trạng hàng hoá trả về; 
                    quý khách cũng sẽ được thông báo tiến độ hoàn trả cụ thể qua email.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Thời gian quý khách nhận được chuyển khoản là từ 1 – 2 ngày sau khi có xác nhận hoàn tiền từ Hoàng Minh Office (có thể sớm hoặc trễ hơn tùy thuộc vào ngân hàng mà quý khách sử dụng)
                </p>
                <p class="pl-5 text-gray-500">
                    Mọi chi tiết xin quý khách vui lòng liên hệ:
                </p>
                <div class="font-bold text-lg text-center pt-5">
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
        </div>
    </div>
    <div class="border-t-2 py-10">
        <div class="splide">
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