@extends('frontend.content.adminProcedure')
@section('adminProcedureContent')
<div class="h-screen" style="background-image: url('{{asset('images/front-end/bg-content.png')}}'); background-repeat: no-repeat; background-size: cover;">
    <div class="w-full px-12 py-4 h-10 hidden lg:flex items-center justify-start">
        <a href="/home" class="hover:text-red-primary home-link">
            Trang chủ 
        </a> <span class="text-green-primary pl-2"> >> <a href="{{ route('clientProcedure.index') }}" class="hover:text-red-primary home-link">Thủ tục hành chính</a></span>
    </div>
    <div class="mx-6 pb-10 flex-col border-b border-gray-300 mb-10">
        <form action="{{ route('clientProcedure.search') }}" method="POST" class="w-3/4 px-6 flex justify-around items-center pt-5">
            @csrf 
            @method('POST')
            <input type="text" id="search" name="search"
            class="w-full transition border-2 border-gray-300 focus:outline-none focus:border-red-primary rounded appearance-none leading-normal p-2 bg-gray-100"
            placeholder="Nhập từ khóa tìm kiếm" value="{{ $keyword }}" required>
            <button
                class="w-1/6 py-2 px-5 ml-5 items-center justify-center rounded-md bg-red-500 border-2 border-red-500 text-white hover:bg-white hover:text-red-primary"
                type="submit">
                <p><i class="fas fa-search"></i> Tìm kiếm</p>
            </button>
        </form>
    </div>
    @if ($procedures != NULL)
        <div class="flex flex-col px-6 pb-20">
            <div class="px-6 text-2xl font-medium">
                Danh sách thủ tục hành chính
            </div>
            <div class="px-6 pt-10">
                <table class=" w-full px-6 table-auto shadow-2xl">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">Mã số</th>
                            <th class="py-3 px-6 text-center">Tên</th>
                            <th class="py-3 px-6 text-center">Cơ quan ban hành</th>
                            <th class="py-3 px-6 text-center">Cơ quan thực hiện</th>
                            <th class="py-3 px-6 text-center">Lĩnh vực</th>
                        </tr>
                    </thead>
                    @foreach($procedures as $procedure)
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 ">
                            <td class="py-3 px-2 text-center text-base bg-white">
                                <span class="font-medium">
                                    <a href="{{ route('clientProcedure.detail',['id'=>$procedure->id]) }}" class="text-red-primary hover:underline">{{ $procedure->id_procedure }}</a>
                                </span>
                            </td>
                            <td class="py-3 px-2 text-justify text-base bg-white">
                                <div class="flex items-center">
                                    <span class="font-medium">{{ $procedure->title }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-justify text-base bg-white">
                                <span class="text-black font-medium">{{ $procedure->agency_issued }}</span>
                            </td>
                            <td class="py-3 px-6 text-justify text-base bg-white">
                                <span class="font-medium">{{ $procedure->implementing_agency }}</span>
                            </td>
            
                            <td class="py-3 px-6 text-justify text-base bg-white">
                                <span class="font-medium">{{ $procedure->petition_tag->name }}</span>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    @else
    <div class="flex flex-col px-6 pb-20">
        <div class="px-6 text-2xl font-medium">
            Tìm thấy 0 kết quả cho từ khóa "{{ $keyword }}".
        </div>
    </div>
    @endif
    
</div>

@endsection