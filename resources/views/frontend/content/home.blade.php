@extends('frontend.app')
@section('content')
<div class="w-full flex-col py-12" style="background-image: url('{{asset('images/front-end/header.png')}}'); background-repeat: no-repeat; background-size: cover;">
    <div class="flex w-full justify-around items-center">
        <form action="{{ route('clientProcedure.search') }}" method="POST" class="w-2/3 px-6 flex justify-around items-center pt-5">
            @csrf 
            @method('POST')
            <input type="text" id="search" name="search"
            class="w-full transition border-2 border-gray-300 focus:outline-none focus:border-red-primary rounded-l-xl appearance-none leading-normal p-4 bg-gray-100 focus:shadow-2xl text-xl"
            style="border-right: none;"
            placeholder="Nhập từ khóa tìm kiếm" required>
            <button
                class="w-1/12 py-5 px-2 items-center justify-center bg-red-500 border border-red-500 text-white hover:bg-red-600 rounded-r-xl"
                type="submit">
                <i class="fas fa-search text-xl"></i>
            </button>
        </form>
    </div>
    <div class="flex justify-center w-full mt-5">
        <div class="border py-3 px-5 bg-red-primary text-white hover:bg-red-600 rounded-xl text-xl mx-10"><a href="{{ route('petitionForm') }}">Gửi đơn kiến nghị</a></div>
        <div class="border py-3 px-5 bg-red-primary text-white hover:bg-red-600 rounded-xl text-xl mx-10"><a href="{{ route('clientPetition.index') }}">Tra cứu kết quả trả lời</a></div>
        <div class="border py-3 px-5 bg-red-primary text-white hover:bg-red-600 rounded-xl text-xl mx-10"><a href="{{ route('clientProcedure.index') }}">Tra cứu thủ tục hành chính</a></div>
    </div>
</div>
<div class="flex justify-center px-20 py-20">
    <div class="px-10 w-1/3">
        <div class="text-center text-3xl text-yellow-700 font-medium border-b-4 border-yellow-700 pb-2 uppercase">Công dân</div>
        <ul class="flex-col">
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-baby pr-3 text-green-600"></i>Có con nhỏ</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-graduation-cap pr-3 text-green-600"></i>Học tập</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-suitcase pr-3 text-green-600"></i>Việc làm</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-suitcase pr-3 text-green-600"></i>Cư trú và giấy tờ tùy thân</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-house-user pr-3 text-green-600"></i>Hôn nhân và gia đình</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-laptop-house pr-3 text-green-600"></i>Điện lực, nhà ở, đất đai</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-medkit pr-3 text-green-600"></i>Sức khỏe và y tế</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-car-side pr-3 text-green-600"></i>Phương tiên và người lái</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-umbrella-beach pr-3 text-green-600"></i>Hưu trí</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-heartbeat pr-3 text-green-600"></i>Người thân qua đời</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-green-50 text-lg"><i class="fas fa-balance-scale pr-3 text-green-600"></i>Giải quyết khiếu kiện</li>
        </ul>
    </div>
    <div class="px-10 w-1/3">
        <div class="text-center text-3xl text-yellow-700 font-medium border-b-4 border-yellow-700 pb-2 uppercase">Doanh nghiệp</div>
        <ul class="flex-col">
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="fas fa-rocket pr-3 text-yellow-700"></i>Khởi sự kinh doanh</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="fas fa-hand-holding-usd pr-3 text-yellow-700"></i>Lao động và bảo hiểm xã hội</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="fas fa-coins pr-3 text-yellow-700"></i>Tài chính doanh nghiệp</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="far fa-building pr-3 text-yellow-700"></i>Điện lực, đất đai, xây dựng</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="fas fa-sign pr-3 text-yellow-700"></i>Thương mại, quảng cáo</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="far fa-lightbulb pr-3 text-yellow-700"></i>Sở hữu trí tuệ, đăng ký tài sản</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="fas fa-project-diagram pr-3 text-yellow-700"></i>Thành lập chi nhánh, văn phòng đại diện</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="fas fa-gavel pr-3 text-yellow-700"></i>Đấu thầu, mua sắm công</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="fas fa-recycle pr-3 text-yellow-700"></i>Tái cấu trúc doanh nghiệp</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="fas fa-balance-scale pr-3 text-yellow-700"></i>Giải quyết tranh chấp hợp đồng</li>
            <li class="border-gray-100 py-3 px-5 my-5 rounded-lg bg-gray-100 hover:bg-red-50 text-lg"><i class="fas fa-times-circle pr-3 text-yellow-700"></i>Tạm dừng, chấm dứt hoạt động</li>
        </ul>
    </div>
</div>

@endsection