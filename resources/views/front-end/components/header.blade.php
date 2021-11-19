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
    <div class="px-10 h-1/3 text-gray-50 flex items-center justify-between" style="background-color: #91cc00;">
        <div id="home" class="{{ (request()->is('/') || request()->is('home')) ? 'cateActive' : '' }} hover:text-green-primary_1 font-medium">
            <a href="/home">
                Trang chủ
            </a>
        </div>
        <div class=""> / </div>
        <div class="{{ (request()->is('warranty_policy')) ? 'cateActive' : '' }} hover:text-green-primary_1 font-medium">
            <a href="{{ route('warrantyPolicy') }}">
                Tin tức khuyến mãi
            </a>
        </div>
        <div class=""> / </div>
        <div class="{{ (request()->is('payment_method')) ? 'cateActive' : '' }} hover:text-green-primary_1 font-medium">
            <a href="{{ route('paymentMethod') }}">
                Phương thức thanh toán
            </a>
        </div>
        <div class=""> / </div>
        <div class="{{ (request()->is('shipping_policy')) ? 'cateActive' : '' }} hover:text-green-primary_1 font-medium">
            <a href="{{ route('shippingPolicy') }}">
                Chính sách vận chuyển
            </a>
        </div>
        <div class=""> / </div>
        <div class="{{ (request()->is('aboutus')) ? 'cateActive' : '' }} hover:text-green-primary_1 font-medium">
            <a href="{{ route('aboutus') }}">
                Về chúng tôi
            </a>
        </div>
    </div>
</div>