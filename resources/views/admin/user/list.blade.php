@extends('layouts.main')

@section('content')
<div class="card card-primary mt-3"><br>
    <a href="{{route('user.create')}}">
        <label for="" class="ad-dev"><i class="fas fa-plus-circle" >Thêm thiết bị</i></label>
    </a>
    <div class="card-body">
                    <div class="row">
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Trạng thái hoạt động</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Tất cả</option>
                                                            <option>Hoạt động</option>
                                                            <option>Ngưng hoạt động</option>
                                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Trạng thái kết nối</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Tất cả</option>
                                                            <option>Kết nối</option>
                                                            <option>Mất kết nối</option>
                                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-3 offset-md-1">
                                    <form action="simple-results.html">
                                        <label for="">Từ khóa</label>
                                        <div class="input-group">
                                            <input type="search" class="form-control form-control-lg" style="height:36px;" placeholder="Type your keywords here">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn  btn-default" style="height:36px;">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                    </div>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 90px; " class="id-dev" >Tên đăng nhập</th>
                        <th style="width: 99px; " class="id-dev1">Họ tên</th>
                        <th style="width: 138px;" class="id-dev">Số điện thoại</th>
                        <th style="width: 171px" class="id-dev">Email</th>
                        <th style="width: 145px;" class="id-dev">Vai trò</th>
                        <th style="width: 268px;" class="id-dev">Trạng thái hoạt động</th>
                        <th style="width:82px" class="id-dev">Hình</th>
                        <th style="width:82px" class="id-dev"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @foreach ( $lstUser as  $key => $user )
                                    
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->sdt}}</td>
                                        <td>{{$user->email}}</td>
                                        <td value="{{$user->role}}">
                                        @if ($user->role == 0)
                                        accountant
                                        @elseif ($user->role == 1) 
                                        doctor
                                        @elseif ($user->role == 2) receptionist
                                        @elseif ($user->role == 3) manage
                                        @elseif ($user->role == 4) admin
                                        @elseif ($user->role == 5)
                                        superadmin
                                        @endif
                                        
                                        {{$user->role}}</td>
                                        <td value="{{$user->status}}">
                                            @if ($user->status == 1)
                                                Hoạt động
                                            @else   
                                                Ngưng hoạt động
                                            @endif
                                        </td>
                                        <td><img style="width:100px;max-height:100px;object-fit:contain" src="{{asset('/storage/'.$user->thumb)}}"></td>
                                        <td>
                                            <a href="{{route('user.edit',['user'=>$user])}}">Cập nhật</a>
                                        </td>
                                        <!-- @if(Auth()->user()->isAdmin()) -->
                                        <!-- @endif -->
                                    </tr>
                            
                            @endforeach
                    </tbody>
                    </table>
    </div>
    
</div>
<div class="card-footer clearfix">
        
</div>
@endsection