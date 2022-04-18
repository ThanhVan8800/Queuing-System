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
                        </div>
                        <div class="row">
                            <label for="">Quy tắc cấp số</label>
                            
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