@extends('frontend.app')
@section('content')
<div class="w-full px-12 py-4 h-10 hidden lg:flex items-center justify-start">
    <a href="/home" class="hover:text-red-primary home-link">
        Trang chủ 
    </a> <span class="text-green-primary pl-2"> >> Giới thiệu</span>
</div>
<div class="w-full px-6 pb-10 flex">
    {{-- content --}}
    <div class="w-full justify-around items-center pt-8 lg:px-7">
        <div class="font-medium text-3xl pb-5">Giới thiệu về Cổng Dịch vụ công Quốc gia</div>
        <img src="{{ asset('images/front-end/header.png') }}" alt="" class="w-full object-contain pb-5">
        <div class=" text-justify text-lg">
            Với quan điểm công khai, minh bạch, lấy người dân, doanh nghiệp làm trung tâm phục vụ, Cổng Dịch vụ công Quốc gia kết nối,
            cung cấp thông tin về thủ tục hành chính và dịch vụ công trực tuyến; hỗ trợ thực hiện, giám sát, đánh giá việc giải quyết thủ tục hành chính,
            dịch vụ công trực tuyến và tiếp nhận, xử lý phản ánh, kiến nghị của cá nhân, tổ chức trên toàn quốc.
        </div>
        <div class=" text-justify text-lg pt-3">
            Cá nhân, tổ chức dễ dàng truy cập Cổng Dịch vụ công Quốc gia tại địa chỉ duy nhất www.dichvucong.gov.vn theo nhu cầu người dùng từ máy tính,
            máy tính bảng hoặc điện thoại di động được kết nối internet để hưởng nhiều lợi ích từ Cổng Dịch vụ công Quốc gia, như:
        </div>
        <ul class="flex justify-center py-5">
            <li class="w-1/3 px-20 py-5">
                <img src="{{ asset('images/front-end/timkiem.svg') }}" alt="">
                <div class="pt-5">
                    Tra cứu thông tin, dịch vụ công các ngành, lĩnh vực, các địa phương tại Cơ sở dữ liệu quốc gia về thủ tục hành chính;
                    Gửi phản ánh kiến nghị liên quan đến việc giải quyết thủ tục hành chính, dịch vụ công;
                </div>
            </li>
            <li class="w-1/3 px-20 py-5">
                <img src="{{ asset('images/front-end/denghi.svg') }}" alt="">
                <div class="pt-5">
                    Đề nghị hỗ trợ thực hiện thủ tục hành chính, dịch vụ công qua Tổng đài điện thoại 18001096 hoặc trực tuyến tại mục Hỗ trợ;
                </div>
            </li>
            <li class="w-1/3 px-20 py-5">
                <img src="{{ asset('images/front-end/denghi.svg') }}" alt="">
                <div class="pt-5">
                    Theo dõi toàn bộ quá trình giải quyết thủ tục hành chính và xử lý phản ánh kiến nghị của mình bằng cách cung cấp mã hồ sơ,
                    kể cả mã hồ sơ thủ tục hành chính không thực hiện qua Cổng Dịch vụ công Quốc gia, Cổng Dịch vụ công của Bộ, ngành, địa phương;
                </div>
            </li>
        </ul>
        <ul class="flex justify-center">
            <li class="w-1/3 px-20 py-5">
                <img src="{{ asset('images/front-end/truyvan.svg') }}" alt="">
                <div class="pt-5">
                    Được hỗ trợ truy vấn thông tin của cá nhân, tổ chức lưu trữ tại các Cơ sở dữ liệu,
                    Hệ thống thông tin đã tích hợp với Cổng Dịch vụ công Quốc gia như đăng ký kinh doanh, thuế, bảo hiểm,…;
                </div>
            </li>
            <li class="w-1/3 px-20 py-5">
                <img src="{{ asset('images/front-end/thuchien.svg') }}" alt="">
                <div class="pt-5">
                    Thực hiện thủ tục hành chính tại nhiều tỉnh, thành phố chỉ cần khai báo 1 lần trên Cổng Dịch vụ công Quốc gia;
                </div>
            </li>
            <li class="w-1/3 px-20 py-5">
                <img src="{{ asset('images/front-end/danhgia.svg') }}" alt="">
                <div class="pt-5">
                    Đánh giá sự hài lòng trong giải quyết thủ tục hành chính;
                </div>
            </li>
        </ul>
        <div class="border border-yellow-200 bg-yellow-200 py-10 px-44 text-center text-xl mt-10">
            Các Bộ, ngành, địa phương nỗ lực cùng với sự tham gia tích cực của người dân và doanh nghiệp trong vận hành Cổng Dịch
            vụ công Quốc gia là góp phần xây dựng Chính phủ liêm chính, hành động, phát triển, phục vụ Nhân Dân
            <div class="pt-3 text-red-primary hover:text-red-800">
                Hãy truy cập www.dichvucong.gov.vn !
            </div>
        </div>
    </div>
</div>
@endsection