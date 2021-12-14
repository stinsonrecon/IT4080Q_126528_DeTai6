@extends('back-end.app')
@section('title')
<title>
    Petition
</title>
@endsection

@section('back-end.contents')

@include('back-end.components.content-header',['name'=>'Đơn kiến nghị','key'=>''])
<!-- component -->
<div class="overflow-x-auto flex flex-col">
    <div class="flex flex-row-reverse">
        <div class="m-6">
            <button class="show-modal bg-gray-300 border-2 border-gray-800 hover:bg-black hover:border-black hover:text-white text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer"
                    id="menu-btn">Bộ lọc <i class="fas fa-sort pl-2"></i>
            </button>
            
            <div class="modal h-screen w-full fixed left-0 top-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden">
                <div class="w-1/2 flex justify-center">
                    <div class="w-1/2">
                        <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
                            <section>
                                <div class="flex justify-between">
                                    <h3 class="font-bold text-3xl">Bộ lọc</h3>
                                    <button class="text-black close-modal">&cross;</button>
                                </div>
                            </section>
                    
                            <section class="mt-5">
                                <form action="{{ route('petition.sort') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="flex-col">
                                        <div class="text-lg font-semibold">Lọc theo địa chỉ</div>
                                        <div class="flex justify-between">
                                            <label class="form-label"></label>
                                            <select name="city" id="city" class="border border-gray-300 rounded outline-none bg-gray-100 py-1 px-2 w-1/3 mt-2">
                                                <option value="">Chọn thành phố</option>
                                                @foreach($cities as $city)
                                                    <option value="{{ $city->matp }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                        
                                            <label class="form-label"></label>
                                            <select name="district" id="district" class="border border-gray-300 rounded outline-none bg-gray-100 py-1 px-2 w-1/3 mt-2">
                                                <option value="">Chọn quận/huyện</option>
                                            </select>
                        
                                            <label class="form-label"></label>
                                            <select name="ward" id="ward" class="border border-gray-300 rounded outline-none bg-gray-100 py-1 px-2 w-1/3 mt-2">
                                                <option value="">Chọn phường/xã</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex-col pt-10">
                                        <div class="text-lg font-semibold">Lọc theo chủ đề kiến nghị</div>
                                        <select name="petitionTag" id="petitionTag" class="border border-gray-300 rounded outline-none bg-gray-100 py-1 px-2 w-full mt-2">
                                            <option value="">Chọn chủ đề phản ánh kiến nghị</option>
                                            @foreach($petitionTags as $petitionTag)
                                                <option value="{{ $petitionTag->id_tag }}">{{ $petitionTag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex justify-around items-center pt-5">
                                        <button
                                            class="bg-gray-300 border-2 border-gray-800 hover:bg-black hover:border-black hover:text-white text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer"
                                            type="submit">
                                            <p>Submit</p>
                                        </button>
                                    </div>
                                </form>
                            </section>
                        </main>   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const modal = document.querySelector('.modal');
        const showModal = document.querySelector('.show-modal');
        const closeModal = document.querySelectorAll('.close-modal');

        console.log(showModal);

        showModal.addEventListener('click', function (){
            modal.classList.remove('hidden')
        });
        
        closeModal.forEach(close => {
            close.addEventListener('click', function (){
                modal.classList.add('hidden');
                console.log("Run here in sign in page");
            });
        });

    </script>

    <script type="text/javascript">
        $('#city').on('change', function() {
                get_district_by_city();
            });
                function get_district_by_city(){
                    var city_id = $('#city').val();
                    $.post('{{route('getDistricts')}}',{_token:'{{ csrf_token() }}', matp:city_id}, function(data){
                        $('#district').html(null);
                        $('#district').append($('<option value="">Chọn quận/huyện</option>', {
                        }));
                        console.log(data);
                        for (var i = 0; i < data.length; i++) {
                            $('#district').append($('<option>', {
                                value: data[i].maqh,
                                text: data[i].name
                            }));
                        }
                });
            }
    </script>
    <script type="text/javascript">
        $('#district').on('change', function() {
                get_ward_by_district();
            });
                function get_ward_by_district(){
                    var district_id = $('#district').val();
                    $.post('{{route('getWards')}}',{_token:'{{ csrf_token() }}', maqh:district_id}, function(data){
                        $('#ward').html(null);
                        $('#ward').append($('<option value="">Chọn phường/xã</option>', {
                        }));
                        for (var i = 0; i < data.length; i++) {
                            $('#ward').append($('<option>', {
                                value: data[i].xaid,
                                text: data[i].name
                            }));
                        }
                });
            }
    </script>

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
            @if(!is_array($petitions))
                {{ $petitions->links() }}
            @endif
        </div>
    </div>
    <div>
        <table class=" w-11/12  mx-auto mx-8  table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-center">Đối tượng</th>
                    <th class="py-3 px-6 text-center">Tên người gửi</th>
                    <th class="py-3 px-6 text-center">Địa chỉ</th>
                    <th class="py-3 px-6 text-center">Chủ đề kiến nghị</th>
                    <th class="py-3 px-6 text-center">Tình trạng</th>
                    <th class="py-3 px-6 text-center">Thời gian tạo</th>
                    <th class="py-3 px-6 text-center">Thời gian cập nhật</th>
                </tr>
            </thead>
            @foreach($petitions as $petition)
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-2 text-center">
                        <span class="font-medium">{{ $petition->applicant->applicant_type->name }}</span>
                    </td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">
                            <a href="{{route('petitionDetail.index',['id' => $petition->id_petition])}}" target="_blank" class="align-middle hover:text-gray-400 border-b-2 border-gray-800">
                                <span class="font-medium">{{$petition->applicant->full_name}}</span>
                            </a>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="text-black font-medium text-sm">{{ $petition->applicant->city->name }} / {{ $petition->applicant->district->name }} / {{ $petition->applicant->ward->name }}</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{ $petition->petition_tag->name }}</span>
                    </td>

                    <td class="py-3 px-6 text-center">
                        @if ($petition->status == 0)
                        <span class="font-medium py-1 px-3 bg-red-200 rounded-full text-red-600"> Chưa xử lý </span>
                        @else ($petition->status == 1)
                        <span class="font-medium py-1 px-3 bg-green-200 rounded-full text-green-600"> Đã xử lý </span>
                        @endif

                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{ $petition->created_at }}</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{ $petition->updated_at }}</span>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>


</div>
@endsection