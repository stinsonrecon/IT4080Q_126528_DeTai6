@extends('frontend.content.adminProcedure')
@section('adminProcedureContent')
<div class="h-screen" style="background-image: url('{{asset('images/front-end/bg-content.png')}}'); background-repeat: no-repeat; background-size: cover;">
    <div class="w-full px-12 py-4 h-10 hidden lg:flex items-center justify-start">
        <a href="/home" class="hover:text-red-primary home-link">
            Trang chủ 
        </a> <span class="pl-2"> >> <a href="{{ route('clientProcedure.index') }}" class="hover:text-red-primary home-link">Thủ tục hành chính</a> <span class="pl-2"> >> Chi tiết thủ tục</span></span>
    </div>
    <div class="flex flex-col px-6 pb-20 pt-10">
        <div class="px-6 text-3xl font-medium border-b pb-10 border-gray-300">
            {{ $procedure->title }}
        </div>
        <div class="px-6 border-b pb-10 border-gray-300 pt-10">
            <div class="text-2xl font-medium pb-3">
                Trình tự thực hiện
            </div>
            <div class="text-justify text-lg font-normal">
                {!! $procedure->content !!}
            </div>
        </div>
        <div class="px-6 border-b pb-10 border-gray-300 pt-10">
            <div class="text-2xl font-medium pb-3">
                Cơ quan ban hành
            </div>
            <div class="text-justify text-lg font-normal">
                {{ $procedure->agency_issued }}
            </div>
        </div>
        <div class="px-6 border-b pb-10 border-gray-300 pt-10">
            <div class="text-2xl font-medium pb-3">
                Cơ quan thực hiện
            </div>
            <div class="text-justify text-lg font-normal">
                {{ $procedure->implementing_agency }}
            </div>
        </div>
    </div>
</div>
@endsection