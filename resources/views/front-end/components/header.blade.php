<div class="w-full flex-col justify-between h-40 min-h-full">
    <div class="h-4/6 flex items-center justify-between px-4">
        <div><img class="h-20" src="{{ asset('images/logo.png') }}"/></div>
        <div>
            <input class="h-12 outline-none w-80 px-2 border-2 border-green-primary rounded-l" type="text" placeholder="Tìm kiếm theo sản phẩm hoặc nhãn hàng..."/>
            <span class="-ml-1.5 p-3 px-4 rounded-r border-2 text-white border-green-primary bg-green-primary w-10 h-10 hover:bg-white hover:text-green-primary">
                <i class="fas fa-search"></i>
            </span>
        </div>
        <div><img class="h-12" src="{{ asset('images/hotline.png') }}"/></div>
        <div class="text-black">
            <i class="text-3xl fas fa-shopping-cart text-green-primary"></i> 
            <a href="{{ route('payment') }}" class="hover:text-green-primary_1">Giỏ hàng<span>(0)</span></a>
        </div>
        <div class="text-black {{ (request()->is('contact')) ? 'cateActive' : '' }}">
            <i class="text-3xl fas fa-map-marked-alt text-green-primary"></i> 
            <a href="{{ route('contact') }}" class="hover:text-green-primary_1">Liên hệ</a>
        </div>
    </div>
    <div class="h-1/3 text-gray-50 flex items-center justify-between" style="background-color: #91cc00;">
        <div class="myCate ml-6 w-1/5 bg-green-primary h-full flex items-center justify-between">
            <div class="ml-4"><i class="fas fa-bars"></i>   DANH MỤC SẢN PHẨM</div>
            <div id="cateProduct" class="cateProduct w-1/5 absolute">
                <div class="bg-white flex-col">
                    <div class="h-12 flex justify-between items-center" style="border: 1px solid #eaeaea; border-top: none;">
                        <div class="flex justify-between w-full px-4">
                            <div>
                                <i class="fas fa-leaf" style="color: #B2B2B2"></i>
                                <span class="ml-2 text-gray-700">Chè sen Thái Nguyên</span>
                            </div>
                            <div><i class="mr-2 fas fa-caret-right" style="color: #B2B2B2"></i></div>
                        </div>
                    </div>
                    <div class="h-12 flex justify-between items-center" style="border: 1px solid #eaeaea; border-top: none;">
                        <div class="flex justify-between w-full px-4">
                            <div>
                                <i class="fas fa-mug-hot" style="color: #B2B2B2"></i>
                                <span class="ml-2 text-gray-700">Chè sen Cao Bằng</span>
                            </div>
                            <div><i class="mr-2 fas fa-caret-right" style="color: #B2B2B2"></i></div>
                        </div>
                    </div>
                    <div class="h-12 flex justify-between items-center" style="border: 1px solid #eaeaea; border-top: none;">
                        <div class="flex justify-between w-full px-4">
                            <div>
                                <i class="fas fa-spa" style="color: #B2B2B2"></i>
                                <span class="ml-2 text-gray-700">Chè sen Hà Nội</span>
                            </div>
                            <div><i class="mr-2 fas fa-caret-right" style="color: #B2B2B2"></i></div>
                        </div>
                    </div>
                    <div class="h-12 flex justify-between items-center" style="border: 1px solid #eaeaea; border-top: none;">
                        <div class="flex justify-between w-full px-4">
                            <div>
                                <i class="fas fa-sun" style="color: #B2B2B2"></i>
                                <span class="ml-2 text-gray-700">Chè sen cốm</span>
                            </div>
                            <div><i class="mr-2 fas fa-caret-right" style="color: #B2B2B2"></i></div>
                        </div>
                    </div>
                    <div class="h-12 flex justify-between items-center" style="border: 1px solid #eaeaea; border-top: none;">
                        <div class="flex justify-between w-full px-4">
                            <div>
                                <i class="fas fa-leaf" style="color: #B2B2B2"></i>
                                <span class="ml-2 text-gray-700">Chè sen hoa nhài</span>
                            </div>
                            <div><i class="mr-2 fas fa-caret-right" style="color: #B2B2B2"></i></div>
                        </div>
                    </div>
                    <div class="h-12 flex justify-between items-center" style="border: 1px solid #eaeaea; border-top: none;">
                        <div class="flex justify-between w-full px-4">
                            <div>
                                <i class="fas fa-seedling" style="color: #B2B2B2"></i>
                                <span class="ml-2 text-gray-700">Chè sen hoa súng</span>
                            </div>
                            <div><i class="mr-2 fas fa-caret-right" style="color: #B2B2B2"></i></div>
                        </div>
                    </div>
                    <div class="h-12 flex justify-between items-center" style="border: 1px solid #eaeaea; border-top: none;">
                        <div class="flex justify-between w-full px-4">
                            <div>
                                <i class="fas fa-mug-hot" style="color: #B2B2B2"></i>
                                <span class="ml-2 text-gray-700">Chè sen nóng</span>
                            </div>
                            <div><i class="mr-2 fas fa-caret-right" style="color: #B2B2B2"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mr-4"><i class="fas fa-caret-down"></i></div>
        </div>
        <div id="home" class="{{ (request()->is('home')) ? 'cateActive' : '' }} hover:text-green-primary_1 font-medium">
            <a href="/home">
                Trang chủ
            </a>
        </div>
        <div class=""> / </div>
        <div class="{{ (request()->is('aboutus')) ? 'cateActive' : '' }} hover:text-green-primary_1 font-medium">
            <a href="{{ route('aboutus') }}">
                Về chúng tôi
            </a>
        </div>
        <div class=""> / </div>
        <div class="{{ (request()->is('payment_method')) ? 'cateActive' : '' }} hover:text-green-primary_1 font-medium">
            <a href="{{ route('paymentMethod') }}">
                Phương thức thanh toán
            </a>
        </div>
        <div class=""> / </div>
        <div class="{{ (request()->is('warranty_policy')) ? 'cateActive' : '' }} hover:text-green-primary_1 font-medium">
            <a href="{{ route('warrantyPolicy') }}">
                Chính sách bảo hành
            </a>
        </div>
        <div class=""> / </div>
        <div class="{{ (request()->is('shipping_policy')) ? 'cateActive' : '' }} pr-10 hover:text-green-primary_1 font-medium">
            <a href="{{ route('shippingPolicy') }}">
                Chính sách vận chuyển
            </a>
        </div>
    </div>
</div>