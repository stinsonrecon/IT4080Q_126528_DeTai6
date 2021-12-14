@extends('frontend.content.adminProcedure')
@section('adminProcedureContent')
<div class="h-screen flex justify-around items-center" style="background-image: url('{{asset('images/front-end/bg-content.png')}}'); background-repeat: no-repeat; background-size: cover;">
    <form action="{{ route('clientProcedure.search') }}" method="POST" class="w-1/2 flex justify-around items-center">
        @csrf 
        @method('POST')
        <input type="text" id="search" name="search"
        class="w-full transition border-2 border-gray-300 focus:outline-none focus:border-red-primary rounded-l-xl appearance-none leading-normal p-4 bg-gray-100 focus:shadow-2xl text-xl"
        style="border-right: none;"
        placeholder="Nhập từ khóa tìm kiếm" required>
        <button
            class="w-1/12 py-5 px-2 items-center justify-center bg-red-500 border border-red-500 text-white hover:bg-red-600 rounded-r-xl"
            type="submit">
            <i class="fas fa-search text-xl"></i>
        </button>
    </form>
</div>
@endsection