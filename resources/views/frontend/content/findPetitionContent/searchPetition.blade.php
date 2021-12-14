@extends('frontend.content.findPetition')
@section('findPetitionContent')
    <div class="w-full px-12 py-4 h-10 hidden lg:flex items-center justify-start">
        <a href="/home" class="hover:text-red-primary home-link">
            Trang chủ 
        </a> <span class="text-green-primary pl-2"> >> <a href="{{ route('clientPetition.index') }}" class="hover:text-red-primary home-link">Tra cứu kết quả trả lời</a></span>
    </div>
    <div class="mx-6 pb-10 flex-col border-b border-gray-300 mb-10">
        <div class="px-6 text-3xl font-medium pt-10">
            Tra cứu kết quả trả lời
        </div>
            
        <form action="{{ route('clientPetition.search') }}" method="POST" class="w-3/4 px-6 flex justify-around items-center pt-5">
            @csrf 
            @method('POST')
            <input type="text" id="search" name="search"
            class="w-full transition border-2 border-gray-300 focus:outline-none focus:border-red-primary rounded appearance-none leading-normal p-2 bg-gray-100" placeholder="Nhập tên người gửi/số CMTND(CCCD)" required>
            <button
                class="w-1/6 py-2 px-5 ml-5 items-center justify-center rounded-md bg-red-500 border-2 border-red-500 text-white hover:bg-white hover:text-red-primary"
                type="submit">
                <p>Tìm kiếm</p>
            </button>
        </form>
    </div>
    <div class="mx-6 pb-10 flex-col border-b border-gray-300 mb-10">
        <div class="px-6 text-3xl font-medium">
            Kiến nghị mới trả lời
        </div>
        <ul class="px-6 pt-3">
            @foreach ($petitions as $petition)
                <li class="p-3 text-lg text-black">
                    <a href="{{ route('clientPetition.detail',['id' => $petition->id_petition]) }}" class=" hover:text-red-primary reply-petition"><i class="fab fa-wpforms pr-3 text-red-primary"></i> {{ $petition->title }}</a>
                </li>
            @endforeach
        </ul>
        <div class="flex justify-around items-center pt-3">
            <button
                class="py-2 px-5 items-center justify-center rounded-md bg-red-500 border-2 border-red-500 text-white hover:bg-white hover:text-red-primary">
                <a href="{{ route('client.allReplied') }}">Xem tất cả</a>
            </button>
        </div>
    </div>
@endsection