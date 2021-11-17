@extends('front-end.app')
@section('content')
{{-- <div class="grid grid-cols-2 justify-around items-center w-full pb-10 px-10" >
    @foreach ($banks as $bank)
    <div class="px-10 pb-10 pt-3 border border-gray-400">
        <div class="pb-10 text-gray-500">{{ ($loop->index) + 1 }}    {{ $bank->bankName }}</div>
        <div class="text-gray-500 pb-4">Tên chủ TK: {{ $bank->userName }}</div>
        <div class="text-gray-500 pb-4">Số TK: 
            <span class="text-red-500 font-semibold">
                <i>{{ $bank->bankNumber }}</i>
            </span>
        </div>
        <div class="text-gray-500">{{ $bank->department }}</div>
    </div>
    @endforeach
</div> --}}
{{-- <div id="banner">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <img src="{{ asset('images/chesen-banner-1.jpg') }}" alt="" class="h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/chesen-banner-2.png') }}" alt="" class="h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/chesen-banner-3.png') }}" alt="" class="h-full w-full object-contain">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/chesen-banner-4.png') }}" alt="" class="h-full w-full object-contain">
            </li>
      </ul>
    </div>
</div> --}}

@endsection