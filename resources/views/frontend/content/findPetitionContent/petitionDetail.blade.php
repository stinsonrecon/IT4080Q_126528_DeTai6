@extends('frontend.content.findPetition')
@section('findPetitionContent')
<div class="w-full px-12 py-4 h-10 hidden lg:flex items-center justify-start">
    <a href="/home" class="hover:text-red-primary home-link">
        Trang chủ 
    </a> <span class="pl-2"> >> <a href="{{ route('clientPetition.index') }}" class="hover:text-red-primary home-link">Tra cứu kết quả trả lời</a> <span class="pl-2"> >> Chi tiết phản ánh kiến nghị</span></span>
</div>
<div class="mx-6 pb-20 flex-col border-gray-300">
    <div class="px-6 text-3xl font-medium pt-10">
        Kiến nghị về việc: {{ $petition->title }}
    </div>
    <div class="px-6 text-gray-600 flex pt-5">
        <div>
            {{ $petition->applicant->full_name }} - {{ $petition->created_at }}
        </div>
    </div>
    <div  class="px-6">
        <div class="flex py-10 mt-5 border-b border-t w-full border-gray-200">
            <img src="{{ asset('images/front-end/mess.svg') }}" alt="">
            <div class="pl-10">
                <div class="text-xl pb-3">
                    <div class="text-2xl pb-3 font-medium">
                        Nội dung kiến nghị: 
                    </div>
                    <div class=" text-justify">
                        {{ $petition->content }}
                    </div>
                </div>
                @if (isset($petition->linkFile))
                    <div class="text-xl mb-3 flex">
                        <div class="border border-red-300 bg-red-500 flex justify-around items-center rounded-lg px-7">
                            <span><i class="far fa-file-alt fa-2x text-white"></i></span>
                        </div>
                        <div class="w-full border border-red-100 bg-red-100  flex flex-col px-5 ml-2 py-3 rounded-lg">
                            <div class="text-black font-medium text-lg">File đính kèm</div>
                            <a href="{{ asset('storage/file').'/'.$petition->linkFile }}" target="_blank" class="hover:text-red-primary">{{ $petition->linkFile }}</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        @if (isset($petition->reply))
            <div class="flex py-10 mb-5 border-b w-full border-gray-200">
                <img src="{{ asset('images/front-end/icon-answer.svg') }}" alt="">
                <div class="pl-10">
                    <div class="text-xl pb-3">
                        <div class="text-gray-600 text-base">
                            {{ $petition->updated_at }}
                        </div>
                        <div class="text-2xl pb-3 font-medium">
                            Cơ quan chức năng trả lời: 
                        </div>
                        <div class=" text-justify">
                            {!! $petition->reply !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    
</div>
@endsection