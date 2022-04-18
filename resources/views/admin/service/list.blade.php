@extends('layouts.main')

@section('content')
<div class="card card-primary mt-3"><br>
    <a href="{{route('service.create')}}">
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
                        <th style="width: 90px; " class="id-dev" >Mã dịch vụ </th>
                        <th style="width: 99px; " class="id-dev1">Tên dịch vụ</th>
                        <th style="width: 138px;" class="id-dev">Mô tả</th>
                        <th style="width: 171px" class="id-dev">Trạng thái hoạt động</th>
                        <th style="width:82px" class="id-dev"></th>
                        <th style="width:82px" class="id-dev"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lstService as  $serv)
                                    <tr>
                                        <td>{{$serv->id_service}}</td>
                                        <td>{{$serv->service_name}}</td>
                                        <td>{{$serv->description}}</td>
                                        <td >
                                            @if($serv->status == 1)
                                                <span class="btn btn-success btn-xs"></span>Đang hoạt động
                                            @else
                                            <span class="btn btn-danger btn-xs"></span>Ngừng hoạt động
                                            @endif
                                        </td>
                                        <td><a href="{{route('service.show',['service'=>$serv])}}">Chi tiết</a></td>
                                        
                                        <td><a href="{{route('service.edit',['service'=>$serv])}}">Cập nhật</a></td>
                                    </tr>
                        @endforeach
                    
                    </tbody>
                    </table>
    </div>
</div>
<div class="card-footer clearfix">
</div>
@endsection