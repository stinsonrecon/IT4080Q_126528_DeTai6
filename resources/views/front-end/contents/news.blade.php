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
    <div class="flex-col w-4/6  justify-around items-center pt-8 pl-7">
        @foreach ($news as $new)
            <div class="flex px-10 pb-10">
                <div class="w-1/3 pr-10">
                    <img src="{{ asset('storage/new').'/'.$new->linkImg}}" alt="" class="h-full w-full object-contain">
                </div>
                <div class="pr-20">
                    <div class="text-justify text-xl font-bold font-lora">
                        <a href="/new/{{ $new->id }}">
                            {{ $new->title }}
                        </a>
                    </div>
                    <div class="text-justify text-sm text-gray-400">
                        @if($new->updated_at != NULL)
                            {{$new->updated_at}}
                        @else
                            {{$new->created_at}}
                        @endif
                    </div>
                    <div class="text-justify">
                        {{ $new->description }}
                    </div>
                </div>
            </div>
        @endforeach
        <div>
            {{ $news->links() }}
        </div>
    </div>
    {{-- side menu --}}
    <div class="w-1/6 flex-col justify-around items-center pt-8">
        <div class="border border-gray-300 py-3 px-3">
            <div class="font-semibold mb-5 pb-2 border-b border-gray-300">
                TIN MỚI
            </div>
            <ul>
                @foreach ($latest_news as $latest_new)
                <li class="flex pb-10">
                    <div class="w-1/3">
                        <img src="{{ asset('storage/new').'/'.$latest_new->linkImg}}" alt="" class="h-full w-full object-contain">
                    </div>
                    <div class="pl-5">
                        <div class="text-justify text-sm font-bold font-lora">
                            <a href="/new/{{ $latest_new->id }}">
                                {{ $latest_new->title }}
                            </a>
                        </div>
                        <div class="text-justify text-xs text-gray-400">
                            @if($new->updated_at != NULL)
                                 {{$latest_new->updated_at}}
                            @else
                                {{$latest_new->created_at}}
                            @endif
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="flex justify-around items-center">
                <a href="" class="text-center">Xem thêm</a>
            </div>
        </div>
    </div>
</div>
@endsection