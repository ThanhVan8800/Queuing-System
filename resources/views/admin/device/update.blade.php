@extends('layouts.main')

@section('content') 
<form action="{{route('device.update',['device' => $device])}}" method="post">
    @method('PATCH')
    @csrf
    <div class="card card-primary mt-3">
        <div class="card-body">
                        <div class="col-md-3">
                                <div class="form-group">
                                                <label style="color:#FF7506;">Thông tin thiết bị</label>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Mã thiết bị: <span style="color:#FF4747;">*</span> </label>
                                <input type="text" name="id_device" value="{{$device->id_device}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập mã thiết bị">
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Loại thiết bị: <span style="color:#FF4747;">*</span></label>
                                                
                                                <select class="form-control select2" name="type" style="width: 100%;">
                                                    <!-- <option selected="selected" >Chọn loại thiết bị</option> -->
                                                                    <option value="{{$device->type}}" >
                                                                                {{$device->type}}                                                                        
                                                                    </option>
                                                                @foreach ($lstDevice as $dev )
                                                                    <option value="{{$dev->type}}" >
                                                                        
                                                                                {{$dev->type}}
                                                                        
                                                                    </option>
                                                                @endforeach
                                                            
                                                </select>
                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Tên thiết bị: <span style="color:#FF4747;">*</span> </label>
                                <input type="text" name="device_name" value="{{$device->device_name}}" class="form-control"  placeholder="Nhập tên thiết bị">
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tên đăng nhập: <span style="color:#FF4747;">*</span></label>
                                                <input type="text" name="user_name" value="{{$device->user_name}}" class="form-control"  placeholder="Nhập tài khoản">
                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Địa chỉ IP: <span style="color:#FF4747;">*</span> </label>
                                <input type="text" name="ip_address" value="{{$device->ip_address}}" class="form-control"  placeholder="Nhập địa chỉ IP">
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mật khẩu: <span style="color:#FF4747;">*</span></label>
                                                <input type="text" name="password" value="{{$device->password}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập mật khẩu">    
                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label >Dịch vụ sử dụng: <span style="color:#FF4747;">*</span> </label>
                                <input type="text" name="service_use" value="{{$device->service_use}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập dịch vụ sử dụng">
                            </div>
                        
                        </div>
                        <label for="" style="color: #7E7D88;"><span style="color:#FF4747;">*</span> Là trường thông tin bắt buộc</label>
                        
        </div>
        
    </div>
    <div class="row">

        <!-- <label for="" class="btn-cancel">Hủy bỏ</label> -->
        <a href="" ><label for="" class="btn-cancel">Hủy bỏ</label></a>
        <button class="btn-create">Cập nhật</button>
    </div>
</form>



@endsection