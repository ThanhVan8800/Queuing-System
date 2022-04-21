@extends('layouts.main')

@section('content')
<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
    <div class="card card-primary mt-3">
        <div class="card-body">
                        <div class="col-md-3">
                                <div class="form-group">
                                                <label style="color:#FF7506;">Thông tin tài khoản</label>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Họ tên: <span style="color:#FF4747;">*</span> </label>
                                <input type="text" name="username" value="{{old('username')}}"class="form-control" id="" placeholder="Nhập mã thiết bị">
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tên đăng nhập: <span style="color:#FF4747;">*</span></label>
                                                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập tài khoản">
                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Số điện thoại: <span style="color:#FF4747;">*</span> </label>
                                <input type="number" name="sdt" value="{{old('sdt')}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên thiết bị">
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mật khẩu: <span style="color:#FF4747;">*</span></label>
                                                <input type="password" name="password" value="{{old('password')}}" class="form-control" id="" placeholder="Nhập tài khoản">
                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Email: <span style="color:#FF4747;">*</span> </label>
                                <input type="email" name="email" class="form-control" value="{{old('email')}}" id="" placeholder="Nhập địa chỉ IP">
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nhập Lại Mật khẩu: <span style="color:#FF4747;">*</span></label>
                                                <input type="password" name="confirm_password"  class="form-control" id="exampleInputEmail1" placeholder="Nhập mật khẩu">    
                                            </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Vai trò: <span style="color:#FF4747;">*</span> </label>
                                <select class="form-control select2" name="role" style="width: 100%;">
                                                                <option selected="selected" >Chọn vai trò</option>
                                                            
                                                                
                                                                    <option value="1">Kế toán</option>
                                                                    <option value="0">Admin</option>
                                                        
                                                        
                                                                
                                </select>
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tình trạng: <span style="color:#FF4747;">*</span></label>
                                                <select class="form-control select2" name="status" style="width: 100%;">
                                                                <option selected="selected" value="1" >Hoạt động</option>
                                                                <option value="0" >Ngưng hoạt động</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tải ảnh lên:</label>
                                                    <input type="file" name="thumb"  class="form-control" id="" placeholder="Nhập mật khẩu">    
                                                </div>
                                            </div>
                            </div>
                        
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