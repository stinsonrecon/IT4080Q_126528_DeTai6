@extends('frontend.app')
@section('content')
<div class="w-full px-12 py-4 h-10 hidden lg:flex items-center justify-start">
    <a href="/home" class="hover:text-red-primary home-link">
        Trang chủ 
    </a> <span class="text-green-primary pl-2"> >> Gửi PAKN</span>
</div>
<div class="flex px-12 pb-10 pt-5">
    <form id="customerForm" action="{{ route('petitionStore') }}" method="POST" class="w-full flex flex-col shadow-2xl" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div >
            <div class="border border-red-primary bg-red-primary text-white py-4 px-5 rounded text-lg text-justify">
                <i class="fas fa-exclamation-circle pr-3"></i>
                Vui lòng điền đúng thông tin cá nhân, mọi sai sót sẽ được xử lý theo quy định pháp luật!
            </div>
            <div class="pt-5 px-5 text-3xl font-semibold text-black">
                Tiếp nhận phản ánh kiến nghị
            </div>
            <div class="grid grid-cols-2 gap-y-5 text-xl px-5 pt-5">
                <div>Đối tượng PAKN <span class="text-red-primary">*</span></div>
                <div>
                    @foreach ($applicant_types as $applicant_type)
                        <label class="inline-flex items-center mr-4">
                            <input type="radio" class="form-radio text-red-primary
                            transition border-2 border-red-primary focus:outline-none focus:border-red-primary appearance-none" name="applicantType" id="type{{ $applicant_type->id_type }}" value="{{ $applicant_type->id_type }}" onclick="displaiyApplicantType()" required>
                            <span class="ml-2">{{ $applicant_type->name }}</span>
                        </label>
                    @endforeach
                </div>
                <div class="flex">
                    <div id="typeName">
                        Người dân
                    </div>
                    <span class="text-red-primary pl-2">*</span>
                </div>
                <div>
                    <input type="text" id="full_name" name="full_name" class="w-full transition border-2 border-transparent focus:outline-none focus:border-red-primary rounded appearance-none leading-normal py-1 px-2 bg-gray-100" placeholder="Nhập tên người dân" required>
                </div>
                <div id="ssn_label">
                    CMTND/CCCD <span class="text-red-primary">*</span>
                </div>
                <div>
                    <input class="w-full transition border-2 border-transparent focus:outline-none focus:border-red-primary rounded appearance-none leading-normal py-1 px-2 bg-gray-100" type="number" id="ssn" name="ssn" pattern="[0-9]" placeholder="Nhập CMTND/CCCD" inputmode="numeric" required />
                </div>
                <div>
                    Địa chỉ <span class="text-red-primary">*</span>
                </div>
                <div class="flex justify-between">
                    <label class="form-label"></label>
                    <select name="city" id="city" class="border border-gray-300 rounded outline-none bg-gray-100 py-1 px-2 w-1/3" required>
                        <option value="">Chọn thành phố</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->matp }}">{{ $city->name }}</option>
                        @endforeach
                    </select>

                    <label class="form-label"></label>
                    <select name="district" id="district" class="border border-gray-300 rounded outline-none bg-gray-100 py-1 px-2 w-1/3" required>
                        <option value="">Chọn quận/huyện</option>
                    </select>

                    <label class="form-label"></label>
                    <select name="ward" id="ward" class="border border-gray-300 rounded outline-none bg-gray-100 py-1 px-2 w-1/3">
                        <option value="">Chọn phường/xã</option>
                    </select>
                </div>
                <div class="">
                    &nbsp
                </div>
                <div>
                    <input type="text" id="option_address" name="option_address" class="w-full transition border-2 border-transparent focus:outline-none focus:border-red-primary rounded appearance-none leading-normal py-1 px-2 bg-gray-100" placeholder="Nhập số nhà, thôn xóm...">
                </div>
                <div>
                    Số điện thoại <span class="text-red-primary">*</span>
                </div>
                <div>
                    <input class="w-full transition border-2 border-transparent focus:outline-none focus:border-red-primary rounded appearance-none leading-normal py-1 px-2 bg-gray-100" type="number" id="phone_number" name="phone_number" pattern="[0-9]" placeholder="Nhập số điện thoại" inputmode="numeric" required />
                </div>
                <div>
                    Email
                </div>
                <div>
                    <input type="text" id="email" name="email" class="w-full transition border-2 border-transparent focus:outline-none focus:border-red-primary rounded appearance-none leading-normal py-1 px-2 bg-gray-100" placeholder="Nhập email">
                </div>
                <div>
                    PAKN về việc <span class="text-red-primary">*</span>
                </div>
                <div>
                    <select name="petitionTag" id="petitionTag" class="border border-gray-300 rounded outline-none bg-gray-100 py-1 px-2 w-full" required>
                        <option value="">Chọn chủ đề phản ánh kiến nghị</option>
                        @foreach($petition_tags as $petition_tag)
                            <option value="{{ $petition_tag->id_tag }}">{{ $petition_tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    Tiêu đề <span class="text-red-primary">*</span>
                </div>
                <div>
                    <input type="text" id="title" name="title" class="w-full transition border-2 border-transparent focus:outline-none focus:border-red-primary rounded appearance-none leading-normal py-1 px-2 bg-gray-100" placeholder="Nhập tiêu đề" required>
                </div>
                <div>
                    Nội dung <span class="text-red-primary">*</span>
                </div>
                <div>
                    <textarea name="content" id="content"
                            class="w-full border-gray-300 mt-3 resize-none outline-none p-2 h-auto 
                            transition border-2 border-transparent focus:outline-none focus:border-red-primary rounded appearance-none leading-normal bg-gray-100" rows="6"
                            placeholder="Nhập nội dung" required></textarea>
                </div>
                <div>
                    Tài liệu đính kèm
                </div>
                <div>
                    {{-- <input type="file" name="optionalFile[]" id="optionalFile"  multiple/> --}}
                    <input type="file" class="block w-full cursor-pointer bg-gray-100 border border-gray-300 text-black focus:outline-none focus:border-transparent rounded" name="optionalFile" id="optionalFile"  multiple>
                </div>
                <div>
                    &nbsp
                </div>
                <div>
                    &nbsp
                </div>
                <div>
                    &nbsp
                </div>
                <div>
                    <button
                        class="py-2 px-5 mb-2 items-center justify-center rounded-md bg-red-500 border-2 border-red-500 text-white hover:bg-white hover:text-red-primary"
                        type="submit">
                        <p>Gửi phản ánh</p>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <div class="w-1/3 ml-10 bg-white">
        <div class="border border-gray-300 rounded-md shadow-xl">
            <div class=" bg-gray-300 w-full text-center py-4 px-5 text-lg font-medium">
                Tra cứu thông tin PAKN
            </div>
            <div class="flex justify-around items-center py-5">
                <form id="mySearch" method="POST" action="">
                    @csrf
                    @method('POST')
                    <input class="search-mobile h-12 outline-none w-40 lg:w-80 px-2 border-2 border-red-primary rounded-l"
                        type="text" name="search" placeholder="Nhập mã số PAKN/ Tên người gửi" required/>
                    <a onclick="document.getElementById('mySearch').submit();"
                        class="-ml-1.5 p-3 px-4 rounded-r border-2 text-white border-red-primary bg-red-primary w-10 h-10 hover:bg-white hover:text-red-primary">
                        <i class="fas fa-search"></i>
                    </a>
                </form>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-md shadow-xl my-10">
            <div class="bg-gray-300 w-full text-center py-4 px-5 text-lg font-medium">
                Lưu ý
            </div>
            <div class="pt-5 pb-20 px-10">
                <div class="text-xl font-semibold">
                    1. Hệ thống tiếp nhận các phản ánh, kiến nghị về:
                </div>
                <ul class="text-lg text-justify">
                    <li>
                        &#8226; Hành vi chậm trễ, gây phiền hà hoặc không thực hiện, thực hiện không đúng quy định của cán bộ, công chức, viên chức trong giải quyết thủ tục hành chính;
                    </li>
                    <li>
                        &#8226; Những cơ chế, chính sách, thủ tục hành chính không phù hợp với thực tế, không đồng bộ, không thống nhất, không hợp pháp, trái với các điều ước quốc tế mà Việt Nam đã ký kết hoặc gia nhập;
                    </li>
                    <li>
                        &#8226; Những giải pháp, sáng kiến ban hành mới quy định về cơ chế, chính sách, thủ tục hành chính liên quan đến hoạt động sản xuất, kinh doanh và đời sống của người dân.
                    </li>
                    <li>
                        &#8226; Các trường hợp chậm trễ, không thực hiện, thực hiện không đúng Nghị quyết 68/NQ-CP và Quyết định 23/2021/QĐ-TTg
                    </li>
                </ul>
                <div class="text-xl font-semibold">
                    2. Hệ thống không tiếp nhận đơn thư khiếu nại, tố cáo và hướng dẫn giải đáp pháp luật.
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function displaiyApplicantType() {
        var r1 = document.getElementById("type1");
        var r2 = document.getElementById("type2");
        var r3 = document.getElementById("type3");
        var r4 = document.getElementById("type4");
        var typeName = document.getElementById('typeName');
        var inputTypeName = document.getElementById('full_name');
        var ssnLabel = document.getElementById('ssn_label');
        var inputSsn = document.getElementById('ssn');
        var optionAddress = document.getElementById('option_address');


        if (r1.checked == true) {
            typeName.innerHTML = "Người dân";
            inputTypeName.placeholder = "Nhập tên người dân";

            ssnLabel.classList.remove('invisible');
            inputSsn.classList.remove('invisible');
            
            optionAddress.classList.remove('invisible');
        }
        else if (r2.checked == true) {
            typeName.innerHTML = "Tổ chức";
            inputTypeName.placeholder = "Nhập tên tổ chức";

            ssnLabel.classList.add('invisible');
            inputSsn.classList.add('invisible');
            inputSsn.required = false;

            optionAddress.classList.remove('invisible');
        }
        else if (r3.checked == true) {
            typeName.innerHTML = "Doanh nghiệp";
            inputTypeName.placeholder = "Nhập tên doanh nghiệp";

            ssnLabel.classList.add('invisible');
            inputSsn.classList.add('invisible');
            inputSsn.required = false;

            optionAddress.classList.remove('invisible');
        }
        else if (r4.checked == true) {
            typeName.innerHTML = "Cơ quan nhà nước";
            inputTypeName.placeholder = "Nhập tên bộ/địa phương và đơn vị trực thuộc";

            ssnLabel.classList.add('invisible');
            inputSsn.classList.add('invisible');
            inputSsn.required = false;

            optionAddress.classList.add('invisible');
        }
    }
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
@endsection