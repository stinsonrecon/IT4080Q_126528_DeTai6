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
                <li class=" border border-gray-500 w-full p-3 hover:text-red-500 pl-5 text-red-500" style="border-top: none">
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
        <div class=" font-semibold text-xl pb-3">CHÍNH SÁCH VẬN CHUYỂN</div>
        <div class=" border-t-4 border border-gray-500 bg-white" style="border-top-color: red">
            <div class="flex justify-around items-center py-5"><img src="{{ asset('images/shippingPolicy.png') }}" alt=""></div>
            <p class="pl-5 text-gray-500">Chính sách giao nhận và lắp đặt của chúng tôi được thiết kế với mong muốn tạo ra các giá trị gia tăng cho sản phẩm; giúp quý khách hàng có thể thoải mái mua sắm và sử dụng dịch vụ tại
                <span class="text-red-500 font-semibold">
                    <i>Hoàng Minh Office</i>
                </span>
            </p>
            <p class="pl-5 pt-3 text-gray-500">Tất cả các sản phẩm của chúng tôi đều cam kết hỗ trợ, đi kèm các dịch vụ tiện ích như: vận chuyển,
                giao nhận, hướng dẫn sử dụng, bảo hành, bảo trì theo đúng tiêu chuẩn của nhà sản xuất.
            </p>
            <div class="pl-5 pt-5 font-normal text-3xl">1) Các đơn hàng có địa chỉ giao nhận trong nội thành Hà Nội</div>
            <p class="pl-5 pt-4 text-gray-500">
                Hoàng Minh Office sẽ hỗ trợ 100% chi phí vận chuyển cho những đơn hàng có địa chỉ giao nhận trong phạm vi nội thành Hà Nội.
            </p>
            <p class="pl-5 text-gray-500">
                Đối những đơn hàng có giá trị nhỏ (< 300.000 vnd), mà địa chỉ giao nhận lại xa văn phòng giao dịch,
                chúng tôi sẽ thỏa thuận 1 cước phí vận chuyển hợp lý ngay sau khi quý khách đặt hàng thành công trên website 
                <span class=" text-red-500">
                    <a href="/home">
                        https://hoangminhoffice.com/
                    </a>
                </span>
            </p>
            <p class="pl-5 text-gray-500">
                &#8226 Thời gian giao hàng từ 8h đến 18h (từ thứ 2 đến thứ 7, trừ ngày lễ)
            </p>
            <div class="pl-5 pt-5 font-normal text-3xl">2) Các đơn hàng có địa chỉ giao nhận không phải là thành phố Hà Nội</div>
            <p class="pl-5 pt-4 text-gray-500">
                <span class="text-red-500 font-semibold">
                    <i>Hoàng Minh Office</i>
                </span> 
                sẽ chỉ ủy quyền cho những đơn vị uy tín như DHL, EMS, Viettel, Giao Hàng Tiết Kiệm, Grab, v.v. để vận chuyển hàng tới tay quý khách.
                Ngay sau khi hàng hoá được bàn giao cho bên thứ 3, chúng tôi sẽ gửi tới quý khách 1 biên bản xác nhận,
                ghi rõ thông tin đơn vị vận chuyển cùng với tiến độ giao vận để quý khách có thể tự chủ động liên hệ trong mọi trường hợp.
            </p>
            <p class="pl-5 pt-4 pb-10 text-gray-500">
                Lưu ý: Cước phí vận chuyển sẽ do quý khách tự thanh toán với bên dịch vụ sau khi nhận được hàng.
                Nếu quý khách có yêu cầu sử dụng 1 dịch vụ vận chuyển nào khác, xin vui lòng email: 
                <span class=" text-red-500">
                    <a href="/home">
                        https://hoangminhoffice.com/
                    </a>
                </span>
                hoặc gọi vào đường dây nóng: 024.382.38073 để được chúng tôi hỗ trợ.
            </p>
        </div>
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