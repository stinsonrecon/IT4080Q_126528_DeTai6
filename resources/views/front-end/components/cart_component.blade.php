<div class="cart" data-url="{{ route('deleteCart') }}">
    <table class="mt-3 lg:mt-10 mb-5 update_cart_url" data-url="{{ route('updateCart') }}">
        <thead>
            <tr class="border-b border-gray-400">
                <td class="w-1/4 px-1 text-center">Sản phẩm</td>
                <td class="w-1/4 px-1 text-center">Số lượng</td>
                <td class="w-1/4 px-1 text-center">Tổng tiền</td>
                <td class="w-1/4 px-1 text-center">Chỉnh sửa</td>
            </tr>
        </thead>
        @php
            $total = 0;
        @endphp
        <tbody>
            @foreach ($carts as $id => $cart )
            
                @php
                    if($cart['pricePromo'] != NULL){
                        $total += $cart['pricePromo'] * $cart['quantity'];
                    }
                    else {
                        $total += $cart['priceRoot'] * $cart['quantity'];
                    }
                @endphp
                <tr>
                    <td class="w-1/4 px-1 text-center"><img src="{{ asset('storage/product').'/'.$cart['linkImg']}}" alt="" class="w-10 h-10 lg:w-2/3 lg:h-auto"></td>
                    <td class="w-1/4 px-1 text-center">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1 ">
                            <button data-action="decrement" type="button" class=" bg-green-primary text-white hover:bg-green-primary_1 h-full w-20 rounded-l cursor-pointer outline-none">
                                <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                            <input type="number" class="focus:outline-none text-center w-full bg-gray-50 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-black outline-none quantity" name="amount" min="1" value="{{ $cart['quantity'] }}">
                            <button data-action="increment" type="button" class="bg-green-primary text-white hover:bg-green-primary_1 h-full w-20 rounded-r cursor-pointer">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                        </div>
                    </td>
                    <td class="w-1/4 px-1 text-center">
                        @if ($cart['pricePromo'] != NULL)
                            {{ number_format($cart['pricePromo'] * $cart['quantity']) }}
                            <u class="text-green-primary text-center">VND</u>
                        @else
                            {{ number_format($cart['priceRoot'] * $cart['quantity']) }}
                            <u class="text-green-primary text-center">VND</u>
                        @endif
                        
                    </td>
                    <td class="w-1/4 px-1 text-center">
                        <a href="" data-id="{{ $id }}" class="active text-green-primary pr-5 cart_update" ui-toggle-class="">
                            <i class="fas fa-edit text-green-primary"></i>
                        </a> 
                        <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này?')" href="" data-id="{{ $id }}" class="active text-red-500 cart_delete" ui-toggle-class="">
                            <i class="fa fa-times text-danger text-red-500"></i>
                        </a>
                    </td>
                </tr>
                <tr class="text-xl text-gray-500 border-b border-gray-400 mb-10">
                    <td class="pt-5" colspan="4">{{ $cart['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="flex border-b border-gray-400 mb-5">
        <div class="w-1/2 text-2xl text-gray-500">Tổng tiền</div>
        <div class="w-1/2 text-right">{{ number_format($total) }} <u class="text-green-primary">VND</u></div>
    </div>
</div>

