@extends('layouts.main')

@section('content')
<div class="card card-primary mt-3"><br>
    <a href="{{route('setting.create')}}">
        <label for="" class="ad-dev"><i class="fas fa-plus-circle" >Thêm vai trò</i></label>
    </a>
    <div class="card-body">
                    <div class="row">
                                
                                <div class="col-md-4 mb-3  offset-md-7">
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
                        <th style="width: 90px; " class="id-dev" >Tên vai trò </th>
                        <th style="width: 99px; " class="id-dev1">Số người dùng</th>
                        <th style="width: 138px;" class="id-dev">Mô tả</th>
                        <th style="width:82px" class="id-dev"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lstRole as $role)
                        <tr>
                            <td value="{{4}}">{{$role->role}}</td>
                            <td value="{{$lstUser}}">
                            
                                    {{$lstUser}}
                            
                            </td>
                            <td>{{$role->description}}</td>
                            <td>
                                <a href="">Cập nhật</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>
    </div>
</div>
<div class="card-footer clearfix">
</div>
@endsection