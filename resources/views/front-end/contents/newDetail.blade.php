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
                    <a href="{{ route('news') }}">Tin tức khuyến mãi</a>
                </li>
            </ul>
        </div>
    </div>
    {{-- content --}}
    {!! $new->content !!}
    
</div>
@endsection