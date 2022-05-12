@extends('layouts.main')

@section('content')
<form action="{{route('filter')}}" method="GET">
<div class="card card-primary mt-3"><br>
    <a href="{{route('device.create')}}">
        <label for="" class="ad-dev"><i class="fas fa-plus-circle" >Thêm thiết bị</i></label>
    </a>
    <div class="card-body">
                    <div class="row">
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Trạng thái hoạt động</label>
                                                        <select class="form-control select2" name="status" name="" id="" style="width: 100%;">
                                                            <option selected="selected">Tất cả</option>
                                                            @foreach ($lstDevice as $stt)
                                                            <option value="{{$stt->status}}">
                                                            <option value="{{$stt->status}}">
                                                                @if($stt->status == 3) 
                                                                    Hoạt động 
                                                                @elseif($stt->status == 2) Ngưng hoạt động
                                                                @endif</option>
                                                                
                                                            @endforeach
                                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-3">
                                    

                                    
                                        <div class="form-group">
                                            <label>Trạng thái kết nối</label>
                                                        <select class="form-control select2" name="status_connect" style="width: 100%;">
                                                            <option selected="selected">Tất cả</option>
                                                            @foreach ($lstDevice as $stt)
                                                            <option value="{{$stt->status_connect}}">@if($stt->status_connect == 2) 
                                                                     Đã kết nối 
                                                                @elseif($stt->status_connect == 1) Không kết nối 
                                                                @else KHông tìm thấy kết quả
                                                                @endif</option>
                                                                
                                                            @endforeach
                                                        </select>
                                        </div>
                                    
                                </div>
                                <div class="col-md-3 offset-md-1">
                                    
                                        <label for="">Từ khóa</label>
                                        <div class="input-group">
                                            <input type="text" name="keyword" id="keyword" class="form-control form-control-lg" style="height:36px;" placeholder="Type your keywords here">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn  btn-default" style="height:36px;">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                
                                </div>
                    </div>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 90px; " class="id-dev" >Mã thiết bị</th>
                        <th style="width: 99px; " class="id-dev1">Tên thiết bị</th>
                        <th style="width: 138px;" class="id-dev">Địa chỉ IP</th>
                        <th style="width: 171px" class="id-dev">Trạng thái hoạt động</th>
                        <th style="width: 145px;" class="id-dev">Trạng thái kết nối</th>
                        <th style="width: 268px;" class="id-dev">Dịch vụ sử dụng</th>
                        <th style="width:82px" class="id-dev"></th>
                        <th style="width:82px" class="id-dev"></th>

                        </tr>
                    </thead>
                    <tbody id="dev">
                        @foreach ($result as $key => $device)
                                    <tr>
                                        <td>{{$device->id_device}}</td>
                                        <td value="{{$device->device_name}}">{{$device->device_name}}</td>
                                        <td>
                                            {{$device->ip_address}}
                                        </td>
                                        <td value="{{$device->status}}">
                                        @if($device->status == 3) 
                                                                    Hoạt động 
                                        @elseif($device ->status == 2) Ngưng hoạt động
                                                                @endif
                                        </td>
                                        <td>
                                            @if($device->status_connect == 2)   
                                                Đã kết nối
                                            @elseif($device->status_connect == 1)
                                                Không Kết nối
                                                @else Không tìm thấy
                                            @endif
                                        </td>
                                        <td value="{{$device->service_use}}">
                                            <!-- {{Illuminate\Support\Str::of($device->service_use)->words(3)}} -->
                                            {{$device->service_use}}
                                            <!-- <span>View Blog</span> -->
                                        </td>
                                        
                                        <td>
                                            <a href="{{route('device.show',['device' => $device])}}">Chi tiết</a>
                                        </td>
                                        <td>
                                            <a href="{{route('device.edit',['device' => $device])}}" >Cập nhật</a>
                                        </td>
                                    </tr>
                        @endforeach
                    
                    </tbody>
                    </table>
    </div>
    
</div>
</form>
<div class="card-footer clearfix">
        {!!$lstDevice->links("pagination::bootstrap-4") !!}
</div>
@endsection
@section('footer')


@endsection
<!-- @if (Auth()->user()->isAdmin()) -->
<!-- @endif -->