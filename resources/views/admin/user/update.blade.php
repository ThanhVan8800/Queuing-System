@extends('layouts.main')

@section('content')
<form action="{{route('user.update',['user' => $user])}}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    @if($errors->any())
            @foreach ($errors->all() as $err)
            <li class="card-description" style="color: #fc424a;">{{ $err }}</li>
            @endforeach
            @endif
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
                                <input type="text" name="username" value="{{$user->username}}" class="form-control" id="" placeholder="Nhập mã thiết bị">
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tên đăng nhập: <span style="color:#FF4747;">*</span></label>
                                                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập tài khoản">
                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Số điện thoại: <span style="color:#FF4747;">*</span> </label>
                                <input type="number" name="sdt" value="{{$user -> sdt}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên thiết bị">
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mật khẩu: <span style="color:#FF4747;">*</span></label>
                                                <input type="password" name="password" value="{{$user -> password}}" class="form-control" id="" placeholder="Nhập tài khoản">
                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Email: <span style="color:#FF4747;">*</span> </label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ IP">
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nhập Lại Mật khẩu: <span style="color:#FF4747;">*</span></label>
                                                <input type="password" name="confirm_password" value="{{$user -> password}}" class="form-control" id="exampleInputEmail1" placeholder="Nhập mật khẩu">    
                                            </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label >Vai trò: <span style="color:#FF4747;">*</span> </label>
                                <select class="form-control select2" name="role" value="{{$user->role}}" style="width: 100%;">
                                                                <option selected="selected" value="{{$user->role}}" name="role">
                                                                        {{$user->role}}
                                                                </option>
                                                                
                                                                <option value="accountant" {{$user->role == 'accountant' ? 'selected' :''}} >accountant</option>
                                                                <option value="doctor" {{$user->role == 'doctor' ? 'selected' :''}} >doctor</option>
                                                                <option value="receptionist" {{$user->role == 'receptionist' ? 'selected' :''}} >receptionist</option>
                                                                <option value="manage" {{$user->role == 'manage' ? 'selected' :''}} >manage</option>
                                                                <option value="admin" {{$user->role == 'admin' ? 'selected' :''}} >admin</option>
                                                                <option value="superadmin" {{$user->role == 'superadmin' ? 'selected' :''}} >superadmin</option>
                                                                
                                                            
                                                                
                                                                
                                </select>
                            </div>
                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tình trạng: <span style="color:#FF4747;">*</span></label>
                                                <select class="form-control select2" name="status" value="{{$user->status}}" style="width: 100%;">
                                                                <option selected="selected" value="{{$user->status}}" >
                                                                    @if ($user->status == 1)
                                                                        Hoạt động
                                                                    @else 
                                                                        Ngưng hoạt động    
                                                                    @endif    
                                                                </option>
                                                                <option value="1" {{$user->status == '1' ? 'selected' :''}}>Hoạt động</option>
                                                                <option value="0"{{$user->status == '0' ? 'selected' :''}}>Ngưng hoạt động</option>
                                                </select>
                                            </div>
                            </div>
                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Hình ảnh</label>
                    <div class="custom-file">
                        <img style="left:50px;width:100px;max-height:100px;object-fit:contain" src="{{$user->thumb}}">
                        <input type="file" accept="image/*" name="thumb"><br>
                    </div>  
                                                </div>
                                            </div>
                        
                        </div>
                        <div class="form-group">

                            <label for="" style="color: #7E7D88;margin-top:50px;"><span style="color:#FF4747;">*</span> Là trường thông tin bắt buộc</label>
                        </div>
                        
        </div>
        
    </div>
    <div class="row">

        <!-- <label for="" class="btn-cancel">Hủy bỏ</label> -->
        <a href="" ><label for="" class="btn-cancel">Hủy bỏ</label></a>
        <input type="submit" class="btn-create" value="Cập nhật">
    </div>
</form>
@endsection