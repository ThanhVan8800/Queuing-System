@extends('layouts.main')
@section('url')
<li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Báo cáo <span class=""> > </span>Lập báo cáo</a>
</li>
@endsection
@section('content')
<div class="card card-primary mt-3">
    
    <div class="card-body">
                    <div class="row">
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Chọn thời gian</label>
                                                        
                                        </div>
                                </div>
                            
                    </div>
                    <table class="table table-bordered ">
                    <thead>
                        <tr>
                        <th style="width: 90px; " class="id-dev" >Số thứ tự</th>
                        <th style="width: 99px; " class="id-dev1">Tên dịch vụ</th>
                        <th style="width: 138px;" class="id-dev">Thời gian cấp</th>
                        <th style="width: 171px" class="id-dev">Tình trạng </th>
                        <th style="width: 171px" class="id-dev">Nguồn cấp</th>
                        

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lstNum as $num )
                        <tr>
                            <td>{{ $num->stt}}</td>
                            <td>{{ $num->service }}</td>
                            <td>
                                {{ $num->updated_at}}
                            </td>
                            <td>
                                @if($num->status == 0)
                                    Đang chờ
                                @elseif ($num->status == 1)  
                                    Đã sử dụng  
                                @elseif ($num->status == 2)  
                                    Bỏ qua
                                @endif
                            </td>
                            <td>{{$num->device->device_name }}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                <button>Tải về</button>
    </div>
    
</div>
@endsection