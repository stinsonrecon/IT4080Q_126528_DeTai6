<div class="w-full flex-col justify-between h-24 lg:h-40 min-h-full">
    <div class="h-full lg:h-4/6 flex items-center justify-between px-4">
        <div class="lg:hidden">
            <span id="mobile-menu-button"
                class="p-3 px-4 rounded border-2 text-white w-10 h-10 hover:bg-white">
                <i class="fas fa-list"></i>
            </span>
        </div>
        <div class="hidden lg:flex justify-around items-center mx-auto">
            <img class="h-20" src="{{ asset('images/front-end/logo_banner.png') }}">
        </div>
    </div>
    <div id="menu" class="sm:hidden hidden flex-col z-10 absolute bg-white w-full px-4 text-xl">
        <div id="home"
            class="p-3 border-b-2 font-medium {{ request()->is('/') || request()->is('home') ? 'cateActive' : '' }}">
            <a href="/home">
                Trang chủ
            </a>
        </div>
        <div
            class="p-3 border-b-2 font-medium {{ request()->is('aboutus') ? 'cateActive' : '' }}">
            <a href="{{ route('aboutUs') }}">
                Giới thiệu
            </a>
        </div>
        <div
            class="p-3 mb-2 border-b-2 font-medium {{ request()->is('petition_form') ? 'cateActive' : '' }}">
            <a href="{{ route('petitionForm') }}">
                Gửi PAKN
            </a>
        </div>
        <div
            class="p-3 border-b-2 font-medium {{ request()->is('find_petition') ? 'cateActive' : '' }}">
            <a href="{{ route('clientPetition.index') }}">
                Tra cứu kết quả trả lời
            </a>
        </div>
        <div
            class="p-3 border-b-2 font-medium {{ request()->is('admin_procedure') ? 'cateActive' : '' }}">
            <a href="{{ route('clientProcedure.index') }}">
                Tra cứu thủ tục hành chính
            </a>
        </div>
    </div>
    <div class="hidden px-20 h-1/3 text-black lg:flex items-center justify-center bg-gray-200">
        <div id="home"
            class="font-medium hover:bg-red-primary hover:text-white h-full flex justify-around items-center text-center px-10 {{ request()->is('/') || request()->is('home') ? 'cateActive' : '' }}">
            <a href="/home">
                Trang chủ
            </a>
        </div>
        <div class="font-medium hover:bg-red-primary hover:text-white h-full flex justify-around items-center text-center px-10 {{ request()->is('aboutus') ? 'cateActive' : '' }}">
            <a href="{{ route('aboutUs') }}">
                Giới thiệu
            </a>
        </div>
        <div class="font-medium hover:bg-red-primary hover:text-white h-full flex justify-around items-center text-center px-10 {{ request()->is('petition_form') ? 'cateActive' : '' }}">
            <a href="{{ route('petitionForm') }}">
                Gửi PAKN
            </a>
        </div>
        <div
            class="font-medium hover:bg-red-primary hover:text-white h-full flex justify-around items-center text-center px-10 {{ request()->is('find_petition') ? 'cateActive' : '' }}">
            <a href="{{ route('clientPetition.index') }}">
                Tra cứu kết quả trả lời
            </a>
        </div>
        <div
            class="font-medium hover:bg-red-primary hover:text-white h-full flex justify-around items-center text-center px-10 {{ request()->is('admin_procedure') ? 'cateActive' : '' }}">
            <a href="{{ route('clientProcedure.index') }}">
                Tra cứu thủ tục hành chính
            </a>
        </div>
    </div>
</div>
<button class="lg:hidden" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
    var btn = document.getElementById("mobile-menu-button");
    var menu = document.getElementById("menu");
    btn.onclick = function() {
        menu.classList.toggle("hidden");
    };

    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
        if (window.innerWidth < 1024) {
            scrollFunction();
        }
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
