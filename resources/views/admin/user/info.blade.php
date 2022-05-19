@extends('layouts.main')
@section('head')
<link rel="stylesheet" href="/info.css">

@endsection
@section('url')
<li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Dashboard <span class=""> > </span>Thiết bị<span class=""> > </span>Chi tiết</a>
</li>
@endsection
@section('content')
<form action="{{route('user.update',['user' => $user])}}" method="post" enctype="multipart/form">
            @method('PATCH')
    @csrf      

        <div class="card-body">
            <div class="row">
                <div class="col-md-4 margin-top-img ">
                    <img src="{{asset('/storage/'.$user->thumb)}}" alt="" class="avatar-user" >
                    <div class="avatar-input">
                        <a href="" class=""><i class="fa fa-solid fa-camera" ></i></a>
                    </div>
                    <div class="d-flex justify-content-center user-name" >
                        <p>{{$user->username}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group col-md-8 margin-top">
                        <label for="name">Tên người dùng</label>
                        <input type="name" name="name" id="name" class="form-control " value="{{$user->username}}" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Số điện thoại</label>
                        <input type="name" name="name" id="name" class="form-control" value="{{$user->sdt}}" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Email</label>
                        <input type="name" name="name" id="name" class="form-control" value="{{$user->email}}" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group col-md-8 margin-top">
                        <label for="name">Tên đăng nhập</label>
                        <input type="name" name="name" id="name" class="form-control" value="{{$user->name}}" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Mật khẩu</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$user->password}}" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Vai trò</label>
                        <input type="name" name="name" id="name" class="form-control" value="{{$user->role}}" disabled>
                    </div>
                </div>
                
            </div>
            
            <!-- /.card-body -->
        </div>
    
</div>
<div class="card-footer clearfix">
        
</div>
</form>
@endsection