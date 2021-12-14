@extends('back-end.app')
@section('title')
<title>
    Admin Procedures
</title>
@endsection

@section('back-end.contents')

@include('back-end.components.content-header',['name'=>'Thủ tục hành chính','key'=>''])
<!-- component -->
<div class="overflow-x-auto flex flex-col">
    <div class="flex flex-row-reverse">
        <div class="m-6">
            <a href="{{route('adminProcedure.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Thêm
            </a>
        </div>
    </div>

    <div class=" w-11/12  mx-auto mx-8 bg-green-700  table-auto">
        @if(session()->has('success'))

        <div class="bg-green-300 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><i class=" fas fa-check-circle fill-current h-6 w-6 text-green-700 mr-4"> </i></div>

                <div>

                    <p class="text-lg">{{ session()->get('success') }}</p>
                </div>
            </div>
        </div>
        @endif

    </div>

    <div>
        <div class=" w-11/12  mx-auto mx-8  table-auto">
            @if(!is_array($admin_procedures))
                {{ $admin_procedures->links() }}
            @endif
        </div>
    </div>
    <div>
        <table class=" w-11/12  mx-auto mx-8  table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-center">Mã số</th>
                    <th class="py-3 px-6 text-center">Tên</th>
                    <th class="py-3 px-6 text-center">Cơ quan ban hành</th>
                    <th class="py-3 px-6 text-center">Cơ quan thực hiện</th>
                    <th class="py-3 px-6 text-center">Lĩnh vực</th>
                    <th class="py-3 px-6 text-center">Thời gian tạo</th>
                    <th class="py-3 px-6 text-center">Thời gian cập nhật</th>
                    <th class="py-3 px-6 text-center">Hành động</th>
                </tr>
            </thead>
            @foreach($admin_procedures as $admin_procedure)
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-2 text-center">
                        <span class="font-medium">{{ $admin_procedure->id_procedure }}</span>
                    </td>
                    <td class="py-3 px-2 text-center">
                        <div class="flex items-center">
                            <span class="font-medium">{{ $admin_procedure->title }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="text-black font-medium text-sm">{{ $admin_procedure->agency_issued }}</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{ $admin_procedure->implementing_agency }}</span>
                    </td>

                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{ $admin_procedure->petition_tag->name }}</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{ $admin_procedure->created_at }}</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{ $admin_procedure->updated_at }}</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                           
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <a href="{{route('adminProcedure.edit',['id'=>$admin_procedure->id])}}">
                                <i class="fas fa-edit"></i>
                                </a>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <a class="" onclick="return myFunction();"   href="{{route('adminProcedure.delete',['id'=>$admin_procedure->id])}}" >
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>


</div>
@endsection
@section('js')
 
<script src="{{asset('js/back-end/admin/adminProcedure/index.js')}}"></script>
@endsection