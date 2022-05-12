@extends('layouts.main')
@section('url')
<li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Dashboard <span class=""> > </span>Thiết bị<span class=""> > </span>Chi tiết</a>
</li>
@endsection
@section('content')
<form action="{{route('service.update',['service' => $service])}}" method="post" enctype="multipart/form-data">
        @csrf @method('PATCH')
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
                                        <input type="text"value="{{$service->id_service}}" name="id_service">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label style="margin-right: 25px;" >Tên dịch vụ:  </label>
                                        <input type="text" value="{{$service->service_name}}" name="service_name">
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-6">
                                            <label style="margin-right: 25px;" >Mô tả:  </label>
                                            <textarea name="description" id="" cols="30" rows="10" style="width:500px;" value="{{$service->description}}">{{$service->description}}</textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                            
                                <div class="form-group col-md-6">
                                                <label style="color:#FF7506;">Quy tắc cấp số</label>
                                                <!-- checkbox -->
                                                <!-- checkbox -->
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
                                    <div class="form-group col-md-6">
                                                <label>Tình trạng: <span style="color:#FF4747;">*</span></label>
                                                <select class="form-control select2" name="status" style="width: 100%;">
                                                                <option selected="selected" value="1" >Hoạt động</option>
                                                                <option value="0" >Ngưng hoạt động</option>
                                                </select>
                                    </div>
                                    
                                    
                </div>
                                    <div class="row">
                                                <a href="{{route('service.index')}}" class="btn-cancel">Hủy bỏ </a>
                                                <input type="submit" class="btn-create" value="Cập nhật">
                                        
                                    </div>
        </div>
</form>

@endsection