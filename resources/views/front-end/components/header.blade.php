<div class="w-full flex-col justify-between h-40 min-h-full">
    <div class="h-4/6 flex items-center justify-between px-4">
        <div><img class="h-20" src="{{ asset('images/logo.png') }}"/></div>
        <div>
            <input class="h-12 outline-none w-80 px-2 border-2 border-red-500 rounded-l" type="text" placeholder="Tìm kiếm theo sản phẩm hoặc nhãn hàng..."/>
            <span class="-ml-1.5 p-3 px-4 rounded-r border-2 border-red-500 bg-red-500 w-10 h-10"><i class="text-white fas fa-search"></i></span>
        </div>
        <div><img class="h-12" src="{{ asset('images/hotline.png') }}"/></div>
        <div class="text-red-500">
            <i class="text-3xl fas fa-shopping-cart"></i> Giỏ hàng<span>(0)</span>
        </div>
        <div class="text-red-500 {{ (request()->is('contact')) ? 'cateActive' : '' }}">
            <i class="text-3xl fas fa-map-marked-alt"></i> 
            <a href="{{ route('contact') }}">Liên hệ</a>
        </div>
    </div>
    <div class="h-1/3 text-white flex items-center justify-between" style="background-color: #413B49;">
        <div class="myCate ml-6 w-1/5 bg-red-500 h-full flex items-center justify-between">
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
        <div id="home" class="{{ (request()->is('home')) ? 'cateActive' : '' }} font-extrabold md:font-normal">
            <a href="/home">
                Trang chủ
            </a>
        </div>
        <div> / </div>
        <div class="{{ (request()->is('aboutus')) ? 'cateActive' : '' }}">
            <a href="{{ route('aboutus') }}">
                Về chúng tôi
            </a>
        </div>
        <div> / </div>
        <div class="{{ (request()->is('payment_method')) ? 'cateActive' : '' }}">
            <a href="{{ route('paymentMethod') }}">
                Phương thức thanh toán
            </a>
        </div>
        <div> / </div>
        <div class="{{ (request()->is('warranty_policy')) ? 'cateActive' : '' }}">
            <a href="{{ route('warrantyPolicy') }}">
                Chính sách bảo hành
            </a>
        </div>
        <div> / </div>
        <div class="{{ (request()->is('shipping_policy')) ? 'cateActive' : '' }}">
            <a href="{{ route('shippingPolicy') }}">
                Chính sách vận chuyển
            </a>
        </div>
        <div> / </div>
        <div class="mr-6">Đăng nhập</div>
    </div>
</div>