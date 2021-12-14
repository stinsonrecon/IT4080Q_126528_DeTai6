@extends('back-end.app')
@section('title')
<title>
    Thêm thủ tục hành chính
</title>
@endsection

@section('back-end.contents')

@include('back-end.components.content-header',['name'=>'Thủ tục hành chính','key'=>' | Thêm'])
<!-- component -->
<div class="overflow-x-auto flex flex-col">
    
   <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('adminProcedure.store')}}" enctype="multipart/form-data" >
   @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" >
        Tiêu đề
        <span class="text-red-500 text-base">*</span>
      </label>
      <input name="title" value="{{old('title')}}"  class="@error('title') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Nhập tiêu đề">
    </div>

    <div class="mb-4">
        @error('title')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{$message}}</strong>
  
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        @enderror
    </div>
   

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          Cơ quan ban hành
          <span class="text-red-500 text-base">*</span>
        </label>
        <input name="agency_issued" value="{{old('agency_issued')}}"  class="@error('agency_issued') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Nhập cơ quan ban hành">
    </div>
  
    <div class="mb-4">
        @error('agency_issued')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{$message}}</strong>

                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        @enderror
    </div>
   
    

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" >
        Cơ quan thực hiện
        <span class="text-red-500 text-base">*</span>
      </label>
      <input value="{{old('implementing_agency')}}" name="implementing_agency" class="@error('implementing_agency') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Nhập cơ quan thực hiện">
     
    </div>
    
    <div class="mb-6">
        @error('implementing_agency')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{$message}}</strong>
  
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        @enderror
    </div>

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" >
       Nội dung
       <span class="text-red-500 text-base">*</span>
      </label>
     
      <textarea  id="editor1" class="@error('content') is-invalid @enderror w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="6" name="content">{{ old('content') }}</textarea>
      
    </div>

    <div class="mb-6">
        @error('content')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{$message}}</strong>
  
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        @enderror
    </div>
    
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
            Lĩnh vực
            <span class="text-red-500 text-base">*</span>
        </label>
        <div class="flex @error('id_tag') is-invalid @enderror">
            <select name="id_tag" id="id_tag" class="border border-gray-300 rounded outline-none bg-gray-100 py-1 px-2 w-full">
                <option value="">Chọn chủ lĩnh vực</option>
                @foreach($petition_tags as $petition_tag)
                    <option value="{{ $petition_tag->id_tag }}">{{ $petition_tag->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-6">
        @error('id_tag')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{$message}}</strong>
  
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        @enderror
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
       Thêm mới
      </button>
      
    </div>




  </form>
     
                
</div>
 @endsection
 @section('js')
<script src="{{asset('js/back-end/admin/adminProcedure/add.js')}}"></script>

@endsection