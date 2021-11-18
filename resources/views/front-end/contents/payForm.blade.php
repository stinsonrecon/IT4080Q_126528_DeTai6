@extends('front-end.app')
@section('content')
    <div class="w-full px-6 pb-10 flex justify-around" style="background-color: white;">
        <div class="w-2/3 flex pt-10 mx-10">
            <div class="w-full">
                <div class=" font-semibold text-xl pb-10">THANH TOÁN</div>
                <div class="py-3 pl-10 bg-gray-100 text-2xl text-black border-l-4 border-red-600">
                    THÔNG TIN THANH TOÁN
                </div>
                <div class="flex-col  pt-5">
                    <label class=" text-green-400" for="name">Họ tên</label>
                    <input type="text" id="name" class="w-full border border-gray-300 rounded outline-none">
                </div>
                <div class="flex-col  pt-5">
                    <label class=" text-green-400" for="address">Địa chỉ <span class="text-red-500">*</span></label>
                    <input type="text" id="address" class="w-full border border-gray-300 rounded outline-none">
                </div>
                <div class="flex-col  pt-5">
                    <label class=" text-green-400" for="city">Tỉnh / Thành phố <span class="text-red-500">*</span></label>
                    <input type="text" id="city" class="w-full border border-gray-300 rounded outline-none">
                </div>
                <div class="flex pb-10 pt-5">
                    <div class="w-1/2 pr-6">
                        <label class=" text-green-400" for="phoneNum">Số điện thoại <span class="text-red-500">*</span></label>
                        <input type="text" id="phoneNum" class="w-full border border-gray-300 rounded outline-none">
                    </div>
                    <div class="w-1/2 pl-6">
                        <label class=" text-green-400" for="email">Địa chỉ email <span class="text-red-500">*</span></label>
                        <input type="text" id="email" class="w-full border border-gray-300 rounded outline-none">
                    </div>
                </div>

                <div class="py-3 pl-10 bg-gray-100 text-2xl text-black border-l-4 border-red-600">
                    THÔNG TIN BỔ SUNG
                </div>
                <div class="border-b-2 border-green-500 pt-5 text-2xl pb-2 text-green-500">
                    Ghi chú đơn hàng <span class=" text-base">(tuỳ chọn)</span>
                </div>
                <div>
                    <textarea name="" id="" class="w-full border border-gray-300 rounded mt-3 resize-none outline-none p-2" rows="2" placeholder="Ví dụ: thời gian, chỉ dẫn địa điểm giao hàng, thông tin xuất hóa đơn,..."></textarea>
                </div>


                <div class=" font-bold text-lg pt-5 pb-3 text-gray-100">Thông tin chuyển khoản</div>
                <div class="grid grid-cols-2 justify-around items-center w-full pb-10 px-10" >
                    @foreach ($banks as $bank)
                    <div class="px-10 pb-10 pt-3 border border-gray-400">
                        <div class="pb-10 text-gray-500 font-semibold"><i>{{ ($loop->index) + 1 }}.    {{ $bank->bankName }}</i></div>
                        <div class="text-gray-500 pb-4">Tên chủ TK: {{ $bank->userName }}</div>
                        <div class="text-gray-500 pb-4">Số TK: 
                            <span class="text-red-500 font-semibold">
                                <i>{{ $bank->bankNumber }}</i>
                            </span>
                        </div>
                        <div class="text-gray-500">{{ $bank->department }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-1/3 bg-white px-10 h-1/2 mt-24 mx-10 shadow-2xl">
            <div class="py-3 pl-10 mt-2 bg-gray-100 text-2xl text-black border-l-4 border-red-600">
                THÔNG TIN THANH TOÁN
            </div>
            <table class="mt-10 mb-5">
                <tr class="border-b border-gray-400">
                    <td class="w-1/4 px-1 text-center">Sản phẩm</td>
                    <td class="w-1/4 px-1 text-center">Số lượng</td>
                    <td class="w-1/4 px-1 text-center text-red-500">Tổng tiền</td>
                    <td class="w-1/4 px-1 text-center">Gỡ bỏ</td>
                </tr>
                <tr>
                    <td class="w-1/4 px-1 text-center"><img src="{{ asset('images/product.jpg') }}" alt="" class="w-2/3 h-auto"></td>
                    <td class="w-1/4 px-1 text-center">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1 ">
                            <button data-action="decrement" type="button" class=" bg-red-500 text-white hover:bg-red-600 h-full w-20 rounded-l cursor-pointer outline-none">
                                <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                            <input type="number" class="focus:outline-none text-center w-full bg-gray-50 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-black  outline-none" name="amount" value="1">
                            <button data-action="increment" type="button" class="bg-red-500 text-white hover:bg-red-600 h-full w-20 rounded-r cursor-pointer">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                      </div>
                    </td>
                    <td class="w-1/4 px-1 text-center">
                        3000000<u class="text-red-500 text-center">đ</u>
                    </td>
                    <td class="w-1/4 px-1 text-center">
                        <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này?')" href="" class="active text-red-500" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a> 
                    </td>
                </tr>
            </table>
            <div class="text-xl text-gray-500 border-b border-gray-400 mb-10">Máy photocopy Canon iR2004 </div>
            <div class="flex border-b border-gray-400 mb-5">
                <div class="w-1/2 text-2xl text-gray-500">Tổng tiền</div>
                <div class="w-1/2 text-right text-red-500">3000000<u>đ</u></div>
            </div>

            <div class="py-3 pl-10 mt-2 bg-gray-100 text-2xl text-black border-l-4 border-red-600">
                THÔNG TIN ĐẶT HÀNG
            </div>
            <div class="pl-10 pt-5 flex-col pb-10">
                <div class="flex w-full">
                    <div class="text-left pr-5">
                        <input type="radio" name="check">
                    </div>
                    <div class="">Chuyển khoản ngân hàng</div>
                </div>
                <div class="flex w-full">
                    <div class="text-left pr-5">
                        <input type="radio" name="check">
                    </div>
                    <div class="">Trả tiền khi nhận mặt hàng</div>
                </div>
            </div>


            <button class="py-3 px-5 mb-2 items-center justify-center rounded-md bg-red-500 text-white hover:bg-red-600" type="submit">
                <a href="">Đặt hàng</a>
            </button>
            <div class="text-red-500 pt-3 pb-20">(Tư vấn viên sẽ gọi điện xác nhận, không mua không sao)</div>
        </div>
        <script>
            function decrement(e) {
                const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
                );
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                value--;
                target.value = value;
            }

            function increment(e) {
                const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
                );
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                value++;
                target.value = value;
            }

            const decrementButtons = document.querySelectorAll(
                `button[data-action="decrement"]`
            );

            const incrementButtons = document.querySelectorAll(
                `button[data-action="increment"]`
            );

            decrementButtons.forEach(btn => {
                btn.addEventListener("click", decrement);
            });

            incrementButtons.forEach(btn => {
                btn.addEventListener("click", increment);
            });
        </script>
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