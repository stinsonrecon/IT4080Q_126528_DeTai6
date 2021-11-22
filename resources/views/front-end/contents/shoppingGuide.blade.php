@extends('front-end.app')
@section('content')
    <div class="w-full px-6 pb-10 flex" style="background-color: #fafafa;">
        {{-- side menu & banner --}}
        <div class="w-1/6 pt-8">
            <div><img src="{{ asset('images/front-end/common/chesen-ad.png') }}" alt="" class="h-full w-full object-contain"></div>
            <div>
                <div class=" font-bold text-lg py-5">Giới thiệu</div>
                <ul>
                    <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5">
                        <a href="{{ route('aboutus') }}">Về chúng tôi</a>
                    </li>
                    <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5 text-green-primary" style="border-top: none">
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
                        <a href="{{ route('news') }}">Tin tức khuyến mãi</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- content --}}
        <div class="w-full justify-around items-center pt-8 pl-7">
            <div class=" font-semibold text-xl pb-3">HƯỚNG DẪN MUA HÀNG</div>
            <div class=" border-t-4 border border-gray-500 bg-white" style="border-top-color: #0c713d">
                <div class="pl-5 pt-5 text-2xl text-gray-500 font-bold">
                    Quý khách có thể lựa chọn một trong những cách mua hàng sau:
                </div>
                <p class="pl-5 pt-4 text-gray-500">1. Đến mua hàng trực tiếp tại showroom 
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    .
                </p>
                <p class="pl-5 pt-5 text-gray-500">Địa chỉ: 121 Hàng Bạc, Quận Hoàn Kiếm, TP. Hà Nội</p>
                <p class="pl-5 pt-4 text-gray-500">
                    2. Gọi mua hàng theo đường dây nóng; 
                    <span class="text-green-primary font-semibold">
                        <i>090.328.2609</i>
                    </span>
                    (8h – 18h, từ thứ 2 đến thứ 7), nhân viên bán hàng của chúng tôi sẽ luôn sẵn sàng phục vụ bạn.
                </p>
                <p class="pl-5 pt-4 text-gray-500">3. Đặt mua hàng trên website 
                    <span class=" text-green-primary hover:text-green-primary_1">
                        <a href="/home">
                            https://bachdieptra.com/
                        </a>
                    </span>
                </p>
                <div class="flex justify-around items-center pt-5"><img src="{{ asset('images/shoppingGuide.png') }}" alt=""></div>
                <p class="pl-5 pt-5 text-gray-500">
                    &#8226  <u>Cách 1: Tìm kiếm sản phẩm theo danh mục hàng hoá.</u>
                    <span class=" text-green-primary hover:text-green-primary_1">
                        <a href="/home">
                            https://bachdieptra.com/
                        </a>
                    </span>
                    có 1 số danh mục hàng cơ bản như:
                    Máy Photocopy, Máy Scan, Máy In, Máy Huỷ Tài Liệu, Mực In – Vật Tư.
                    Từng danh mục hàng sẽ chia ra thành rất nhiều chủng loại hàng hóa khác nhau.
                    Bạn chỉ cần click vào đúng chủng loại sản phẩm mà bạn đang muốn tìm và hệ thống sẽ hiển thị ra 1 danh sách các sản phẩm liên quan. 
                    Sau đó, bạn có thể sử dụng bộ lọc thông minh để tìm đúng ra sản phẩm mà mình mong muốn.
                </p>
                <p class="pl-5 pt-5 text-gray-500">
                    &#8226  <u>Cách 2: Tìm nhanh khi đã biết tên, mã hoặc từ khóa của sản phẩm.</u>
                    Khi gõ 1 từ khóa bất kỳ  vào box “Tìm kiếm sản phẩm”, hệ thống sẽ cho ra 1 danh sách những sản phẩm liên quan nhất với từ khóa đó.
                    Bạn cũng có thể sử dụng bộ lọc thông minh để thu hẹp kết quả tìm kiếm nếu có quá nhiều sản phẩm được hiển thị.
                </p>
                <p class="pl-5 pt-5 text-gray-500">
                    &#8226  <u>Lựa chọn sản phẩm: </u>
                    Sau khi xem xét kỹ thông tin chi tiết sản phẩm, nếu bạn đã ưng ý với sản phẩm đó thì hãy nhanh tay ấn nút “thêm vào giỏ”.
                    Nếu bạn có bất kì thắc mắc gì, hãy sử dụng cửa sổ chat bên góc phải để được nhân viên kinh doanh của chúng tôi hỗ trợ tư vấn thêm.
                    Lưu ý: Tư vấn viên của chúng tôi sẽ chỉ trực web từ 8h – 18h (thứ 2 đến thứ 7).
                    Ngoài giờ đó, các bạn xin vui lòng để lại thông tin và thắc mắc vào “biểu mẫu” bên góc phải. Chúng tôi sẽ cố gắng liên hệ và giải quyết thắc mắc của bạn một cách sớm nhất.
                </p>
                <p class="pl-5 pt-5 text-gray-500">
                    &#8226  <u>Mua Hàng: </u>
                    Khi bạn đã đặt hàng trên website thành công, nhân viên kinh doanh của chúng tôi sẽ liên hệ với bạn trong vòng 30 phút để xác nhận đơn hàng.
                    Chúng tôi khuyến cáo các bạn nên điền đầy đủ các thông tin cá nhân để việc liên lạc được thực hiện một cách dễ dàng và nhanh chóng.
                </p>
                <div class="pl-5 pt-5 text-2xl text-gray-500 font-bold">
                    Các quyền lợi của khách hàng khi mua hàng tại Bách Diệp Trà
                </div>
                <p class="pl-5 pt-5 text-gray-500">
                    Để giúp khách hàng có một sự lựa chọn hoàn hảo, 
                    <span class="text-green-primary font-semibold">
                        <i>Bách Diệp Trà</i>
                    </span>
                    đem đến cho khách hàng rất nhiều quyền lợi như:
                    quyền được lựa chọn, quyền được mua đúng sản phẩm, quyền được đánh giá và quyền được từ chối.
                </p>
                <p class="pl-5 pt-5 text-gray-500">
                    1. <u>Quyền được lựa chọn: </u>
                    Với hơn 2000 sản phẩm và nhiều dịch vụ đi kèm, khách hàng sẽ có rất nhiều lựa chọn về sản phẩm cũng như dịch vụ như ý tại 
                    <span class=" text-green-primary hover:text-green-primary_1">
                        <a href="/home">
                            https://bachdieptra.com/
                        </a>
                    </span>
                </p>
                <p class="pl-5 pt-5 text-gray-500">
                    2. <u>Quyền được mua đúng sản phẩm: </u>
                    Tất cả sản phẩm của 
                    <span class=" text-green-primary hover:text-green-primary_1">
                        <a href="/home">
                            https://bachdieptra.com/
                        </a>
                    </span>
                    là sản phẩm chất lượng cao, mẫu mã mới, tương thích tốt với nhu cầu sử dụng tại thị trường Việt Nam.
                    Sản phẩm được nhập khẩu từ rất nhiều nhà cung cấp uy tín trên toàn thế giới, có đầy đủ giấy tờ chứng minh nguồn gốc xuất xứ, tem chống hàng giả,
                    chứng từ và các giấy tờ liên quan khác.
                    
                </p>
                <p class="pl-5 pt-5 text-gray-500">
                    3. <u>Quyền được đánh giá: </u>
                    Mọi khách hàng đều có quyền được đánh giá và đưa ý kiến về sản phẩm mình mua tại 
                    <span class=" text-green-primary hover:text-green-primary_1">
                        <a href="/home">
                            https://bachdieptra.com/
                        </a>
                    </span>
                    .Tất cả phản hồi, dù là tích cực hay trái chiều cũng sẽ được bộ phận chăm sóc khách hàng của chúng tôi ghi nhận và công khai để nâng cao chất lượng dịch vụ,
                    nhằm đem đến cho khách hàng một sự hài lòng tuyệt đối.
                    
                </p>
                <p class="pl-5 pt-5 pb-20 text-gray-500">
                    4. <u>Quyền được từ chối: </u>
                    Những sản phẩm không đúng chủng loại, không mới 100%, có dấu hiệu lỗi hoặc trục trặc, khách hàng có quyền từ chối nhận hàng.
                    Mọi thắc mắc và phản hồi xin gửi đến email:
                     <span>
                        <a href = "mailto: bachdieptra@gmail.com" class="text-green-primary hover:text-green-primary_1">
                            bachdieptra@gmail.com
                        </a>
                    </span>
                    , chúng tôi sẽ tiến hành xem xét và giải quyết khúc mắc của quý khách một cách sớm nhất.
                </p>
            </div>
        </div>
    </div>
@endsection