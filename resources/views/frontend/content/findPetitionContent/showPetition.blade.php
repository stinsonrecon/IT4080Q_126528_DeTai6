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
<div class="flex flex-col mx-6 pb-20">
    @if ($petitions != NULL)
        <div class="px-6 text-2xl font-medium pt-10">Tìm thấy {{ count($petitions) }} kết quả cho từ khóa "{{ $keyword }}"</div>
        @foreach ($petitions as $petition)
            <div class="px-6">
                <div class="flex py-5 my-5 border-b w-full border-gray-500">
                    <img src="{{ asset('images/front-end/denghi.svg') }}" alt="">
                    <div class="pl-10">
                        <div class="text-gray-600 flex">
                            <div>
                                {{ $petition->applicant->full_name }} - {{ $petition->created_at }}
                            </div>
                            <div class="pl-10">
                                @if ($petition->status == 0)
                                <span class="font-medium py-1 px-3 bg-red-200 rounded-full text-red-600"> Chưa xử lý </span>
                                @else ($petition->status == 1)
                                <span class="font-medium py-1 px-3 bg-green-200 rounded-full text-green-600"> Đã xử lý </span>
                                @endif
                            </div>
                        </div>
                        <div class="text-xl font-medium py-3 hover:text-red-primary">
                            <a href="{{ route('clientPetition.detail',['id' => $petition->id_petition]) }}">
                                {{ $petition->title }}
                            </a>
                        </div>
                        <div class="text-xl pb-3">Nội dung kiến nghị: {{ $petition->content }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="px-6 text-2xl font-medium pt-10">Tìm thấy 0 kết quả cho từ khóa "{{ $keyword }}"</div>
    @endif
    
</div>
@endsection