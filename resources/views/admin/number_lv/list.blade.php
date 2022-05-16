@extends('layouts.main')

@section('content')
<div class="card card-primary mt-3"><br>
    
    <div class="card-body">
    
                    <div class="row">
                                <div class="col-md-1">
                                        <div class="form-group ">
                                            <label>Tên dịch vụ</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Tất cả</option>
                                                            <option>Hoạt động</option>
                                                            <option>Ngưng hoạt động</option>
                                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-1">
                                        <div class="form-group">
                                            <label>Tình trạng</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Tất cả</option>
                                                            <option>Kết nối</option>
                                                            <option>Mất kết nối</option>
                                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-1">
                                        <div class="form-group">
                                            <label>Nguồn cấp</label>
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
                                            <input type="search" class="form-control form-control-lg" style="height:36px;" placeholder="Nhập từ khóa">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn  btn-default" style="height:36px;">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                        
                    </div>
                    <table class="table table-bordered ">
                    <thead class="">
                        <tr>
                        <th style="width: 5%; " class="id-dev" >STT </th>
                        <th style="width: 90px; " class="id-dev" >Tên khách hàng </th>
                        <th style="width: 99px; " class="id-dev1">Tên dịch vụ</th>
                        <th style="width: 138px;" class="id-dev">Thời gian cấp</th>
                        <th style="width: 171px" class="id-dev">Hạn sử dụng</th>
                        <th style="width:82px" class="id-dev">Trạng thái</th>
                        <th style="width:82px" class="id-dev">Nguồn cấp</th>
                        <th style="width:82px" class="id-dev"></th>
                        <th style="width:82px">
                            <a href="{{route('numlv.create')}}" class="" style="position: static;
                                                left: 100%;
                                                right: -100%;
                                                top: 100%;
                                                bottom: -100%;color: #FF9138;"><i class="fas fa-plus-circle" style="font-size:20px; margin-left:82px" ></i>
                                                <label for="" class="ad-dev">Thêm thiết bị</label>
                            </a>    
                        </th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ( $lstNum as  $numlv )
                            
                                <tr>
                                    <td>{{$numlv->stt}}</td>
                                    <td>{{$numlv->username_cus}}</td>
                                    <td>{{$numlv->service}}</td>
                                    <td>{{$numlv->updated_at}}</td>
                                    <td>{{$numlv->hsd}}</td>
                                    <td>@if($numlv->status == 0)
                                        <span class="btn btn-primary btn-xs"></span>Đang chờ
                                        @elseif ($numlv->status == 1)  
                                        <span class="btn btn-secondary btn-xs"></span>Đã sử dụng  
                                        @elseif ($numlv->status == 2)  
                                        <span class="btn btn-danger btn-xs"></span> Bỏ qua
                                        @endif
                                    </td>
                                    <td>
                                        {{$numlv->device->device_name}}
                                                
                                    
                                    </td>
                                    <td>
                                        <a href="{{route('numlv.show',['numlv'=>$numlv])}}">Chi tiết</a>
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