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
                    <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5 text-green-primary" style="border-top: none; border-bottom: none">
                        <a href="{{ route('warrantyPolicy') }}">Chính sách bảo hành</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- content --}}
        <div class="w-full  justify-around items-center pt-8 pl-7">
            <div class=" font-semibold text-xl pb-3">CHÍNH SÁCH BẢO HÀNH</div>
            <div class=" border-t-4 border border-gray-500 bg-white" style="border-top-color: #0c713d">
                <div class="flex justify-around items-center py-5"><img src="{{ asset('images/warrantyPolicy.jpg') }}" alt=""></div>
                <p class="pl-5 text-gray-500">Với mục tiêu mang đến cho Quý khách hàng sự hài lòng, an tâm khi mua hàng và sử dụng dịch vụ tại 
                    <span class="text-green-primary font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span>
                    , chúng tôi có những chính sách bảo hành, hỗ trợ kỹ thuật 1 cách chu đáo và chuyên nghiệp tại nơi sử dụng.
                    Nếu gặp bất kỳ sự cố trục trặc nào, Quý khách có thể liên hệ ngay với chúng tôi để được hướng dẫn bảo hành và tư vấn hoàn toàn miễn phí.
                </p>
                <p class="pl-5 pt-3 text-gray-500">Quý khách có thể kiểm tra thông tin bảo hành của sản phẩm do 
                    <span class="text-green-primary font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    cung cấp qua 2 cách sau:
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Phiếu bảo hành được đóng gói bên trong hộp sản phẩm
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Mục <i>“Thông tin bảo hành”</i> tại trang sản phẩm
                </p>
                <div class="pl-5 pt-5 font-normal text-3xl">I.   ĐIỀU KIỆN BẢO HÀNH</div>
                <div class="pl-5 pt-3 font-bold">1. Sản phẩm được bảo hành miễn phí nếu đảm bảo tất cả các điều kiện sau:</div>
                <p class="pl-5 pt-4 text-gray-500">
                    &#8226 Sản phẩm thuộc danh mục được bảo hành từ Nhà sản xuất hoặc Nhà phân phối.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Sản phẩm bị lỗi kỹ thuật do Nhà sản xuất.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Sản phẩm còn thời hạn bảo hành được tính kể từ ngày bàn giao (thời gian bảo hành sẽ được thể hiện cụ thể theo từng sản phẩm)
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Phiếu bảo hành còn nguyên vẹn, không chắp vá, không bị gạch xóa hay sửa chữa, bôi bẩn.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Phiếu bảo hành còn đầy đủ thông tin: mã sản phẩm, số seri, ngày sản xuất, tên khách hàng sử dụng, địa chỉ, ngày mua (đối với các sản phẩm không áp dụng Bảo hành điện tử).
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Tem bảo hành và tem niêm phong (nếu có) của Nhà sản xuất hay Nhà phân phối trên sản phẩm còn nguyên vẹn.
                </p>

                <div class="pl-5 pt-3 font-bold">2. Sản phẩm không được bảo hành hoặc sẽ phát sinh chi phí bảo hành nếu rơi vào một trong các trường hợp sau:</div>
                <p class="pl-5 pt-4 text-gray-500">
                    &#8226 Sản phẩm không thuộc danh mục được bảo hành từ Nhà sản xuất hoặc Nhà phân phối.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Sản phẩm không thỏa mãn một trong những điều kiện đã nêu ở Mục 1 “điều kiện bảo hành” 
                    (Sản phẩm đã hết thời gian bảo hành; Phiếu, tem bảo hành không có hoặc bị rách nát, sửa đổi;
                     Số mã vạch, serial trên sản phẩm không xác định được; Sản phẩm lỗi không được bảo quản trong bao đen)
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Số series, model sản phẩm không khớp với Phiếu bảo hành.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Khách hàng tự ý can thiệp sửa chữa, tháo dỡ sản phẩm hoặc sử dụng những vật tư (mực in, linh kiện, v.v.) kém chất lượng không phải do 
                    <span class="text-green-primary font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    cung cấp.
                </p>
                <p class="pl-5 text-gray-500">
                    &#8226 Sản phẩm bị cháy nổ, hỏng hóc do tác động cơ học; biến dạng, trầy xước, ẩm ướt, hoen rỉ, chảy nước, động vật xâm nhập vào, thiên tai hoặc sử dụng không đúng quy định.
                </p>

                <div class="pl-5 pt-5 font-normal text-3xl">II. HƯỚNG DẪN BẢO HÀNH</div>
                <div class="pl-5 pt-3 font-bold">1. Hướng dẫn cách thức bảo hành</div>
                <p class="pl-5 pt-4 text-gray-500">
                    Trong suốt quá trình sử dụng sản phẩm do 
                    <span class="text-green-primary font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    cung cấp, nếu có phát sinh bất kỳ sự cố trục trặc nào, Quý khách hàng vui lòng làm theo 1 trong 2 cách sau:
                </p>
                <p class="pl-5 pt-4 text-gray-500"><b>Cách 1:</b> Đăng nhập vào website theo đường link: 
                    <span class=" text-green-primary hover:text-green-primary_1">
                        <a href="/home">
                            https://hoangminhoffice.com/
                        </a>
                    </span>
                    . Tư vấn viên của chúng tôi sẽ luôn có mặt trực tuyến để hỗ trợ Quý khách.
                    Thời gian hỗ trợ từ 8h – 18h (thứ 2 đến thứ 7).
                    Ngoài khung giờ đó, Quý khách vui lòng để lại thông tin và thắc mắc vào “biểu mẫu” bên góc phải.
                    Chúng tôi sẽ cố gắng liên hệ để giải quyết những thắc mắc đó một cách sớm nhất.
                </p>
                <p class="pl-5 pt-4 text-gray-500"><b>Cách 2:</b> Gọi vào hotline bảo hành:
                    <span class="text-green-primary font-semibold">
                        <i> 024.382.38073</i>
                    </span> 
                </p>
                <p class="pl-5 pt-4 text-gray-500">
                    Hoặc Quý khách có thể liên hệ trực tiếp với Trung tâm Bảo hành của Nhà cung cấp/Nhà Phân phối sản phẩm theo thông tin trên phiếu bảo hành.
                </p>
                <p class="pl-5 pt-4 text-gray-500">
                    **  
                    <span class="text-green-primary font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    sẽ đến tận nơi để hỗ trợ sửa chữa và bảo hành sản phẩm trong phạm vi nội thành Hà Nội.
                    Đối với các khu vực khác, Quý khách hàng vui lòng gửi sản phẩm cần bảo hành về địa chỉ văn phòng giao dịch của chúng tôi để được tiến hành xử lý.
                </p>
                <div class="pl-5 pt-3 font-bold">2. Thời gian thực hiện bảo hành</div>
                <p class="pl-5 pt-4 text-gray-500">
                    Trong mọi trường hợp, thời gian thực hiện bảo hành phụ thuộc vào chính sách và mức độ sẵn có của thiết bị/vật tư thay thế của Trung Tâm Bảo Hành
                    và sẽ được thông báo cụ thể cho Quý khách hàng vào thời điểm chúng tôi tiếp nhận sản phẩm.
                </p>
                <p class="pl-5 pt-4 text-gray-500">
                    <span class="text-green-primary font-semibold">
                        <i>Hoàng Minh Office</i>
                    </span> 
                    sẽ không chịu trách nhiệm về bất kỳ thiệt hại, mất mát nào xảy ra nếu Quý khách không thực hiện theo đúng hướng dẫn trong mục <i>“Chính sách bảo hành”</i> này.
                </p>
                <p class="pl-5 pt-4 text-gray-500">Mọi chi tiết xin vui lòng liên hệ: 
                    <span class=" text-green-primary hover:text-green-primary_1">
                        <a href="/home">
                            https://hoangminhoffice.com/
                        </a>
                    </span>
                </p>
                <div class="font-bold text-lg text-center pt-5">
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
            </div>
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