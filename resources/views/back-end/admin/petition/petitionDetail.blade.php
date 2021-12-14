@extends('back-end.app')
@section('title')
<title>
    Petition Details
</title>
@endsection

@section('back-end.contents')

@include('back-end.components.content-header',['name'=>'Chi tiết đơn kiến nghị','key'=>''])
<!-- component -->
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="text-3xl font-medium pb-5">Chủ đề phản ánh kiến nghị: {{ $petition->petition_tag->name }}</div>
    <div class="text-gray-600">{{ $petition->applicant->full_name }} - {{ $petition->created_at }}</div>
    <div class="text-gray-600">CMTND/CCCD: {{ $petition->applicant->ssn }}</div>
    <div class="text-gray-600">SĐT: {{ $petition->applicant->phone_number }}</div>
    <div class="text-gray-600">Email: {{ $petition->applicant->email }}</div>
    <div class="flex py-5 my-5 border-t border-b w-full border-gray-500">
        <img src="{{ asset('images/front-end/mess.svg') }}" alt="">
        <div class="pl-10">
            <div class="text-xl font-medium pb-3">Tiêu đề: {{ $petition->title }}</div>
            <div class="text-xl font-medium pb-3">Nội dung kiến nghị:</div>
            <div>{{ $petition->content }}</div>
            <div class="text-xl pt-3 flex">
                <div class="border border-blue-800 bg-blue-800 flex justify-around items-center rounded-lg px-7">
                    <span><i class="far fa-file-alt fa-2x text-white"></i></span>
                </div>
                <div class="w-full border border-blue-100 bg-blue-100  flex flex-col px-5 ml-2 py-3 rounded-lg">
                    <div class="text-black font-medium text-lg">File đính kèm</div>
                    <a href="{{ asset('storage/file').'/'.$petition->linkFile }}" target="_blank" class="hover:text-gray-400">{{ $petition->linkFile }}</a>
                </div>
            </div>
        </div>
    </div>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8" method="POST" action="{{route('petitionDetail.update',['id'=>$petition->id_petition])}}" enctype="multipart/form-data" >
        @csrf
        <div>
            <label class="block text-xl font-medium pb-3 mb-2" >
                Cơ quan chức năng trả lời:
            </label>
        
            <textarea  id="editor1" class="@error('reply') is-invalid @enderror w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="6" name="reply">
                {{ $petition->reply }}
            </textarea>
        </div>
        <div class="flex items-center justify-between pt-5">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Trả lời
            </button>
        </div>
    </form>
</div>
@endsection
@section('js')

<script src="{{asset('js/back-end/admin/petition/edit.js')}}"></script>
@endsection