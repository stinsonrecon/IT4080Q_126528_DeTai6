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
                    <li class=" border border-gray-500 w-full p-3 hover:text-red-500 pl-5 text-red-500" style="border-top: none">
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
        <div class="w-full justify-around items-center pt-8 pl-7">
            <div class=" font-semibold text-xl pb-3">PHƯƠNG THỨC THANH TOÁN</div>
            <div class=" border-t-4 border border-gray-500 bg-white" style="border-top-color: red">
                <div class="text-center text-lg text-gray-500">
                    Nhằm mang đến cho quý khách hàng những trải nghiệm mua sắm trực tuyến tuyệt vời và yên tâm tại 
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span>
                    , chúng tôi đưa ra nhiều phương thức thanh toán đa dạng để quý khách dễ dàng lựa chọn như sau:
                </div>
                <div class="flex justify-around items-center"><img src="{{ asset('images/Payments.png') }}" alt=""></div>
                <div class=" font-bold text-lg pt-5 pb-3 pl-5 text-gray-500">1) Thanh toán bằng tiền mặt</div>
                <p class="pl-5 text-gray-500">
                    &#8226 <u>Thanh toán ngay tại cửa hàng:</u>
                    Quý khách đến mua hàng và thanh toán tiền mặt trực tiếp tại Công ty TNHH máy văn phòng Hoàng Minh.
                </p>
                <p class="pl-5 py-3 text-gray-500">
                    <i>
                        Địa chỉ: <span class="font-semibold">121 Hàng Bạc, Quận Hoàn Kiếm, TP. Hà Nội.<span>
                    </i>
                </p>
                <p class="pl-5 pt-3 text-gray-500">&#8226 <u>Thanh toán tại điểm giao hàng:</u>
                    áp dụng với các đơn hàng có địa chỉ giao nhận <b>tại</b> thành phố Hà Nội hoặc những đơn hàng được chúng tôi tiếp nhận hình thức ship C.O.D 
                    (liên hệ: 
                    <span class="text-red-500 font-semibold">
                        <i>024.382.38073</i>
                    </span>
                     để biết thêm chi tiết những nơi áp dụng hình thức ship C.O.D)
                </p>
                <p class="pl-5 pt-5 text-gray-500">
                    Quý khách vui lòng thanh toán cho nhân viên giao vận toàn bộ hoặc một phần (nếu đã đặt cọc) giá trị hàng hóa đã mua.
                </p>
                <p class="pl-5 pt-5 text-gray-500">
                    Xem thêm “Chính sách vận chuyển” cho những đơn hàng có địa chỉ giao nhận <b>tại</b> thành phố Hà Nội (<i><a href="" class="text-blue-700">Xem chi tiết</a></i>)
                </p>

                <div class="font-bold text-lg pt-5 pb-3 pl-5 text-gray-500">2) Thanh toán bằng hình thức chuyển khoản hoặc trực tuyến</div>
                <p class="pl-5 pt-3 text-gray-500">
                    Đây là hình thức thanh toán được khuyến khích cho những đơn hàng có địa chỉ giao nhận <b><i>không phải</i></b> thành phố Hà Nội.
                    Quý khách vui lòng chuyển khoản trước cho chúng tôi 1 phần tiền cọc hoặc 100% giá trị đơn hàng.
                    Sau khi chuyển khoản thành công,
                    quý khách có thể email (
                        <span>
                            <a href = "mailto: hoangminhoffice@gmail.com" class="text-red-500 font-semibold">
                                hoangminhoffice@gmail.com
                            </a>
                        </span>
                    ) hoặc fax (
                        <span class="text-red-500 font-semibold">
                            <i>043.926.0566</i>
                        </span>
                    ) ủy nhiệm chi cho chúng tôi để nhân viên kinh doanh có thể tiến hành lên đơn và xuất hàng cho quý khách.
                </p>
                <p class="pl-5 pt-3 text-gray-500">
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    sẽ chỉ ủy quyền cho các đơn vị uy tín như DHL, EMS, Viettel, Giao Hàng Tiết Kiệm, Grab, v.v. để vận chuyển hàng tới tay quý khách.
                </p>
                <p class="pl-5 py-3 text-gray-500">
                    Bên cạnh đó, quý khách hàng có thể sử dụng hình thức thanh toán trực tuyến thông qua 2 cách sau:
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 <u>Thanh toán bằng thẻ nội địa:</u>
                    áp dụng trong trường hợp khách hàng muốn thanh toán thông qua Internet banking hoăc dịch vụ thanh trực tuyến tại các ngân hàng.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 <u>Ví điện tử Ngân Lượng, Bảo Kim:</u>
                    áp dụng trong trường hợp khách hàng muốn thanh toán qua ví điện tử hoặc cổng thanh toán trực tuyến trên Internet.
                </p>
                <p class="pl-5 pt-5 pb-3 text-gray-500">
                    <b><i>Lưu ý:</i></b> Các đơn hàng có địa chỉ giao nhận tại thành phố Hà Nội cũng có thể áp dụng hình thức chuyển khoản hoặc thanh toán trực tuyến như đã nêu ở mục 2.
                    Tuy nhiên,
                    <span class="text-red-500 font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span>
                    khuyến khích khách hàng sử dụng hình thức “thanh toán tại điểm giao hàng” để tiến trình xử lý đơn hàng có thể diễn ra 1 cách nhanh nhất.
                </p>
                <p class="pl-5 py-3 text-gray-500">
                    Xem thêm “Chính sách vận chuyển” cho những đơn hàng có địa chỉ giao nhận <b>không phải</b> thành phố Hà Nội (<i><a href="" class="text-blue-700">Xem chi tiết</a></i>)
                </p>
                <div class=" font-bold text-lg pt-5 pb-3 pl-5 text-gray-500">3) Thông tin chuyển khoản</div>
                <table class="flex justify-around items-center w-full pb-10">
                    <tr class="w-full">
                        <td class="px-10 pb-10 pt-3 border border-gray-400" style="border-top: none; border-left: none">
                            <div class="pb-10 text-gray-500">1.    Ngân hàng Vietcombank</div>
                            <div class="text-gray-500 pb-4">Tên chủ TK: Công ty TNHH kinh doanh thiết bị máy văn phòng Hoàng Minh</div>
                            <div class="text-gray-500 pb-4">Số TK: 
                                <span class="text-red-500 font-semibold">
                                    <i>0011004248403</i>
                                </span>
                            </div>
                            <div class="text-gray-500">Tại sở giao dịch ngân hàng TMCP Ngoại Thương, TP. Hà Nội</div>
                        </td>
                        <td class="px-10 pb-10 pt-3 border border-gray-400" style="border-top: none; border-right: none">
                            <div class="pb-10 text-gray-500">1.    Ngân hàng Vietcombank</div>
                            <div class="text-gray-500 pb-4">Tên chủ TK: Công ty TNHH kinh doanh thiết bị máy văn phòng Hoàng Minh</div>
                            <div class="text-gray-500 pb-4">Số TK: 
                                <span class="text-red-500 font-semibold">
                                    <i>0011004248403</i>
                                </span>
                            </div>
                            <div class="text-gray-500">Tại sở giao dịch ngân hàng TMCP Ngoại Thương, TP. Hà Nội</div>
                        </td>
                    </tr>
                    <tr class="w-full">
                        <td class="px-10 pb-10 pt-3 border border-gray-400" style="border-top: none; border-left: none">
                            <div class="pb-10 text-gray-500">1.    Ngân hàng Vietcombank</div>
                            <div class="text-gray-500 pb-4">Tên chủ TK: Công ty TNHH kinh doanh thiết bị máy văn phòng Hoàng Minh</div>
                            <div class="text-gray-500 pb-4">Số TK: 
                                <span class="text-red-500 font-semibold">
                                    <i>0011004248403</i>
                                </span>
                            </div>
                            <div class="text-gray-500">Tại sở giao dịch ngân hàng TMCP Ngoại Thương, TP. Hà Nội</div>
                        </td>
                        <td class="px-10 pb-10 pt-3 border border-gray-400" style="border-top: none; border-right: none">
                            <div class="pb-10 text-gray-500">1.    Ngân hàng Vietcombank</div>
                            <div class="text-gray-500 pb-4">Tên chủ TK: Công ty TNHH kinh doanh thiết bị máy văn phòng Hoàng Minh</div>
                            <div class="text-gray-500 pb-4">Số TK: 
                                <span class="text-red-500 font-semibold">
                                    <i>0011004248403</i>
                                </span>
                            </div>
                            <div class="text-gray-500">Tại sở giao dịch ngân hàng TMCP Ngoại Thương, TP. Hà Nội</div>
                        </td>
                    </tr>
                    <tr class="w-full">
                        <td class="px-10 pb-10 pt-3 border border-gray-400" style="border-bottom: none; border-left: none">
                            <div class="pb-10 text-gray-500">1.    Ngân hàng Vietcombank</div>
                            <div class="text-gray-500 pb-4">Tên chủ TK: Công ty TNHH kinh doanh thiết bị máy văn phòng Hoàng Minh</div>
                            <div class="text-gray-500 pb-4">Số TK: 
                                <span class="text-red-500 font-semibold">
                                    <i>0011004248403</i>
                                </span>
                            </div>
                            <div class="text-gray-500">Tại sở giao dịch ngân hàng TMCP Ngoại Thương, TP. Hà Nội</div>
                        </td>
                        <td class="px-10 pb-10 pt-3 border border-gray-400" style="border-bottom: none; border-right: none">
                            <div class="pb-10 text-gray-500">1.    Ngân hàng Vietcombank</div>
                            <div class="text-gray-500 pb-4">Tên chủ TK: Công ty TNHH kinh doanh thiết bị máy văn phòng Hoàng Minh</div>
                            <div class="text-gray-500 pb-4">Số TK: 
                                <span class="text-red-500 font-semibold">
                                    <i>0011004248403</i>
                                </span>
                            </div>
                            <div class="text-gray-500">Tại sở giao dịch ngân hàng TMCP Ngoại Thương, TP. Hà Nội</div>
                        </td>
                    </tr>
                </table>
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