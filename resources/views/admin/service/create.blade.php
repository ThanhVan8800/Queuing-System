@extends('layouts.main')

@section('content')
<form action="{{route('service.store')}}" method="post">
    <div class="card card-primary mt-3">
        <div class="card-body">
                        <div class="col-md-3">
                                <div class="form-group">
                                                <label style="color:#FF7506;">Thông tin dịch vụ</label>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Mã dịch vụ: <span style="color:#FF4747;">*</span> </label>
                                <input type="text" name="id_service" class="form-control" id="exampleInputEmail1" placeholder="Nhập mã thiết bị">
                            </div>
                            <div class="form-group col-md-6">
                                <label >Tên dịch vụ: <span style="color:#FF4747;">*</span> </label>
                                <input type="text" name="service_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên thiết bị">
                            </div>
                            <div class="form-group col-md-6">
                                <label >Mô tả: <span style="color:#FF4747;">*</span> </label><br />
                                <textarea name="description" id="" cols="88" rows="4"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                    
                                            <div class="form-group">
                                                <label> Trạng thái: <span style="color:#FF4747;">*</span></label>
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" value="1" type="radio" id="active" name="status" checked="">
                                                        <label for="active" class="custom-control-label">Hoạt động</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input class="custom-control-input" value="0" type="radio" id="no_active" name="status" >
                                                        <label for="no_active" class="custom-control-label">Không hoạt động</label>
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
                        </div>
                    
                        <div class="row">
                            
                        
                        </div>
                        <label for="" style="color: #7E7D88;"><span style="color:#FF4747;">*</span> Là trường thông tin bắt buộc</label>
                        
        </div>
        
    </div>
    <div class="row">

        <!-- <label for="" class="btn-cancel">Hủy bỏ</label> -->
        <a href="" ><label for="" class="btn-cancel">Hủy bỏ</label></a>
        <button class="btn-create">Thêm thiết bị</button>
        @csrf
    </div>
</form>
@endsection