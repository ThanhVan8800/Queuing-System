@extends('layouts.main')

@section('content')
<div class="card card-primary mt-3">
        <div class="card-body">
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label style="color:#FF7506;">Thông tin dịch vụ</label>
                                </div>
                        </div>
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
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label style="color:#FF7506;">Quy tắc cấp số</label>
                                </div>
                        </div>
        </div>
</div>

@endsection