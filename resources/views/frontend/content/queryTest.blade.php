@extends('frontend.app')
@section('content')
    <label class="form-label"></label>
    <select name="city" id="city" class="form-control">
        <option value="">Select city</option>
        @foreach($cities as $city)
            <option value="{{ $city->matp }}">{{ $city->name }}</option>
        @endforeach
    </select>

    <label class="form-label"></label>
    <select name="district" id="district" class="form-control">
        <option value="">Select district</option>

    </select>

    <label class="form-label"></label>
    <select name="ward" id="ward" class="form-control">
        <option value="">Select ward</option>

    </select>

    <script type="text/javascript">
        $('#city').on('change', function() {
                get_district_by_city();
            });
                function get_district_by_city(){
                    var city_id = $('#city').val();
                    $.post('{{route('getDistricts')}}',{_token:'{{ csrf_token() }}', matp:city_id}, function(data){
                        $('#district').html(null);
                        $('#district').append($('<option value="">Select district</option>', {
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
                        $('#ward').append($('<option value="">Select ward</option>', {
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