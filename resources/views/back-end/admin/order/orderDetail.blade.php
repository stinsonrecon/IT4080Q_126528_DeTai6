@extends('back-end.app')
@section('title')
<title>
    Order Details
</title>
@endsection

@section('back-end.contents')

@include('back-end.components.content-header',['name'=>'Chi tiết đơn hàng','key'=>''])
<!-- component -->
<div class="overflow-x-auto flex flex-col">
    <div class="flex flex-row-reverse">
        <div class="m-6"><button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Thêm
            </button></div>

    </div>
    <div>
        <table class=" w-11/12  mx-auto mx-8  table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Tên sản phẩm</th>
                    <th class="py-3 px-6 text-center">Số lượng</th>
                    <th class="py-3 px-6 text-center">Đơn giá</th>
                    <th class="py-3 px-6 text-center">Thành tiền</th>
                </tr>
            </thead>
            <?php $total = 0 ?>
            @foreach($orderDetails as $orderDetail)
            <tbody class="text-gray-600 text-sm font-light">
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">
                            <span class="font-medium">{{$orderDetail->name}}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{$orderDetail->quantity}}</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{ number_format($orderDetail->price) }}</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="font-medium">{{ number_format(($orderDetail->price)*($orderDetail->quantity)) }}</span>
                        <?php
                        $total = $total + $orderDetail->quantity * $orderDetail->price;
                        ?>
                    </td>
                </tr>
            </tbody>
            @endforeach

            <tr class=" bg-gray-100 text-gray-600 leading-normal ">
                <td></td><td></td>
                <th class="py-3 px-6 text-center bg-gray-200 border-black border-r">Tổng tiền:</th>
                <td class="py-3 px-6 text-center bg-gray-200 text-red-500">
                    <span class="font-medium ">{{ number_format($total) }}</span>
                </td>
            </tr>
    </div>
    </table>
</div>


</div>
@endsection
@section('js')

<script src="{{asset('back-end/admin/slider/index/index.js')}}"></script>
@endsection