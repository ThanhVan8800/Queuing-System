@extends('layouts.main') 
@section('url')
<li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Dashboard <span class=""> > </span>Thiết bị<span class=""> > </span>Chi tiết</a>
</li>
@endsection
@section('content')  
<div class="card card-primary mt-3">
        <div class="card-body">
                        <div class="col-md-3">
                                <div class="form-group">
                                                <label style="color:#FF7506;">Thông tin thiết bị</label>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label style="margin-right: 25px;" >Mã thiết bị:  </label>
                                <text value="{{$device->device_name}}" >{{$device->device_name}} </text>
                            </div>
                            <div class="form-group col-md-6">
                                <label style="margin-right: 25px;" >Loại thiết bị:  </label>
                                <text value="{{$device->type}}" >{{$device->type}} </text>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label style="margin-right: 25px;" >Tên thiết bị:  </label>
                                <text value="{{$device->device_name}}" >{{$device->device_name}} </text>
                            </div>
                            <div class="form-group col-md-6">
                                <label style="margin-right: 25px;" >Tên đăng nhập:  </label>
                                <text value="{{$device->type}}" >{{$device->type}} </text>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label style="margin-right: 25px;">Địa chỉ IP:  </label>
                                <text value="{{$device->device_name}}" >{{$device->ip_address}} </text>
                            </div>
                            <div class="form-group col-md-6">
                                <label style="margin-right: 25px;" >Mật khẩu:  </label>
                                <text value="{{$device->type}}" >{{$device->password}} </text>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                                <label >Dịch vụ sử dụng:  </label><br/>
                                <text value="{{$device->service_use}}" >{{$device->service_use}} </text>
                            </div>
                        </div>
        </div>
</div>
        <a href="{{route('device.edit',['device' => $device])}}" class="btn btn-primary">Cập nhật thiết bị</a>


@endsection