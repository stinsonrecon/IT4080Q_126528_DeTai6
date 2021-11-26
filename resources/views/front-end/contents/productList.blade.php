@extends('front-end.app')
@section('content')
<div class="w-full px-6 pb-10 flex" style="background-color: #fafafa;">
    {{-- side menu & banner --}}
    <div class="hidden lg:block w-1/6 pt-8">
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
                <li class=" border border-gray-500 w-full p-3 hover:text-green-primary pl-5" style="border-top: none">
                    <a href="{{ route('news') }}">Tin tức khuyến mãi</a>
                </li>
            </ul>
        </div>
    </div>
    {{-- content --}}
    <div class="w-full justify-around items-center pt-8 lg:pl-7">
        <div class="flex-col lg:flex-row flex flex-wrap w-full">
            @foreach ($products as $product)
                <div class="text-center w-full lg:w-1/2 lg:px-20 pb-10">
                    @if( $product->promotion != NULL)
                        <div class="timer">
                            <span class="text-red-500 text-lg">Chỉ còn: </span>
                            <span id="hour" class="text-red-500 text-lg">00</span>
                            <span class="text-red-500 text-lg">h</span>
                            <span id="minute" class="text-red-500 text-lg">00</span>
                            <span class="text-red-500 text-lg">p</span>
                            <span id="second" class="text-red-500 text-lg">00</span>
                        </div>
                        <div>
                            <div class="absolute float-left">
                                <img class="w-20 h-20" src="{{ asset('images/sale.png') }}" alt="">
                            </div>
                            <div><img class="h-full w-full object-contain" src="{{ asset('storage/product').'/'.$product->linkImg}}">
                            </div>
                            <div class="mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">{{ $product->name }}</div>
                            <div class="font-semibold">
                                <del class="text-xs">
                                    {{ number_format($product->priceRoot) }} VND
                                </del>
                                <br>{{ number_format($product->pricePromo) }} VND
                            </div>
                            <div class="mt-2">
                                <button
                                    class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                                    <a href="/product_detail/{{ $product->id }}" class="font-bold text-base"><i class="fas fa-eye"></i> Xem thêm</a>
                                </button>
                                <button
                                    class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-4">
                                    <a href="#" data-url="{{ route('addToCart', ['id' => $product->id]) }}" class="add_to_cart"><i class="fas fa-shopping-cart text-lg"></i></a>
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="mt-7">
                            <div>
                                <img class="h-full w-full object-contain" src="{{ asset('storage/product').'/'.$product->linkImg}}">
                            </div>
                            <div class="mt-2 font-bold text-lg lg:text-xl text-green-primary font-lora">{{ $product->name }}</div>
                            <div class="font-semibold"><br>{{ number_format($product->priceRoot) }} VND</div>
                            <div class="mt-2">
                                <button
                                    class="text-center border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-5 py-1 mt-4">
                                    <a href="/product_detail/{{ $product->id }}" class="font-bold text-base"><i class="fas fa-eye"></i> Xem thêm</a>
                                </button>
                                <button
                                    class="btn border-2 rounded-lg border-green-primary bg-white text-green-primary hover:bg-green-primary hover:text-white px-3 py-1 mt-4">
                                    <a href="#" data-url="{{ route('addToCart', ['id' => $product->id]) }}" class="add_to_cart"><i class="fas fa-shopping-cart text-lg"></i></a>
                                </button>
                            </div>
                        </div>
                    @endif
                    </div>
                @endforeach
            </div>
        <div class="pt-20">
            {{ $products->links() }}
        </div>
    </div>
</div>
<script>
    function addToCart(event){
        event.preventDefault();
        let urlCart = $(this).data('url');
        $.ajax({
            type: "GET",
            url: urlCart,
            dataType: 'json',
            success: function(data){
                if(data.code === 200){
                    alert("Thêm sản phẩm thành công");
                    $('#cartQuantity').html("("+data.quantity+")");
                }
            },
            error: function(){

            }
        });
    }

    $(function(){
        $('.add_to_cart').on('click', addToCart);
    })
</script>
@endsection