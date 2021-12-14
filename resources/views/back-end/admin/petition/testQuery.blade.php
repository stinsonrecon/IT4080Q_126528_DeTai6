<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class=" text-left font-bold">
                        <th class="py-3 px-6 text-center">Đối tượng</th>
                        <th class="py-3 px-6 text-center">Tên người gửi</th>
                        <th class="py-3 px-6 text-center">Địa chỉ</th>
                        <th class="py-3 px-6 text-center">Chủ đề kiến nghị</th>
                        <th class="py-3 px-6 text-center">Tình trạng</th>
                        <th class="py-3 px-6 text-center">Thời gian tạo</th>
                        <th class="py-3 px-6 text-center">Thời gian cập nhật</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($petitions as $petition)
                        <tr>
                            <td class="border px-6 py-4">{{ $petition->applicant->full_name }}</td>
                            <td class="border px-6 py-4">{{ $petition->applicant->ssn }}</td>
                            <td class="border px-6 py-4">{{ $petition->applicant->city->name }} / {{ $petition->applicant->district->name }} / {{ $petition->applicant->ward->name }}</td>
                            <td class="border px-6 py-4">{{ $petition->applicant->phone_number }}</td>
                            <td class="border px-6 py-4">{{ $petition->status }}</td>
                            <td class="border px-6 py-4">{{ $petition->created_at }}</td>
                            <td class="border px-6 py-4">{{ $petition->updated_at }}</td>
                            <td class="border px-6 py-4">Do something</td>
                        </tr>
                    @endforeach --}}
                    
                        {{-- <td class="border px-6 py-4">{{ $petition->applicant->full_name }}</td>
                        <td class="border px-6 py-4">{{ $petition->applicant->ssn }}</td>
                        <td class="border px-6 py-4">{{ $petition->applicant->city->name }} / {{ $petition->applicant->district->name }} / {{ $petition->applicant->ward->name }}</td>
                        <td class="border px-6 py-4">{{ $petition->applicant->phone_number }}</td> --}}
                        @foreach ($petitions as $petition)
                            <tr>
                                <td class="py-3 px-2 text-center">
                                    <span class="font-medium">{{ $petition->applicant->applicant_type->name }}</span>
                                </td>
                            
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <a href="" target="_blank" class="align-middle hover:text-gray-400 border-b-2 border-gray-800">
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
                        @endforeach
                        
                    
                </tbody>
            </table>
        </div>
    </body>
</html>
