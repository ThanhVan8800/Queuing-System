@extends('layouts.main')

@section('content')
<div class="card card-primary mt-3"><br>
    <a href="{{route('service.create')}}">
        <label for="" class="ad-dev"><i class="fas fa-plus-circle" >Thêm thiết bị</i></label>
    </a>
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

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $lstNum as  $key => $numbers )
                            
                                <tr>
                                    <td>{{$numbers->stt}}</td>
                                    <td>{{$numbers->username_cus}}</td>
                                    <td>{{$numbers->service_id}}</td>
                                    <td>{{$numbers->updated_at}}</td>
                                    <td>{{$numbers->hsd}}</td>
                                    <td>{{$numbers->status}}</td>
                                    <td>{{$numbers->device_id}}</td>
                                    <td></td>
                                </tr>
                        
                        @endforeach
                    </tbody>
                    </table>
    </div>
</div>
<div class="card-footer clearfix">
</div>
@endsection