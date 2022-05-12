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
                                    <label style="color:#FF7506;">Thông tin dịch vụ</label>
                                </div>
                        </div>
                        <div class="row">  
                        <div class="col-md-6">
                            <div class="form-group col-md-6">
                                <label style="margin-right: 25px;" >Mã thiết bị:  </label>
                                <text value="{{$service->id_service}}" >{{$service->id_service}} </text>
                            </div>
                            <div class="form-group col-md-6">
                                <label style="margin-right: 25px;" >Tên dịch vụ:  </label>
                                <text value="{{$service->service_name}}" >{{$service->service_name}}</text>
                            </div>
                            <div class="form-group col-md-6">
                                <label style="margin-right: 25px;" >Mô tả:  </label>
                                <text value="{{$service->description}}" >{{$service->description}}</text>
                            </div>
                            <div class="row">

                            
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        <th style="width: 90px; " class="id-dev" >Số thứ tự </th>
                                        
                                        <th style="width: 171px" class="id-dev">Trạng thái  </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lstService as  $serv)
                                                    <tr>
                                                        <td>{{$serv->id_service}}</td>
                                                        <td >
                                                            @if($serv->status == 1)
                                                                <span class="btn btn-success btn-xs"></span>Đang hoạt động
                                                            @else
                                                            <span class="btn btn-danger btn-xs"></span>Ngừng hoạt động
                                                            @endif
                                                        </td>
                                                    </tr>
                                        @endforeach                                   
                                    </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label style="color:#FF7506;">Quy tắc cấp số</label>
                                </div>
                                <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                            <label for="customCheckbox1" class="custom-control-label">Tăng tự động từ:</label>
                                            <span class="num">0001</span> đến <span class="num">9999</span>
                                        </div><br>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                                            <label for="customCheckbox2" class="custom-control-label">Prefix :</label>
                                            <span class="num">0001</span>
                                        </div><br>
                                        
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input " type="checkbox" id="customCheckbox4" checked>
                                            <label for="customCheckbox4" class="custom-control-label">Surfix :</label>
                                            <span class="num">0001</span>
                                        </div><br>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input " type="checkbox" id="customCheckbox5" checked>
                                            <label for="customCheckbox5" class="custom-control-label">Reset mỗi ngày</label>
                                        </div>                        
                                </div>   
                        </div>
                        <div class="col-md-3">
                            <button class="btn-create"><i class="fa-solid fa-pen">Cập nhật</i></button><br>
                            <a href="{{route('service.index')}}" class="btn">Quay lại</a>
                        </div>
        </div>
</div>

@endsection