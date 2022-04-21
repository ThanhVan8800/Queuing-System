@extends('layouts.main')

@section('content')
<form action="{{route('user.update',['user' => $user])}}" method="post" enctype="multipart/form">
            @method('PATCH')
    @csrf
<div class="form-group col-md-12">
                <div class="card  card-outline">
                    <div class="card card-primary mt-3">
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="card-body box-profile">
                                                <div class="text-left">
                                                    <img class="profile img-fluid img-circle"
                                                        src="{{asset('/storage/'.$user->thumb)}}"
                                                        alt="User profile picture">
                                                        
                                                </div>
                                                        <h3 class="profile-username text-left" value="{{$user->username}}">{{$user->name}}</h3>
                                                        <input type="file"  class="form-control" id="upload">
                                                        <div id="image_show">

                                                        </div>
                                                        <input type="hidden" name="thumb" id="thumb">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="auto">
                                            <label class="name" >Tên người dùng  </label>
                                            <input type="text" name="username" value="{{$user->username}}"class="form-control"  id="">
                                        </div>
                                        <div class="auto1">
                                            <label class="name1" >Tên đăng nhập </label>
                                            <input type="text" name="name" value="{{$user->name}}"class="form-control" id="" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="auto2">
                                            <label class="name2">Số điện thoại  </label>
                                            <input type="text" name="sdt" value="{{$user->sdt}}" class="form-control " id="" >
                                        </div>
                                        <div class="auto3">
                                            <label  class="name3" style="margin-right: 25px;" >Mật khẩu </label>
                                            <input type="text" name="password" value="{{$user->password}}"class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="auto4">
                                            <label class="name4" style="margin-right: 25px;" >Email </label>
                                            <input type="text" name="email" value="{{$user->email}}"class="form-control" id="" >
                                        </div>
                                        <div class="auto5">
                                            <label  class="name5" style="margin-right: 25px;" >Vai trò </label>
                                            <input type="text" name="role" value="{{$user->role}}"class="form-control" id="" >
                                        </div>
                                    </div>
                                
                            </div>
                        
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="row">

        <!-- <label for="" class="btn-cancel">Hủy bỏ</label> -->
        <a href="" ><label for="" class="btn-cancel">Hủy bỏ</label></a>
        
        <input type="submit" class="btn-create" value="Cập nhật">
    </div>
</div>
</form>
@endsection