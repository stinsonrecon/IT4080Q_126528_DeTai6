@extends('front-end.app')
@section('content')
    <div class="w-full px-6" style="background-color: #fafafa;">
        {{-- banner --}}
        <div class="flex justify-items-end">
            <div class="w-1/5"></div>
            <div class="w-4/5 p-4">
                <img src="{{ asset('images/banner.jpg') }}"/>
            </div>
        </div>
        {{-- advertisement --}}
        <div class="w-full bg-white h-32 flex justify-around items-center">
            <div class="flex justify-between items-center">
                <div class="mr-4">
                    <i class="text-3xl fas fa-truck-moving text-red-500"></i>
                </div>
                <div>Giao hàng nhanh chóng<br>Freeship nội thành</div>
            </div>
            <div class="flex justify-between items-center">
                <div class="mr-4">
                    <i class="text-3xl fas fa-shopping-cart text-green-500"></i>
                </div>
                <div>Thanh toán dễ dàng<br>Hỗ trợ chuyển khoản</div>
            </div>
            <div class="flex justify-between items-center">
                <div class="mr-4">
                    <i class="text-3xl fas fa-thumbs-up text-yellow-500"></i>
                </div>
                <div>Hàng chính hãng<br>Cam kết chính hãng 100%</div>
            </div>
            <div class="flex justify-between items-center">
                <div class="mr-4">
                    <i class="text-3xl fas fa-shield-alt" style="color: #339AF0"></i>
                </div>
                <div>Bảo hành siêu việt<br>Miễn phí trọn đời</div>
            </div>
        </div>
        {{-- hot-product --}}
        <div class="mt-8 bg-white">
            <div class="w-1/4 bg-red-500 h-12 text-white flex items-center justify-center font-bold">
                <div class="mr-2">
                    <i class="text-xl fas fa-fire"></i>
                </div>
                <div>SẢN PHẨM NỔI BẬT</div>
            </div>
        </div>
        <div class="mt-2 bg-white flex">
            <div class="w-3/4 flex flex-wrap justify-around" style="border: 1px solid #eaeaea;">
                <div class="text-center w-1/4">
                    <div><img class="w-48 m-auto" src="{{ asset('images/product.jpg') }}"></div>
                    <div class="mt-2 font-bold">Máy pha chè sen</div>
                    <div class="text-red-500 mt-2 text-xl font-extrabold">12.000.000đ</div>
                    <div class="mt-2">
                        <button class="btn"><i class="fas fa-eye"></i></button>
                        <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
                <div class="text-center w-1/4">
                    <div><img class="w-48 m-auto" src="{{ asset('images/product.jpg') }}"></div>
                    <div class="mt-2 font-bold">Máy pha chè sen</div>
                    <div class="text-red-500 mt-2 text-xl font-extrabold">12.000.000đ</div>
                    <div class="mt-2">
                        <button class="btn"><i class="fas fa-eye"></i></button>
                        <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
                <div class="text-center w-1/4">
                    <div><img class="w-48 m-auto" src="{{ asset('images/product.jpg') }}"></div>
                    <div class="mt-2 font-bold">Máy pha chè sen</div>
                    <div class="text-red-500 mt-2 text-xl font-extrabold">12.000.000đ</div>
                    <div class="mt-2">
                        <button class="btn"><i class="fas fa-eye"></i></button>
                        <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
                <div class="text-center w-1/4">
                    <div><img class="w-48 m-auto" src="{{ asset('images/product.jpg') }}"></div>
                    <div class="mt-2 font-bold">Máy pha chè sen</div>
                    <div class="text-red-500 mt-2 text-xl font-extrabold">12.000.000đ</div>
                    <div class="mt-2">
                        <button class="btn"><i class="fas fa-eye"></i></button>
                        <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>
            <div class="w-1/4 flex-col">
                <div class="h-12 flex justify-between items-center px-4" style="border: 1px solid #eaeaea; border-top: none;">
                    <div>
                        <span class="text-gray-700">Chè sen nóng</span>
                    </div>                    
                </div>
                <div class="h-12 flex justify-between items-center px-4" style="border: 1px solid #eaeaea; border-top: none;">
                    <div>
                        <span class="text-gray-700">Chè sen nóng</span>
                    </div>                    
                </div>
                <div class="h-12 flex justify-between items-center px-4" style="border: 1px solid #eaeaea; border-top: none;">
                    <div>
                        <span class="text-gray-700">Chè sen nóng</span>
                    </div>                    
                </div>
                <div class="h-12 flex justify-between items-center px-4" style="border: 1px solid #eaeaea; border-top: none;">
                    <div>
                        <span class="text-gray-700">Chè sen nóng</span>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
<script>
    setVisibleCategory();
</script>
@endsection