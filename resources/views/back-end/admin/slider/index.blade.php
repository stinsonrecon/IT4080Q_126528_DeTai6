@extends('back-end.app')
@section('title')
<title>
    Slider
</title>
@endsection
@section('css')

@endsection
@section('js')
<script src="{{asset('back-end/vendors/SweetAlert2/sweetalert2@11.js')}}"></script>
<script src="{{asset('back-end/admin/slider/index.js')}}"></script>
@endsection
@section('content')

<div class="content-wrapper">

    @include('back-end.components.content-header',['name'=>'Slider','key'=>'List'])



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="" class="btn btn-success float-right m-2">Add</a>
                </div>
                <div class="col-md-12">
                  
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Slider</th>
                                            <th>Description</th>
                                            <th>Hình ảnh</th>
                                            <th>ACTION</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <!-- <tr> -->
                                            <!-- <th>#</th>
                                            <th>Config_key</th>
                                            <th>Config_value</th>
                                            <th>ACTION</th> -->
                                            
                                        <!-- </tr> -->
                                    </tfoot>
                                    <tbody>
                                   
                                        <tr>
                                            <td>1</td>
                                            <td>slider1</td>
                                            <td>mô tả</td>
                                            <td>
                                                <img class="img_slider "src="" alt="">
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-info btn-circle btn-sm ">
                                                    <i class="fas fa-info-circle"></i>
                                                 </a>
                                   
                                                <a data-url="" class="btn btn-danger btn-circle btn-sm action_delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            
                                        </tr>
                                       
                                    </tbody>
                </table>
                   
                </div>

            </div>

        </div>
    </div>

</div>

@endsection